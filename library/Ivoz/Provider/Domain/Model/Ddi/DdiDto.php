<?php

namespace Ivoz\Provider\Domain\Model\Ddi;

class DdiDto extends DdiDtoAbstract
{
    public function denormalize(array $data, string $context, string $rol = '')
    {
        if ($rol === 'ROLE_COMPANY_ADMIN') {
            $data = $this->filterReadOnlyFields($data);
        }

        return parent::denormalize($data, $context, $rol);
    }

    /**
     * @inheritdoc
     * @codeCoverageIgnore
     */
    public static function getPropertyMap(string $context = '', string $rol = null)
    {
        if ($context === self::CONTEXT_COLLECTION) {
            $response = [
                'id' => 'id',
                'ddi' => 'ddi',
                'ddie164' => 'ddie164',
                'routeType' => 'routeType'
            ];
        } else {
            $response = parent::getPropertyMap(...func_get_args());
        }

        if ($rol === 'ROLE_BRAND_ADMIN') {
            $response = self::filterFieldsForBrandAdmin($response);
        } elseif ($rol === 'ROLE_COMPANY_ADMIN') {
            $response = self::filterFieldsForCompanyAdmin($response);
        }

        return $response;
    }

    /**
     * @param array $data
     */
    private function filterReadOnlyFields(array $data): array
    {
        $readOnlyFlds = [
            'ddi',
            'country'
        ];

        foreach ($readOnlyFlds as $readOnlyFld) {
            if (!isset($data[$readOnlyFld])) {
                continue;
            }

            unset($data[$readOnlyFld]);
        }

        return $data;
    }

    private static function filterFieldsForBrandAdmin(array $response): array
    {
        $allowedFields = [
            'ddi',
            'id',
            'companyId',
            'brandId',
            'ddiProviderId',
            'countryId',
            'residentialDeviceId',
            'retailAccountId'
        ];

        return self::filterFields($response, $allowedFields);
    }

    private static function filterFieldsForCompanyAdmin(array $response): array
    {
        $allowedFields = [
            'ddi',
            'recordCalls',
            'displayName',
            'routeType',
            'billInboundCalls',
            'friendValue',
            'id',
            'companyId',
            'brandId',
            'conferenceRoomId',
            'languageId',
            'queueId',
            'externalCallFilterId',
            'userId',
            'ivrId',
            'huntGroupId',
            'faxId',
            'countryId',
            'residentialDeviceId',
            'conditionalRouteId',
            'retailAccountId'
        ];

        return self::filterFields($response, $allowedFields);
    }

    private static function filterFields(array $response, array $allowedFields): array
    {
        $response = array_filter(
            $response,
            function ($key) use ($allowedFields) {
                return in_array($key, $allowedFields, true);
            },
            ARRAY_FILTER_USE_KEY
        );

        return $response;
    }
}
