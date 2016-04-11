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
class CallACLRelPatterns extends ModelAbstract
{

    protected $_policyAcceptedValues = array(
        'allow',
        'deny',
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
    protected $_CallACLId;

    /**
     * Database var type binary(36)
     *
     * @var binary
     */
    protected $_CallACLPatternId;

    /**
     * Database var type smallint
     *
     * @var int
     */
    protected $_priority;

    /**
     * [enum:allow|deny]
     * Database var type varchar
     *
     * @var string
     */
    protected $_policy;


    /**
     * Parent relation CallACLRelPatterns_ibfk_1
     *
     * @var \Oasis\Model\Raw\CallACL
     */
    protected $_CallACL;

    /**
     * Parent relation CallACLRelPatterns_ibfk_2
     *
     * @var \Oasis\Model\Raw\CallACLPatterns
     */
    protected $_CallACLPattern;


    protected $_columnsList = array(
        'id'=>'id',
        'CallACLId'=>'CallACLId',
        'CallACLPatternId'=>'CallACLPatternId',
        'priority'=>'priority',
        'policy'=>'policy',
    );

    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        $this->setColumnsMeta(array(
            'id'=> array('uuid:php'),
            'policy'=> array('enum:allow|deny'),
        ));

        $this->setMultiLangColumnsList(array(
        ));

        $this->setAvailableLangs(array('es', 'en'));

        $this->setParentList(array(
            'CallACLRelPatternsIbfk1'=> array(
                    'property' => 'CallACL',
                    'table_name' => 'CallACL',
                ),
            'CallACLRelPatternsIbfk2'=> array(
                    'property' => 'CallACLPattern',
                    'table_name' => 'CallACLPatterns',
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
     * @return \Oasis\Model\Raw\CallACLRelPatterns
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
     * @return \Oasis\Model\Raw\CallACLRelPatterns
     */
    public function setCallACLId($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_CallACLId != $data) {
            $this->_logChange('CallACLId');
        }

        $this->_CallACLId = $data;
        return $this;
    }

    /**
     * Gets column CallACLId
     *
     * @return binary
     */
    public function getCallACLId()
    {
        return $this->_CallACLId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param binary $data
     * @return \Oasis\Model\Raw\CallACLRelPatterns
     */
    public function setCallACLPatternId($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_CallACLPatternId != $data) {
            $this->_logChange('CallACLPatternId');
        }

        $this->_CallACLPatternId = $data;
        return $this;
    }

    /**
     * Gets column CallACLPatternId
     *
     * @return binary
     */
    public function getCallACLPatternId()
    {
        return $this->_CallACLPatternId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \Oasis\Model\Raw\CallACLRelPatterns
     */
    public function setPriority($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_priority != $data) {
            $this->_logChange('priority');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_priority = $data;

        } else if (!is_null($data)) {
            $this->_priority = (int) $data;

        } else {
            $this->_priority = $data;
        }
        return $this;
    }

    /**
     * Gets column priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->_priority;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \Oasis\Model\Raw\CallACLRelPatterns
     */
    public function setPolicy($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_policy != $data) {
            $this->_logChange('policy');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_policy = $data;

        } else if (!is_null($data)) {
            if (!in_array($data, $this->_policyAcceptedValues) && !empty($data)) {
                throw new \InvalidArgumentException(_('Invalid value for policy'));
            }
            $this->_policy = (string) $data;

        } else {
            $this->_policy = $data;
        }
        return $this;
    }

    /**
     * Gets column policy
     *
     * @return string
     */
    public function getPolicy()
    {
        return $this->_policy;
    }

    /**
     * Sets parent relation CallACL
     *
     * @param \Oasis\Model\Raw\CallACL $data
     * @return \Oasis\Model\Raw\CallACLRelPatterns
     */
    public function setCallACL(\Oasis\Model\Raw\CallACL $data)
    {
        $this->_CallACL = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setCallACLId($primaryKey);
        }

        $this->_setLoaded('CallACLRelPatternsIbfk1');
        return $this;
    }

    /**
     * Gets parent CallACL
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\CallACL
     */
    public function getCallACL($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CallACLRelPatternsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_CallACL = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_CallACL;
    }

    /**
     * Sets parent relation CallACLPattern
     *
     * @param \Oasis\Model\Raw\CallACLPatterns $data
     * @return \Oasis\Model\Raw\CallACLRelPatterns
     */
    public function setCallACLPattern(\Oasis\Model\Raw\CallACLPatterns $data)
    {
        $this->_CallACLPattern = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setCallACLPatternId($primaryKey);
        }

        $this->_setLoaded('CallACLRelPatternsIbfk2');
        return $this;
    }

    /**
     * Gets parent CallACLPattern
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \Oasis\Model\Raw\CallACLPatterns
     */
    public function getCallACLPattern($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CallACLRelPatternsIbfk2';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_CallACLPattern = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_CallACLPattern;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Oasis\Mapper\Sql\CallACLRelPatterns
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(true);

            if (class_exists('\Oasis\Mapper\Sql\CallACLRelPatterns')) {

                $this->setMapper(new \Oasis\Mapper\Sql\CallACLRelPatterns);

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
     * @return null | \Oasis\Model\Validator\CallACLRelPatterns
     */
    public function getValidator()
    {
        if ($this->_validator === null) {

            if (class_exists('\Oasis\\Validator\CallACLRelPatterns')) {

                $this->setValidator(new \Oasis\Validator\CallACLRelPatterns);
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
     * @see \Mapper\Sql\CallACLRelPatterns::delete
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