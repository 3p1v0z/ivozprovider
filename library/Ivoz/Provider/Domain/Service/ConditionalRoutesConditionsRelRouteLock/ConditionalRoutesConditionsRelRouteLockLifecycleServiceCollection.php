<?php

namespace Ivoz\Provider\Domain\Service\ConditionalRoutesConditionsRelRouteLock;

use Ivoz\Core\Domain\Service\LifecycleServiceCollectionInterface;
use Ivoz\Core\Domain\Service\LifecycleServiceCollectionTrait;

/**
 * @codeCoverageIgnore
 */
class ConditionalRoutesConditionsRelRouteLockLifecycleServiceCollection implements LifecycleServiceCollectionInterface
{
    use LifecycleServiceCollectionTrait;

    public static $bindedBaseServices = [
        "pre_persist" =>     [
            \Ivoz\Provider\Domain\Service\ConditionalRoutesConditionsRelRouteLock\AvoidUpdates::class => 100,
        ],
    ];

    protected function addService(string $event, ConditionalRoutesConditionsRelRouteLockLifecycleEventHandlerInterface $service)
    {
        $this->services[$event][] = $service;
    }
}
