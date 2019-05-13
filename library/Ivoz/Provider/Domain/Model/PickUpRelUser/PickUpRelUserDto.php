<?php

namespace Ivoz\Provider\Domain\Model\PickUpRelUser;

class PickUpRelUserDto extends PickUpRelUserDtoAbstract
{
    /**
     * @inheritdoc
     * @codeCoverageIgnore
     */
    public static function getPropertyMap(string $context = '', string $rol = null)
    {
        if ($context === self::CONTEXT_COLLECTION) {
            return [
                'id' => 'id',
                'pickUpGroupId' => 'pickUpGroup',
                'userId' => 'user'
            ];
        }

        return parent::getPropertyMap(...func_get_args());
    }
}
