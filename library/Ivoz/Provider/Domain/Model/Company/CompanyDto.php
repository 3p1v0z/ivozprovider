<?php

namespace Ivoz\Provider\Domain\Model\Company;

class CompanyDto extends CompanyDtoAbstract
{

    /**
     * @codeCoverageIgnore
     * @inheritdoc
     */
    public static function getPropertyMap(string $context = self::CONTEXT_SIMPLE, string $rol = null)
    {
        if ($context === self::CONTEXT_COLLECTION) {
            $response = [
                'id' => 'id',
                'name' => 'name',
                'nif' => 'nif'
            ];
        } else {
            $response = parent::getPropertyMap($context);
        }

        if ($rol === 'ROLE_COMPANY_ADMIN') {
            $response = self::filterFieldsForCompanyAdmin($response);
        }

        unset($response['domainId']);

        return $response;
    }

    /**
     * @param array $response
     * @return array
     */
    private static function filterFieldsForCompanyAdmin(array $response): array
    {
        $allowedFields = [
            'type',
            'name',
            'nif',
            'postalAddress',
            'postalCode',
            'town',
            'province',
            'countryName',
            'ipfilter',
            'onDemandRecord',
            'onDemandRecordCode',
            'recordingsLimitMB',
            'recordingsLimitEmail',
            'billingMethod',
            'balance',
            'showInvoices',
            'id',
            'languageId',
            'defaultTimezoneId',
            'brandId',
            'countryId',
            'currencyId',
            'outgoingDdiId',
            'outgoingDdiRuleId',
            'voicemailNotificationTemplateId',
            'faxNotificationTemplateId',
            'invoiceNotificationTemplateId',
            'callCsvNotificationTemplateId'
        ];

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
