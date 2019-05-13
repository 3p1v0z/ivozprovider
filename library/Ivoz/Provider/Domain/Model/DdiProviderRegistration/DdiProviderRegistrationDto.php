<?php

namespace Ivoz\Provider\Domain\Model\DdiProviderRegistration;

class DdiProviderRegistrationDto extends DdiProviderRegistrationDtoAbstract
{
    /**
     * @inheritdoc
     * @codeCoverageIgnore
     */
    public static function getPropertyMap(string $context = '', string $rol = null)
    {
        $response =  parent::getPropertyMap(...func_get_args());

        // Remove application entity relation
        unset($response['trunksUacregId']);

        return $response;
    }
}
