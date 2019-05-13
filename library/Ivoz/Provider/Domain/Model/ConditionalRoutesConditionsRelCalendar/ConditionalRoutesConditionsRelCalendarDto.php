<?php

namespace Ivoz\Provider\Domain\Model\ConditionalRoutesConditionsRelCalendar;

class ConditionalRoutesConditionsRelCalendarDto extends ConditionalRoutesConditionsRelCalendarDtoAbstract
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
                'conditionId' => 'condition',
                'calendarId' => 'calendar'
            ];
        }

        return parent::getPropertyMap(...func_get_args());
    }
}
