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
class HuntGroupCallForwardSettings extends ModelAbstract
{

    protected $_callTypeFilterAcceptedValues = array(
        'internal',
        'external',
        'both',
    );
    protected $_callTargetTypeAcceptedValues = array(
        'number',
        'extension',
        'voicemail',
    );

    /**
     * [uuid:php]
     * Database var type binary(36)
     *
     * @var binary
     */
    protected $_id;

    /**
     * Database var type binary(36)
     *
     * @var binary
     */
    protected $_huntGroupId;

    /**
     * [enum:internal|external|both]
     * Database var type varchar
     *
     * @var string
     */
    protected $_callTypeFilter;

    /**
     * [enum:number|extension|voicemail]
     * Database var type varchar
     *
     * @var string
     */
    protected $_callTargetType;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_callNumberValue;

    /**
     * Database var type binary(36)
     *
     * @var binary
     */
    protected $_callExtensionId;

    /**
     * Database var type binary(36)
     *
     * @var binary
     */
    protected $_callVoiceMailUserId;


    /**
     * Parent relation HuntGroupCallForwardSettings_ibfk_1
     *
     * @var \Oasis\Model\Raw\HuntGroups
     */
    protected $_HuntGroup;

    /**
     * Parent relation HuntGroupCallForwardSettings_ibfk_2
     *
     * @var \Oasis\Model\Raw\Extensions
     */
    protected $_CallExtension;

    /**
     * Parent relation HuntGroupCallForwardSettings_ibfk_3
     *
     * @var \Oasis\Model\Raw\Users
     */
    protected $_CallVoiceMailUser;


    protected $_columnsList = array(
        'id'=>'id',
        'huntGroupId'=>'huntGroupId',
        'callTypeFilter'=>'callTypeFilter',
        'callTargetType'=>'callTargetType',
        'callNumberValue'=>'callNumberValue',
        'callExtensionId'=>'callExtensionId',
        'callVoiceMailUserId'=>'callVoiceMailUserId',
    );

    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        $this->setColumnsMeta(array(
            'id'=> array('uuid:php'),
            'callTypeFilter'=> array('enum:internal|external|both'),
            'callTargetType'=> array('enum:number|extension|voicemail'),
        ));

        $this->setMultiLangColumnsList(array(
        ));

        $this->setAvailableLangs(array('es', 'en'));

        $this->setParentList(array(
            'HuntGroupCallForwardSettingsIbfk1'=> array(
                    'property' => 'HuntGroup',
                    'table_name' => 'HuntGroups',
                ),
            'HuntGroupCallForwardSettingsIbfk2'=> array(
                    'property' => 'CallExtension',
                    'table_name' => 'Extensions',
                ),
            'HuntGroupCallForwardSettingsIbfk3'=> array(
                    'property' => 'CallVoiceMailUser',
                    'table_name' => 'Users',
                ),
        ));

        $this->setDependentList(array(
        ));




        $this->_defaultValues = array(
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
     * @return \Oasis\Model\Raw\HuntGroupCallForwardSettings
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
     * @param binary $data
     * @return \Oasis\Model\Raw\HuntGroupCallForwardSettings
     */
    public function setHuntGroupId($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_huntGroupId != $data) {
            $this->_logChange('huntGroupId');
        }

        $this->_huntGroupId = $data;
        return $this;
    }

    /**
     * Gets column huntGroupId
     *
     * @return binary
     */
    public function getHuntGroupId()
    {
        return $this->_huntGroupId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\HuntGroupCallForwardSettings
     */
    public function setCallTypeFilter($data)
    {

        if ($this->_callTypeFilter != $data) {
            $this->_logChange('callTypeFilter');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_callTypeFilter = $data;

        } else if (!is_null($data)) {
            if (!in_array($data, $this->_callTypeFilterAcceptedValues) && !empty($data)) {
                throw new \InvalidArgumentException(_('Invalid value for callTypeFilter'));
            }
            $this->_callTypeFilter = (string) $data;

        } else {
            $this->_callTypeFilter = $data;
        }
        return $this;
    }

    /**
     * Gets column callTypeFilter
     *
     * @return string
     */
    public function getCallTypeFilter()
    {
        return $this->_callTypeFilter;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\HuntGroupCallForwardSettings
     */
    public function setCallTargetType($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_callTargetType != $data) {
            $this->_logChange('callTargetType');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_callTargetType = $data;

        } else if (!is_null($data)) {
            if (!in_array($data, $this->_callTargetTypeAcceptedValues) && !empty($data)) {
                throw new \InvalidArgumentException(_('Invalid value for callTargetType'));
            }
            $this->_callTargetType = (string) $data;

        } else {
            $this->_callTargetType = $data;
        }
        return $this;
    }

    /**
     * Gets column callTargetType
     *
     * @return string
     */
    public function getCallTargetType()
    {
        return $this->_callTargetType;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\HuntGroupCallForwardSettings
     */
    public function setCallNumberValue($data)
    {

        if ($this->_callNumberValue != $data) {
            $this->_logChange('callNumberValue');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_callNumberValue = $data;

        } else if (!is_null($data)) {
            $this->_callNumberValue = (string) $data;

        } else {
            $this->_callNumberValue = $data;
        }
        return $this;
    }

    /**
     * Gets column callNumberValue
     *
     * @return string
     */
    public function getCallNumberValue()
    {
        return $this->_callNumberValue;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param binary $data
     * @return \Oasis\Model\Raw\HuntGroupCallForwardSettings
     */
    public function setCallExtensionId($data)
    {

        if ($this->_callExtensionId != $data) {
            $this->_logChange('callExtensionId');
        }

        $this->_callExtensionId = $data;
        return $this;
    }

    /**
     * Gets column callExtensionId
     *
     * @return binary
     */
    public function getCallExtensionId()
    {
        return $this->_callExtensionId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param binary $data
     * @return \Oasis\Model\Raw\HuntGroupCallForwardSettings
     */
    public function setCallVoiceMailUserId($data)
    {

        if ($this->_callVoiceMailUserId != $data) {
            $this->_logChange('callVoiceMailUserId');
        }

        $this->_callVoiceMailUserId = $data;
        return $this;
    }

    /**
     * Gets column callVoiceMailUserId
     *
     * @return binary
     */
    public function getCallVoiceMailUserId()
    {
        return $this->_callVoiceMailUserId;
    }

    /**
     * Sets parent relation HuntGroup
     *
     * @param \Oasis\Model\Raw\HuntGroups $data
     * @return \Oasis\Model\Raw\HuntGroupCallForwardSettings
     */
    public function setHuntGroup(\Oasis\Model\Raw\HuntGroups $data)
    {
        $this->_HuntGroup = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setHuntGroupId($primaryKey);
        }

        $this->_setLoaded('HuntGroupCallForwardSettingsIbfk1');
        return $this;
    }

    /**
     * Gets parent HuntGroup
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\HuntGroups
     */
    public function getHuntGroup($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'HuntGroupCallForwardSettingsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_HuntGroup = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_HuntGroup;
    }

    /**
     * Sets parent relation CallExtension
     *
     * @param \Oasis\Model\Raw\Extensions $data
     * @return \Oasis\Model\Raw\HuntGroupCallForwardSettings
     */
    public function setCallExtension(\Oasis\Model\Raw\Extensions $data)
    {
        $this->_CallExtension = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setCallExtensionId($primaryKey);
        }

        $this->_setLoaded('HuntGroupCallForwardSettingsIbfk2');
        return $this;
    }

    /**
     * Gets parent CallExtension
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\Extensions
     */
    public function getCallExtension($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'HuntGroupCallForwardSettingsIbfk2';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_CallExtension = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_CallExtension;
    }

    /**
     * Sets parent relation CallVoiceMailUser
     *
     * @param \Oasis\Model\Raw\Users $data
     * @return \Oasis\Model\Raw\HuntGroupCallForwardSettings
     */
    public function setCallVoiceMailUser(\Oasis\Model\Raw\Users $data)
    {
        $this->_CallVoiceMailUser = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setCallVoiceMailUserId($primaryKey);
        }

        $this->_setLoaded('HuntGroupCallForwardSettingsIbfk3');
        return $this;
    }

    /**
     * Gets parent CallVoiceMailUser
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\Users
     */
    public function getCallVoiceMailUser($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'HuntGroupCallForwardSettingsIbfk3';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_CallVoiceMailUser = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_CallVoiceMailUser;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Oasis\Mapper\Sql\HuntGroupCallForwardSettings
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(true);

            if (class_exists('\Oasis\Mapper\Sql\HuntGroupCallForwardSettings')) {

                $this->setMapper(new \Oasis\Mapper\Sql\HuntGroupCallForwardSettings);

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
     * @return null | \Oasis\Model\Validator\HuntGroupCallForwardSettings
     */
    public function getValidator()
    {
        if ($this->_validator === null) {

            if (class_exists('\Oasis\\Validator\HuntGroupCallForwardSettings')) {

                $this->setValidator(new \Oasis\Validator\HuntGroupCallForwardSettings);
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
     * @see \Mapper\Sql\HuntGroupCallForwardSettings::delete
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