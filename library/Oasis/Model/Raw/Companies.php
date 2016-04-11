<?php

/**
 * Application Model
 *
 * @package Oasis\Model\Raw
 * @subpackage Model
 * @author Luis Felipe Garcia
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * [entity]
 *
 * @package Oasis\Model
 * @subpackage Model
 * @author Luis Felipe Garcia
 */

namespace Oasis\Model\Raw;
class Companies extends ModelAbstract
{


    /**
     * [uuid:php]
     * Database var type binary(36)
     *
     * @var binary
     */
    protected $_id;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_brandId;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_name;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_nif;

    /**
     * Database var type mediumint
     *
     * @var int
     */
    protected $_defaultTimezoneId;

    /**
     * Database var type binary(36)
     *
     * @var binary
     */
    protected $_applicationServerId;

    /**
     * Database var type binary(36)
     *
     * @var binary
     */
    protected $_transformationRulesetGroupsId;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_externalMaxCalls;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_postalAddress;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_postalCode;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_town;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_province;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_country;

    /**
     * Database var type binary(36)
     *
     * @var binary
     */
    protected $_invoiceLanguageId;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_outboundPrefix;

    /**
     * Database var type mediumint
     *
     * @var int
     */
    protected $_countryId;


    /**
     * Parent relation Companies_ibfk_2
     *
     * @var \Oasis\Model\Raw\Timezones
     */
    protected $_DefaultTimezone;

    /**
     * Parent relation Companies_ibfk_4
     *
     * @var \Oasis\Model\Raw\Brands
     */
    protected $_Brand;

    /**
     * Parent relation Companies_ibfk_5
     *
     * @var \Oasis\Model\Raw\ApplicationServers
     */
    protected $_ApplicationServer;

    /**
     * Parent relation Companies_ibfk_7
     *
     * @var \Oasis\Model\Raw\TransformationRulesetGroupsUsers
     */
    protected $_TransformationRulesetGroups;

    /**
     * Parent relation Companies_ibfk_8
     *
     * @var \Oasis\Model\Raw\Languages
     */
    protected $_InvoiceLanguage;

    /**
     * Parent relation Companies_ibfk_9
     *
     * @var \Oasis\Model\Raw\Countries
     */
    protected $_Countries;


    /**
     * Dependent relation Calendars_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\Calendars[]
     */
    protected $_Calendars;

    /**
     * Dependent relation CallAcl_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\CallACL[]
     */
    protected $_CallACL;

    /**
     * Dependent relation CallACLPatterns_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\CallACLPatterns[]
     */
    protected $_CallACLPatterns;

    /**
     * Dependent relation DDIs_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\DDIs[]
     */
    protected $_DDIs;

    /**
     * Dependent relation Extensions_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\Extensions[]
     */
    protected $_Extensions;

    /**
     * Dependent relation ExternalCallFilters_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\ExternalCallFilters[]
     */
    protected $_ExternalCallFilters;

    /**
     * Dependent relation Faxes_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\Faxes[]
     */
    protected $_Faxes;

    /**
     * Dependent relation HuntGroups_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\HuntGroups[]
     */
    protected $_HuntGroups;

    /**
     * Dependent relation IVRCommon_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\IVRCommon[]
     */
    protected $_IVRCommon;

    /**
     * Dependent relation IVRCustom_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\IVRCustom[]
     */
    protected $_IVRCustom;

    /**
     * Dependent relation Invoices_ibfk_2
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\Invoices[]
     */
    protected $_Invoices;

    /**
     * Dependent relation Locutions_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\Locutions[]
     */
    protected $_Locutions;

    /**
     * Dependent relation MusicOnHold_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\MusicOnHold[]
     */
    protected $_MusicOnHold;

    /**
     * Dependent relation PickUpGroups_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\PickUpGroups[]
     */
    protected $_PickUpGroups;

    /**
     * Dependent relation PricingPlansRelCompanies_ibfk_2
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\PricingPlansRelCompanies[]
     */
    protected $_PricingPlansRelCompanies;

    /**
     * Dependent relation Schedules_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\Schedules[]
     */
    protected $_Schedules;

    /**
     * Dependent relation Services_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\Services[]
     */
    protected $_Services;

    /**
     * Dependent relation Terminals_CompanyId_ibfk_2
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\Terminals[]
     */
    protected $_Terminals;

    /**
     * Dependent relation Users_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\Users[]
     */
    protected $_Users;

    /**
     * Dependent relation parsedCDRs_ibfk_2
     * Type: One-to-Many relationship
     *
     * @var \Oasis\Model\Raw\ParsedCDRs[]
     */
    protected $_ParsedCDRs;

    protected $_columnsList = array(
        'id'=>'id',
        'brandId'=>'brandId',
        'name'=>'name',
        'nif'=>'nif',
        'defaultTimezoneId'=>'defaultTimezoneId',
        'applicationServerId'=>'applicationServerId',
        'transformationRulesetGroupsId'=>'transformationRulesetGroupsId',
        'externalMaxCalls'=>'externalMaxCalls',
        'postalAddress'=>'postalAddress',
        'postalCode'=>'postalCode',
        'town'=>'town',
        'province'=>'province',
        'country'=>'country',
        'invoiceLanguageId'=>'invoiceLanguageId',
        'outbound_prefix'=>'outboundPrefix',
        'countryId'=>'countryId',
    );

    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        $this->setColumnsMeta(array(
            'id'=> array('uuid:php'),
        ));

        $this->setMultiLangColumnsList(array(
        ));

        $this->setAvailableLangs(array('es', 'en'));

        $this->setParentList(array(
            'CompaniesIbfk2'=> array(
                    'property' => 'DefaultTimezone',
                    'table_name' => 'Timezones',
                ),
            'CompaniesIbfk4'=> array(
                    'property' => 'Brand',
                    'table_name' => 'Brands',
                ),
            'CompaniesIbfk5'=> array(
                    'property' => 'ApplicationServer',
                    'table_name' => 'ApplicationServers',
                ),
            'CompaniesIbfk7'=> array(
                    'property' => 'TransformationRulesetGroups',
                    'table_name' => 'TransformationRulesetGroupsUsers',
                ),
            'CompaniesIbfk8'=> array(
                    'property' => 'InvoiceLanguage',
                    'table_name' => 'Languages',
                ),
            'CompaniesIbfk9'=> array(
                    'property' => 'Countries',
                    'table_name' => 'Countries',
                ),
        ));

        $this->setDependentList(array(
            'CalendarsIbfk1' => array(
                    'property' => 'Calendars',
                    'table_name' => 'Calendars',
                ),
            'CallAclIbfk1' => array(
                    'property' => 'CallACL',
                    'table_name' => 'CallACL',
                ),
            'CallACLPatternsIbfk1' => array(
                    'property' => 'CallACLPatterns',
                    'table_name' => 'CallACLPatterns',
                ),
            'DDIsIbfk1' => array(
                    'property' => 'DDIs',
                    'table_name' => 'DDIs',
                ),
            'ExtensionsIbfk1' => array(
                    'property' => 'Extensions',
                    'table_name' => 'Extensions',
                ),
            'ExternalCallFiltersIbfk1' => array(
                    'property' => 'ExternalCallFilters',
                    'table_name' => 'ExternalCallFilters',
                ),
            'FaxesIbfk1' => array(
                    'property' => 'Faxes',
                    'table_name' => 'Faxes',
                ),
            'HuntGroupsIbfk1' => array(
                    'property' => 'HuntGroups',
                    'table_name' => 'HuntGroups',
                ),
            'IVRCommonIbfk1' => array(
                    'property' => 'IVRCommon',
                    'table_name' => 'IVRCommon',
                ),
            'IVRCustomIbfk1' => array(
                    'property' => 'IVRCustom',
                    'table_name' => 'IVRCustom',
                ),
            'InvoicesIbfk2' => array(
                    'property' => 'Invoices',
                    'table_name' => 'Invoices',
                ),
            'LocutionsIbfk1' => array(
                    'property' => 'Locutions',
                    'table_name' => 'Locutions',
                ),
            'MusicOnHoldIbfk1' => array(
                    'property' => 'MusicOnHold',
                    'table_name' => 'MusicOnHold',
                ),
            'PickUpGroupsIbfk1' => array(
                    'property' => 'PickUpGroups',
                    'table_name' => 'PickUpGroups',
                ),
            'PricingPlansRelCompaniesIbfk2' => array(
                    'property' => 'PricingPlansRelCompanies',
                    'table_name' => 'PricingPlansRelCompanies',
                ),
            'SchedulesIbfk1' => array(
                    'property' => 'Schedules',
                    'table_name' => 'Schedules',
                ),
            'ServicesIbfk1' => array(
                    'property' => 'Services',
                    'table_name' => 'Services',
                ),
            'TerminalsCompanyIdIbfk2' => array(
                    'property' => 'Terminals',
                    'table_name' => 'Terminals',
                ),
            'UsersIbfk1' => array(
                    'property' => 'Users',
                    'table_name' => 'Users',
                ),
            'ParsedCDRsIbfk2' => array(
                    'property' => 'ParsedCDRs',
                    'table_name' => 'parsedCDRs',
                ),
        ));

        $this->setOnDeleteCascadeRelationships(array(
            'Calendars_ibfk_1',
            'CallAcl_ibfk_1',
            'CallACLPatterns_ibfk_1'
        ));



        $this->_defaultValues = array(
            'externalMaxCalls' => '0',
        );

        $this->_initFileObjects();
        parent::__construct();
    }

    /**
     * This method is called just after parent's constructor
     */
    public function init()
    {
    }
    /**************************************************************************
    ************************** File System Object (FSO)************************
    ***************************************************************************/

    protected function _initFileObjects()
    {

        return $this;
    }

    public function getFileObjects()
    {

        return array();
    }


    /**************************************************************************
    *********************************** /FSO ***********************************
    ***************************************************************************/

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param binary $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setId($data)
    {

        if ($this->_id != $data) {
            $this->_logChange('id');
        }

        $this->_id = $data;
        return $this;
    }

    /**
     * Gets column id
     *
     * @return binary
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setBrandId($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_brandId != $data) {
            $this->_logChange('brandId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_brandId = $data;

        } else if (!is_null($data)) {
            $this->_brandId = (int) $data;

        } else {
            $this->_brandId = $data;
        }
        return $this;
    }

    /**
     * Gets column brandId
     *
     * @return int
     */
    public function getBrandId()
    {
        return $this->_brandId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setName($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_name != $data) {
            $this->_logChange('name');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_name = $data;

        } else if (!is_null($data)) {
            $this->_name = (string) $data;

        } else {
            $this->_name = $data;
        }
        return $this;
    }

    /**
     * Gets column name
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setNif($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_nif != $data) {
            $this->_logChange('nif');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_nif = $data;

        } else if (!is_null($data)) {
            $this->_nif = (string) $data;

        } else {
            $this->_nif = $data;
        }
        return $this;
    }

    /**
     * Gets column nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->_nif;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setDefaultTimezoneId($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_defaultTimezoneId != $data) {
            $this->_logChange('defaultTimezoneId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_defaultTimezoneId = $data;

        } else if (!is_null($data)) {
            $this->_defaultTimezoneId = (int) $data;

        } else {
            $this->_defaultTimezoneId = $data;
        }
        return $this;
    }

    /**
     * Gets column defaultTimezoneId
     *
     * @return int
     */
    public function getDefaultTimezoneId()
    {
        return $this->_defaultTimezoneId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param binary $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setApplicationServerId($data)
    {

        if ($this->_applicationServerId != $data) {
            $this->_logChange('applicationServerId');
        }

        $this->_applicationServerId = $data;
        return $this;
    }

    /**
     * Gets column applicationServerId
     *
     * @return binary
     */
    public function getApplicationServerId()
    {
        return $this->_applicationServerId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param binary $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setTransformationRulesetGroupsId($data)
    {

        if ($this->_transformationRulesetGroupsId != $data) {
            $this->_logChange('transformationRulesetGroupsId');
        }

        $this->_transformationRulesetGroupsId = $data;
        return $this;
    }

    /**
     * Gets column transformationRulesetGroupsId
     *
     * @return binary
     */
    public function getTransformationRulesetGroupsId()
    {
        return $this->_transformationRulesetGroupsId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setExternalMaxCalls($data)
    {

        if ($this->_externalMaxCalls != $data) {
            $this->_logChange('externalMaxCalls');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_externalMaxCalls = $data;

        } else if (!is_null($data)) {
            $this->_externalMaxCalls = (int) $data;

        } else {
            $this->_externalMaxCalls = $data;
        }
        return $this;
    }

    /**
     * Gets column externalMaxCalls
     *
     * @return int
     */
    public function getExternalMaxCalls()
    {
        return $this->_externalMaxCalls;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setPostalAddress($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_postalAddress != $data) {
            $this->_logChange('postalAddress');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_postalAddress = $data;

        } else if (!is_null($data)) {
            $this->_postalAddress = (string) $data;

        } else {
            $this->_postalAddress = $data;
        }
        return $this;
    }

    /**
     * Gets column postalAddress
     *
     * @return string
     */
    public function getPostalAddress()
    {
        return $this->_postalAddress;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setPostalCode($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_postalCode != $data) {
            $this->_logChange('postalCode');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_postalCode = $data;

        } else if (!is_null($data)) {
            $this->_postalCode = (string) $data;

        } else {
            $this->_postalCode = $data;
        }
        return $this;
    }

    /**
     * Gets column postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->_postalCode;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setTown($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_town != $data) {
            $this->_logChange('town');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_town = $data;

        } else if (!is_null($data)) {
            $this->_town = (string) $data;

        } else {
            $this->_town = $data;
        }
        return $this;
    }

    /**
     * Gets column town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->_town;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setProvince($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_province != $data) {
            $this->_logChange('province');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_province = $data;

        } else if (!is_null($data)) {
            $this->_province = (string) $data;

        } else {
            $this->_province = $data;
        }
        return $this;
    }

    /**
     * Gets column province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->_province;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setCountry($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_country != $data) {
            $this->_logChange('country');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_country = $data;

        } else if (!is_null($data)) {
            $this->_country = (string) $data;

        } else {
            $this->_country = $data;
        }
        return $this;
    }

    /**
     * Gets column country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->_country;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param binary $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setInvoiceLanguageId($data)
    {

        if ($this->_invoiceLanguageId != $data) {
            $this->_logChange('invoiceLanguageId');
        }

        $this->_invoiceLanguageId = $data;
        return $this;
    }

    /**
     * Gets column invoiceLanguageId
     *
     * @return binary
     */
    public function getInvoiceLanguageId()
    {
        return $this->_invoiceLanguageId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setOutboundPrefix($data)
    {

        if ($this->_outboundPrefix != $data) {
            $this->_logChange('outboundPrefix');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_outboundPrefix = $data;

        } else if (!is_null($data)) {
            $this->_outboundPrefix = (string) $data;

        } else {
            $this->_outboundPrefix = $data;
        }
        return $this;
    }

    /**
     * Gets column outbound_prefix
     *
     * @return string
     */
    public function getOutboundPrefix()
    {
        return $this->_outboundPrefix;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setCountryId($data)
    {

        if ($this->_countryId != $data) {
            $this->_logChange('countryId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_countryId = $data;

        } else if (!is_null($data)) {
            $this->_countryId = (int) $data;

        } else {
            $this->_countryId = $data;
        }
        return $this;
    }

    /**
     * Gets column countryId
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->_countryId;
    }

    /**
     * Sets parent relation DefaultTimezone
     *
     * @param \Oasis\Model\Raw\Timezones $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setDefaultTimezone(\Oasis\Model\Raw\Timezones $data)
    {
        $this->_DefaultTimezone = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setDefaultTimezoneId($primaryKey);
        }

        $this->_setLoaded('CompaniesIbfk2');
        return $this;
    }

    /**
     * Gets parent DefaultTimezone
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\Timezones
     */
    public function getDefaultTimezone($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CompaniesIbfk2';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_DefaultTimezone = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_DefaultTimezone;
    }

    /**
     * Sets parent relation Brand
     *
     * @param \Oasis\Model\Raw\Brands $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setBrand(\Oasis\Model\Raw\Brands $data)
    {
        $this->_Brand = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setBrandId($primaryKey);
        }

        $this->_setLoaded('CompaniesIbfk4');
        return $this;
    }

    /**
     * Gets parent Brand
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\Brands
     */
    public function getBrand($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CompaniesIbfk4';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_Brand = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_Brand;
    }

    /**
     * Sets parent relation ApplicationServer
     *
     * @param \Oasis\Model\Raw\ApplicationServers $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setApplicationServer(\Oasis\Model\Raw\ApplicationServers $data)
    {
        $this->_ApplicationServer = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setApplicationServerId($primaryKey);
        }

        $this->_setLoaded('CompaniesIbfk5');
        return $this;
    }

    /**
     * Gets parent ApplicationServer
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\ApplicationServers
     */
    public function getApplicationServer($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CompaniesIbfk5';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_ApplicationServer = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_ApplicationServer;
    }

    /**
     * Sets parent relation TransformationRulesetGroups
     *
     * @param \Oasis\Model\Raw\TransformationRulesetGroupsUsers $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setTransformationRulesetGroups(\Oasis\Model\Raw\TransformationRulesetGroupsUsers $data)
    {
        $this->_TransformationRulesetGroups = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setTransformationRulesetGroupsId($primaryKey);
        }

        $this->_setLoaded('CompaniesIbfk7');
        return $this;
    }

    /**
     * Gets parent TransformationRulesetGroups
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\TransformationRulesetGroupsUsers
     */
    public function getTransformationRulesetGroups($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CompaniesIbfk7';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_TransformationRulesetGroups = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_TransformationRulesetGroups;
    }

    /**
     * Sets parent relation InvoiceLanguage
     *
     * @param \Oasis\Model\Raw\Languages $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setInvoiceLanguage(\Oasis\Model\Raw\Languages $data)
    {
        $this->_InvoiceLanguage = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setInvoiceLanguageId($primaryKey);
        }

        $this->_setLoaded('CompaniesIbfk8');
        return $this;
    }

    /**
     * Gets parent InvoiceLanguage
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\Languages
     */
    public function getInvoiceLanguage($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CompaniesIbfk8';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_InvoiceLanguage = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_InvoiceLanguage;
    }

    /**
     * Sets parent relation Country
     *
     * @param \Oasis\Model\Raw\Countries $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function setCountries(\Oasis\Model\Raw\Countries $data)
    {
        $this->_Countries = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setCountryId($primaryKey);
        }

        $this->_setLoaded('CompaniesIbfk9');
        return $this;
    }

    /**
     * Gets parent Country
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\Countries
     */
    public function getCountries($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CompaniesIbfk9';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_Countries = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_Countries;
    }

    /**
     * Sets dependent relations Calendars_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\Calendars
     * @return \Oasis\Model\Raw\Companies
     */
    public function setCalendars(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Calendars === null) {

                $this->getCalendars();
            }

            $oldRelations = $this->_Calendars;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Calendars = array();

        foreach ($data as $object) {
            $this->addCalendars($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Calendars_ibfk_1
     *
     * @param \Oasis\Model\Raw\Calendars $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addCalendars(\Oasis\Model\Raw\Calendars $data)
    {
        $this->_Calendars[] = $data;
        $this->_setLoaded('CalendarsIbfk1');
        return $this;
    }

    /**
     * Gets dependent Calendars_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\Calendars
     */
    public function getCalendars($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CalendarsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Calendars = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Calendars;
    }

    /**
     * Sets dependent relations CallAcl_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\CallACL
     * @return \Oasis\Model\Raw\Companies
     */
    public function setCallACL(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_CallACL === null) {

                $this->getCallACL();
            }

            $oldRelations = $this->_CallACL;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_CallACL = array();

        foreach ($data as $object) {
            $this->addCallACL($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations CallAcl_ibfk_1
     *
     * @param \Oasis\Model\Raw\CallACL $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addCallACL(\Oasis\Model\Raw\CallACL $data)
    {
        $this->_CallACL[] = $data;
        $this->_setLoaded('CallAclIbfk1');
        return $this;
    }

    /**
     * Gets dependent CallAcl_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\CallACL
     */
    public function getCallACL($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CallAclIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_CallACL = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_CallACL;
    }

    /**
     * Sets dependent relations CallACLPatterns_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\CallACLPatterns
     * @return \Oasis\Model\Raw\Companies
     */
    public function setCallACLPatterns(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_CallACLPatterns === null) {

                $this->getCallACLPatterns();
            }

            $oldRelations = $this->_CallACLPatterns;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_CallACLPatterns = array();

        foreach ($data as $object) {
            $this->addCallACLPatterns($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations CallACLPatterns_ibfk_1
     *
     * @param \Oasis\Model\Raw\CallACLPatterns $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addCallACLPatterns(\Oasis\Model\Raw\CallACLPatterns $data)
    {
        $this->_CallACLPatterns[] = $data;
        $this->_setLoaded('CallACLPatternsIbfk1');
        return $this;
    }

    /**
     * Gets dependent CallACLPatterns_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\CallACLPatterns
     */
    public function getCallACLPatterns($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CallACLPatternsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_CallACLPatterns = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_CallACLPatterns;
    }

    /**
     * Sets dependent relations DDIs_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\DDIs
     * @return \Oasis\Model\Raw\Companies
     */
    public function setDDIs(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_DDIs === null) {

                $this->getDDIs();
            }

            $oldRelations = $this->_DDIs;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_DDIs = array();

        foreach ($data as $object) {
            $this->addDDIs($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations DDIs_ibfk_1
     *
     * @param \Oasis\Model\Raw\DDIs $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addDDIs(\Oasis\Model\Raw\DDIs $data)
    {
        $this->_DDIs[] = $data;
        $this->_setLoaded('DDIsIbfk1');
        return $this;
    }

    /**
     * Gets dependent DDIs_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\DDIs
     */
    public function getDDIs($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'DDIsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_DDIs = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_DDIs;
    }

    /**
     * Sets dependent relations Extensions_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\Extensions
     * @return \Oasis\Model\Raw\Companies
     */
    public function setExtensions(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Extensions === null) {

                $this->getExtensions();
            }

            $oldRelations = $this->_Extensions;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Extensions = array();

        foreach ($data as $object) {
            $this->addExtensions($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Extensions_ibfk_1
     *
     * @param \Oasis\Model\Raw\Extensions $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addExtensions(\Oasis\Model\Raw\Extensions $data)
    {
        $this->_Extensions[] = $data;
        $this->_setLoaded('ExtensionsIbfk1');
        return $this;
    }

    /**
     * Gets dependent Extensions_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\Extensions
     */
    public function getExtensions($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ExtensionsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Extensions = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Extensions;
    }

    /**
     * Sets dependent relations ExternalCallFilters_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\ExternalCallFilters
     * @return \Oasis\Model\Raw\Companies
     */
    public function setExternalCallFilters(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_ExternalCallFilters === null) {

                $this->getExternalCallFilters();
            }

            $oldRelations = $this->_ExternalCallFilters;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_ExternalCallFilters = array();

        foreach ($data as $object) {
            $this->addExternalCallFilters($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations ExternalCallFilters_ibfk_1
     *
     * @param \Oasis\Model\Raw\ExternalCallFilters $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addExternalCallFilters(\Oasis\Model\Raw\ExternalCallFilters $data)
    {
        $this->_ExternalCallFilters[] = $data;
        $this->_setLoaded('ExternalCallFiltersIbfk1');
        return $this;
    }

    /**
     * Gets dependent ExternalCallFilters_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\ExternalCallFilters
     */
    public function getExternalCallFilters($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ExternalCallFiltersIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_ExternalCallFilters = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_ExternalCallFilters;
    }

    /**
     * Sets dependent relations Faxes_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\Faxes
     * @return \Oasis\Model\Raw\Companies
     */
    public function setFaxes(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Faxes === null) {

                $this->getFaxes();
            }

            $oldRelations = $this->_Faxes;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Faxes = array();

        foreach ($data as $object) {
            $this->addFaxes($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Faxes_ibfk_1
     *
     * @param \Oasis\Model\Raw\Faxes $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addFaxes(\Oasis\Model\Raw\Faxes $data)
    {
        $this->_Faxes[] = $data;
        $this->_setLoaded('FaxesIbfk1');
        return $this;
    }

    /**
     * Gets dependent Faxes_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\Faxes
     */
    public function getFaxes($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'FaxesIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Faxes = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Faxes;
    }

    /**
     * Sets dependent relations HuntGroups_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\HuntGroups
     * @return \Oasis\Model\Raw\Companies
     */
    public function setHuntGroups(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_HuntGroups === null) {

                $this->getHuntGroups();
            }

            $oldRelations = $this->_HuntGroups;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_HuntGroups = array();

        foreach ($data as $object) {
            $this->addHuntGroups($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations HuntGroups_ibfk_1
     *
     * @param \Oasis\Model\Raw\HuntGroups $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addHuntGroups(\Oasis\Model\Raw\HuntGroups $data)
    {
        $this->_HuntGroups[] = $data;
        $this->_setLoaded('HuntGroupsIbfk1');
        return $this;
    }

    /**
     * Gets dependent HuntGroups_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\HuntGroups
     */
    public function getHuntGroups($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'HuntGroupsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_HuntGroups = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_HuntGroups;
    }

    /**
     * Sets dependent relations IVRCommon_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\IVRCommon
     * @return \Oasis\Model\Raw\Companies
     */
    public function setIVRCommon(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_IVRCommon === null) {

                $this->getIVRCommon();
            }

            $oldRelations = $this->_IVRCommon;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_IVRCommon = array();

        foreach ($data as $object) {
            $this->addIVRCommon($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations IVRCommon_ibfk_1
     *
     * @param \Oasis\Model\Raw\IVRCommon $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addIVRCommon(\Oasis\Model\Raw\IVRCommon $data)
    {
        $this->_IVRCommon[] = $data;
        $this->_setLoaded('IVRCommonIbfk1');
        return $this;
    }

    /**
     * Gets dependent IVRCommon_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\IVRCommon
     */
    public function getIVRCommon($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'IVRCommonIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_IVRCommon = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_IVRCommon;
    }

    /**
     * Sets dependent relations IVRCustom_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\IVRCustom
     * @return \Oasis\Model\Raw\Companies
     */
    public function setIVRCustom(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_IVRCustom === null) {

                $this->getIVRCustom();
            }

            $oldRelations = $this->_IVRCustom;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_IVRCustom = array();

        foreach ($data as $object) {
            $this->addIVRCustom($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations IVRCustom_ibfk_1
     *
     * @param \Oasis\Model\Raw\IVRCustom $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addIVRCustom(\Oasis\Model\Raw\IVRCustom $data)
    {
        $this->_IVRCustom[] = $data;
        $this->_setLoaded('IVRCustomIbfk1');
        return $this;
    }

    /**
     * Gets dependent IVRCustom_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\IVRCustom
     */
    public function getIVRCustom($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'IVRCustomIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_IVRCustom = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_IVRCustom;
    }

    /**
     * Sets dependent relations Invoices_ibfk_2
     *
     * @param array $data An array of \Oasis\Model\Raw\Invoices
     * @return \Oasis\Model\Raw\Companies
     */
    public function setInvoices(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Invoices === null) {

                $this->getInvoices();
            }

            $oldRelations = $this->_Invoices;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Invoices = array();

        foreach ($data as $object) {
            $this->addInvoices($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Invoices_ibfk_2
     *
     * @param \Oasis\Model\Raw\Invoices $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addInvoices(\Oasis\Model\Raw\Invoices $data)
    {
        $this->_Invoices[] = $data;
        $this->_setLoaded('InvoicesIbfk2');
        return $this;
    }

    /**
     * Gets dependent Invoices_ibfk_2
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\Invoices
     */
    public function getInvoices($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'InvoicesIbfk2';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Invoices = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Invoices;
    }

    /**
     * Sets dependent relations Locutions_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\Locutions
     * @return \Oasis\Model\Raw\Companies
     */
    public function setLocutions(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Locutions === null) {

                $this->getLocutions();
            }

            $oldRelations = $this->_Locutions;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Locutions = array();

        foreach ($data as $object) {
            $this->addLocutions($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Locutions_ibfk_1
     *
     * @param \Oasis\Model\Raw\Locutions $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addLocutions(\Oasis\Model\Raw\Locutions $data)
    {
        $this->_Locutions[] = $data;
        $this->_setLoaded('LocutionsIbfk1');
        return $this;
    }

    /**
     * Gets dependent Locutions_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\Locutions
     */
    public function getLocutions($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'LocutionsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Locutions = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Locutions;
    }

    /**
     * Sets dependent relations MusicOnHold_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\MusicOnHold
     * @return \Oasis\Model\Raw\Companies
     */
    public function setMusicOnHold(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_MusicOnHold === null) {

                $this->getMusicOnHold();
            }

            $oldRelations = $this->_MusicOnHold;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_MusicOnHold = array();

        foreach ($data as $object) {
            $this->addMusicOnHold($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations MusicOnHold_ibfk_1
     *
     * @param \Oasis\Model\Raw\MusicOnHold $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addMusicOnHold(\Oasis\Model\Raw\MusicOnHold $data)
    {
        $this->_MusicOnHold[] = $data;
        $this->_setLoaded('MusicOnHoldIbfk1');
        return $this;
    }

    /**
     * Gets dependent MusicOnHold_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\MusicOnHold
     */
    public function getMusicOnHold($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'MusicOnHoldIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_MusicOnHold = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_MusicOnHold;
    }

    /**
     * Sets dependent relations PickUpGroups_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\PickUpGroups
     * @return \Oasis\Model\Raw\Companies
     */
    public function setPickUpGroups(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_PickUpGroups === null) {

                $this->getPickUpGroups();
            }

            $oldRelations = $this->_PickUpGroups;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_PickUpGroups = array();

        foreach ($data as $object) {
            $this->addPickUpGroups($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations PickUpGroups_ibfk_1
     *
     * @param \Oasis\Model\Raw\PickUpGroups $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addPickUpGroups(\Oasis\Model\Raw\PickUpGroups $data)
    {
        $this->_PickUpGroups[] = $data;
        $this->_setLoaded('PickUpGroupsIbfk1');
        return $this;
    }

    /**
     * Gets dependent PickUpGroups_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\PickUpGroups
     */
    public function getPickUpGroups($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'PickUpGroupsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_PickUpGroups = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_PickUpGroups;
    }

    /**
     * Sets dependent relations PricingPlansRelCompanies_ibfk_2
     *
     * @param array $data An array of \Oasis\Model\Raw\PricingPlansRelCompanies
     * @return \Oasis\Model\Raw\Companies
     */
    public function setPricingPlansRelCompanies(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_PricingPlansRelCompanies === null) {

                $this->getPricingPlansRelCompanies();
            }

            $oldRelations = $this->_PricingPlansRelCompanies;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_PricingPlansRelCompanies = array();

        foreach ($data as $object) {
            $this->addPricingPlansRelCompanies($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations PricingPlansRelCompanies_ibfk_2
     *
     * @param \Oasis\Model\Raw\PricingPlansRelCompanies $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addPricingPlansRelCompanies(\Oasis\Model\Raw\PricingPlansRelCompanies $data)
    {
        $this->_PricingPlansRelCompanies[] = $data;
        $this->_setLoaded('PricingPlansRelCompaniesIbfk2');
        return $this;
    }

    /**
     * Gets dependent PricingPlansRelCompanies_ibfk_2
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\PricingPlansRelCompanies
     */
    public function getPricingPlansRelCompanies($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'PricingPlansRelCompaniesIbfk2';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_PricingPlansRelCompanies = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_PricingPlansRelCompanies;
    }

    /**
     * Sets dependent relations Schedules_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\Schedules
     * @return \Oasis\Model\Raw\Companies
     */
    public function setSchedules(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Schedules === null) {

                $this->getSchedules();
            }

            $oldRelations = $this->_Schedules;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Schedules = array();

        foreach ($data as $object) {
            $this->addSchedules($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Schedules_ibfk_1
     *
     * @param \Oasis\Model\Raw\Schedules $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addSchedules(\Oasis\Model\Raw\Schedules $data)
    {
        $this->_Schedules[] = $data;
        $this->_setLoaded('SchedulesIbfk1');
        return $this;
    }

    /**
     * Gets dependent Schedules_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\Schedules
     */
    public function getSchedules($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'SchedulesIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Schedules = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Schedules;
    }

    /**
     * Sets dependent relations Services_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\Services
     * @return \Oasis\Model\Raw\Companies
     */
    public function setServices(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Services === null) {

                $this->getServices();
            }

            $oldRelations = $this->_Services;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Services = array();

        foreach ($data as $object) {
            $this->addServices($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Services_ibfk_1
     *
     * @param \Oasis\Model\Raw\Services $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addServices(\Oasis\Model\Raw\Services $data)
    {
        $this->_Services[] = $data;
        $this->_setLoaded('ServicesIbfk1');
        return $this;
    }

    /**
     * Gets dependent Services_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\Services
     */
    public function getServices($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ServicesIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Services = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Services;
    }

    /**
     * Sets dependent relations Terminals_CompanyId_ibfk_2
     *
     * @param array $data An array of \Oasis\Model\Raw\Terminals
     * @return \Oasis\Model\Raw\Companies
     */
    public function setTerminals(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Terminals === null) {

                $this->getTerminals();
            }

            $oldRelations = $this->_Terminals;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Terminals = array();

        foreach ($data as $object) {
            $this->addTerminals($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Terminals_CompanyId_ibfk_2
     *
     * @param \Oasis\Model\Raw\Terminals $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addTerminals(\Oasis\Model\Raw\Terminals $data)
    {
        $this->_Terminals[] = $data;
        $this->_setLoaded('TerminalsCompanyIdIbfk2');
        return $this;
    }

    /**
     * Gets dependent Terminals_CompanyId_ibfk_2
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\Terminals
     */
    public function getTerminals($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'TerminalsCompanyIdIbfk2';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Terminals = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Terminals;
    }

    /**
     * Sets dependent relations Users_ibfk_1
     *
     * @param array $data An array of \Oasis\Model\Raw\Users
     * @return \Oasis\Model\Raw\Companies
     */
    public function setUsers(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Users === null) {

                $this->getUsers();
            }

            $oldRelations = $this->_Users;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Users = array();

        foreach ($data as $object) {
            $this->addUsers($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Users_ibfk_1
     *
     * @param \Oasis\Model\Raw\Users $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addUsers(\Oasis\Model\Raw\Users $data)
    {
        $this->_Users[] = $data;
        $this->_setLoaded('UsersIbfk1');
        return $this;
    }

    /**
     * Gets dependent Users_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\Users
     */
    public function getUsers($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'UsersIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Users = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Users;
    }

    /**
     * Sets dependent relations parsedCDRs_ibfk_2
     *
     * @param array $data An array of \Oasis\Model\Raw\ParsedCDRs
     * @return \Oasis\Model\Raw\Companies
     */
    public function setParsedCDRs(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_ParsedCDRs === null) {

                $this->getParsedCDRs();
            }

            $oldRelations = $this->_ParsedCDRs;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_ParsedCDRs = array();

        foreach ($data as $object) {
            $this->addParsedCDRs($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations parsedCDRs_ibfk_2
     *
     * @param \Oasis\Model\Raw\ParsedCDRs $data
     * @return \Oasis\Model\Raw\Companies
     */
    public function addParsedCDRs(\Oasis\Model\Raw\ParsedCDRs $data)
    {
        $this->_ParsedCDRs[] = $data;
        $this->_setLoaded('ParsedCDRsIbfk2');
        return $this;
    }

    /**
     * Gets dependent parsedCDRs_ibfk_2
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \Oasis\Model\Raw\ParsedCDRs
     */
    public function getParsedCDRs($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ParsedCDRsIbfk2';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_ParsedCDRs = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_ParsedCDRs;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Oasis\Mapper\Sql\Companies
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(true);

            if (class_exists('\Oasis\Mapper\Sql\Companies')) {

                $this->setMapper(new \Oasis\Mapper\Sql\Companies);

            } else {

                 new \Exception("Not a valid mapper class found");
            }

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(false);
        }

        return $this->_mapper;
    }

    /**
     * Returns the validator class for this model
     *
     * @return null | \Oasis\Model\Validator\Companies
     */
    public function getValidator()
    {
        if ($this->_validator === null) {

            if (class_exists('\Oasis\\Validator\Companies')) {

                $this->setValidator(new \Oasis\Validator\Companies);
            }
        }

        return $this->_validator;
    }

    public function setFromArray($data)
    {
        return $this->getMapper()->loadModel($data, $this);
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
     * @see \Mapper\Sql\Companies::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getId() === null) {
            $this->_logger->log('The value for Id cannot be null in deleteRowByPrimaryKey for ' . get_class($this), \Zend_Log::ERR);
            throw new \Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()->getDbTable()->delete(
            'id = ' .
             $this->getMapper()->getDbTable()->getAdapter()->quote($this->getId())
        );
    }

    public function mustUpdateEtag()
    {
        return true;
    }

}