<?php

namespace Ivoz\Provider\Domain\Model\IvrEntry;

class IvrEntryDto extends IvrEntryDtoAbstract
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
                'entry' => 'entry',
                'routeType' => 'routeType'
            ];
        }

        return parent::getPropertyMap(...func_get_args());
    }
}
