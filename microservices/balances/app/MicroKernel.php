<?php

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Ivoz\Provider\Domain\Service\Company\SyncBalances;
use Ivoz\Provider\Domain\Service\Carrier\SyncBalances as SyncCarrierBalances;
use Ivoz\Core\Domain\Service\DomainEventPublisher;
use Ivoz\Core\Application\RequestId;
use Ivoz\Core\Application\Event\CommandWasExecuted;

class MicroKernel extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle(),

            /* Core */
            new CoreBundle\CoreBundle(),
        ];

        return $bundles;
    }

    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config.yml');
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        // kernel is a service that points to this class
        // optional 3rd argument is the route name
        $routes->add('/', 'kernel:sync');
    }

    public function sync()
    {
        $this->registerCommand();

        /** @var SyncBalances $syncBalancesService */
        $syncBalancesService = $this->container->get(SyncBalances::class);
        $syncBalancesService->updateAll();

        /** @var SyncCarrierBalances $syncCarrierBalancesService */
        $syncCarrierBalancesService = $this->container->get(SyncCarrierBalances::class);
        $syncCarrierBalancesService->updateAll();

        return new Response("Company and carrier balances updated successfully!\n");
    }

    private function registerCommand()
    {
        /** @var DomainEventPublisher $eventPublisher */
        $eventPublisher = $this->container->get(
            DomainEventPublisher::class
        );

        /** @var RequestId $requestId */
        $requestId = $this->container->get(
            RequestId::class
        );

        $event = new CommandWasExecuted(
            $requestId->toString(),
            'Balances',
            'sync',
            [],
            []
        );

        $eventPublisher->publish($event);
    }

    // optional, to use the standard Symfony cache directory
    public function getCacheDir()
    {
        return __DIR__.'/../var/cache/'.$this->getEnvironment();
    }

    // optional, to use the standard Symfony logs directory
    public function getLogDir()
    {
        return __DIR__.'/../var/logs';
    }
}
