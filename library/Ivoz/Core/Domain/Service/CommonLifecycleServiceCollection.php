<?php

namespace Ivoz\Core\Domain\Service;

use Ivoz\Core\Domain\Model\EntityInterface;

class CommonLifecycleServiceCollection implements LifecycleServiceCollectionInterface
{
    use LifecycleServiceCollectionTrait;

    public function setServices(string $event, array $services)
    {
        $this->services[$event] = [];
        $isErrorHandler = $event ===  LifecycleEventHandlerInterface::EVENT_ON_ERROR;

        foreach ($services as $service) {
            if ($isErrorHandler) {
                return $this->addErrorhandler($service);
            }

            $this->addService($event, $service);
        }
    }

    protected function addService(string $event, CommonLifecycleEventHandlerInterface $service)
    {
        $this->services[$event][] = $service;
    }

    /**
     * @param EntityInterface $entity
     */
    public function execute(string $event, EntityInterface $entity)
    {
        foreach ($this->services[$event] as $service) {
            $service->handle($entity);
        }
    }
}
