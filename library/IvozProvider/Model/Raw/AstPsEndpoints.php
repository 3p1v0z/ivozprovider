<?php

/**
 * Application Model
 *
 * @package IvozProvider\Model\Raw
 * @subpackage Model
 * @author Luis Felipe Garcia
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * [entity]
 *
 * @package IvozProvider\Model
 * @subpackage Model
 * @author Luis Felipe Garcia
 */

namespace IvozProvider\Model\Raw;
class AstPsEndpoints extends ModelAbstract
{

    protected $_directMediaAcceptedValues = array(
        'yes',
        'no',
    );
    protected $_directMediaMethodAcceptedValues = array(
        'invite',
        'reinvite',
        'update',
    );
    protected $_dtmfModeAcceptedValues = array(
        'rfc4733',
        'inband',
        'info',
    );
    protected $_sendDiversionAcceptedValues = array(
        'yes',
        'no',
    );
    protected $_sendPaiAcceptedValues = array(
        'yes',
        'no',
    );
    protected $_sendRpidAcceptedValues = array(
        'yes',
        'no',
    );

    /**
     * [uuid:php]
     * Database var type binary(36)
     *
     * @var binary
     */
    protected $_id;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_sorceryId;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_transport;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_aors;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_auth;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_context;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_disallow;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_allow;

    /**
     * Database var type enum('yes','no')
     *
     * @var string
     */
    protected $_directMedia;

    /**
     * [enum:update|invite|reinvite]
     * Database var type enum('invite','reinvite','update')
     *
     * @var string
     */
    protected $_directMediaMethod;

    /**
     * Database var type enum('rfc4733','inband','info')
     *
     * @var string
     */
    protected $_dtmfMode;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_mailboxes;

    /**
     * Database var type enum('yes','no')
     *
     * @var string
     */
    protected $_sendDiversion;

    /**
     * Database var type enum('yes','no')
     *
     * @var string
     */
    protected $_sendPai;

    /**
     * Database var type enum('yes','no')
     *
     * @var string
     */
    protected $_sendRpid;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_subscribecontext;



    protected $_columnsList = array(
        'id'=>'id',
        'sorcery_id'=>'sorceryId',
        'transport'=>'transport',
        'aors'=>'aors',
        'auth'=>'auth',
        'context'=>'context',
        'disallow'=>'disallow',
        'allow'=>'allow',
        'direct_media'=>'directMedia',
        'direct_media_method'=>'directMediaMethod',
        'dtmf_mode'=>'dtmfMode',
        'mailboxes'=>'mailboxes',
        'send_diversion'=>'sendDiversion',
        'send_pai'=>'sendPai',
        'send_rpid'=>'sendRpid',
        'subscribecontext'=>'subscribecontext',
    );

    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        $this->setColumnsMeta(array(
            'id'=> array('uuid:php'),
            'direct_media_method'=> array('enum:update|invite|reinvite'),
        ));

        $this->setMultiLangColumnsList(array(
        ));

        $this->setAvailableLangs(array('es', 'en'));

        $this->setParentList(array(
        ));

        $this->setDependentList(array(
        ));




        $this->_defaultValues = array(
            'context' => 'outgoing',
            'disallow' => 'all',
            'allow' => 'all',
            'subscribecontext' => 'default',
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
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
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
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setSorceryId($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_sorceryId != $data) {
            $this->_logChange('sorceryId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_sorceryId = $data;

        } else if (!is_null($data)) {
            $this->_sorceryId = (string) $data;

        } else {
            $this->_sorceryId = $data;
        }
        return $this;
    }

    /**
     * Gets column sorcery_id
     *
     * @return string
     */
    public function getSorceryId()
    {
        return $this->_sorceryId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setTransport($data)
    {

        if ($this->_transport != $data) {
            $this->_logChange('transport');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_transport = $data;

        } else if (!is_null($data)) {
            $this->_transport = (string) $data;

        } else {
            $this->_transport = $data;
        }
        return $this;
    }

    /**
     * Gets column transport
     *
     * @return string
     */
    public function getTransport()
    {
        return $this->_transport;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setAors($data)
    {

        if ($this->_aors != $data) {
            $this->_logChange('aors');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_aors = $data;

        } else if (!is_null($data)) {
            $this->_aors = (string) $data;

        } else {
            $this->_aors = $data;
        }
        return $this;
    }

    /**
     * Gets column aors
     *
     * @return string
     */
    public function getAors()
    {
        return $this->_aors;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setAuth($data)
    {

        if ($this->_auth != $data) {
            $this->_logChange('auth');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_auth = $data;

        } else if (!is_null($data)) {
            $this->_auth = (string) $data;

        } else {
            $this->_auth = $data;
        }
        return $this;
    }

    /**
     * Gets column auth
     *
     * @return string
     */
    public function getAuth()
    {
        return $this->_auth;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setContext($data)
    {

        if ($this->_context != $data) {
            $this->_logChange('context');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_context = $data;

        } else if (!is_null($data)) {
            $this->_context = (string) $data;

        } else {
            $this->_context = $data;
        }
        return $this;
    }

    /**
     * Gets column context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->_context;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setDisallow($data)
    {

        if ($this->_disallow != $data) {
            $this->_logChange('disallow');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_disallow = $data;

        } else if (!is_null($data)) {
            $this->_disallow = (string) $data;

        } else {
            $this->_disallow = $data;
        }
        return $this;
    }

    /**
     * Gets column disallow
     *
     * @return string
     */
    public function getDisallow()
    {
        return $this->_disallow;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setAllow($data)
    {

        if ($this->_allow != $data) {
            $this->_logChange('allow');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_allow = $data;

        } else if (!is_null($data)) {
            $this->_allow = (string) $data;

        } else {
            $this->_allow = $data;
        }
        return $this;
    }

    /**
     * Gets column allow
     *
     * @return string
     */
    public function getAllow()
    {
        return $this->_allow;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setDirectMedia($data)
    {

        if ($this->_directMedia != $data) {
            $this->_logChange('directMedia');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_directMedia = $data;

        } else if (!is_null($data)) {
            if (!in_array($data, $this->_directMediaAcceptedValues) && !empty($data)) {
                throw new \InvalidArgumentException(_('Invalid value for directMedia'));
            }
            $this->_directMedia = (string) $data;

        } else {
            $this->_directMedia = $data;
        }
        return $this;
    }

    /**
     * Gets column direct_media
     *
     * @return string
     */
    public function getDirectMedia()
    {
        return $this->_directMedia;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string|Zend_Date|DateTime $date
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setDirectMediaMethod($data)
    {
        if ($data === 'CURRENT_TIMESTAMP') {
            $data = \Zend_Date::now()->setTimezone('UTC');
        }

        if ($data instanceof \Zend_Date) {

            $data = new \DateTime($data->toString('yyyy-MM-dd HH:mm:ss'), new \DateTimeZone($data->getTimezone()));

        } elseif (!is_null($data) && !$data instanceof \DateTime) {

            $data = new \DateTime($data, new \DateTimeZone('UTC'));
        }

        if ($this->_directMediaMethod != $data) {
            $this->_logChange('directMediaMethod');
        }

        $this->_directMediaMethod = $data;
        return $this;
    }

    /**
     * Gets column direct_media_method
     *
     * @param boolean $returnZendDate
     * @return Zend_Date|null|string Zend_Date representation of this datetime if enabled, or ISO 8601 string if not
     */
    public function getDirectMediaMethod($returnZendDate = false)
    {
        if (is_null($this->_directMediaMethod)) {
            return null;
        }

        if ($returnZendDate) {
            $zendDate = new \Zend_Date($this->_directMediaMethod->getTimestamp(), \Zend_Date::TIMESTAMP);
            $zendDate->setTimezone('UTC');
            return $zendDate;
        }

        return $this->_directMediaMethod->format('Y-m-d H:i:s');
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setDtmfMode($data)
    {

        if ($this->_dtmfMode != $data) {
            $this->_logChange('dtmfMode');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_dtmfMode = $data;

        } else if (!is_null($data)) {
            if (!in_array($data, $this->_dtmfModeAcceptedValues) && !empty($data)) {
                throw new \InvalidArgumentException(_('Invalid value for dtmfMode'));
            }
            $this->_dtmfMode = (string) $data;

        } else {
            $this->_dtmfMode = $data;
        }
        return $this;
    }

    /**
     * Gets column dtmf_mode
     *
     * @return string
     */
    public function getDtmfMode()
    {
        return $this->_dtmfMode;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setMailboxes($data)
    {

        if ($this->_mailboxes != $data) {
            $this->_logChange('mailboxes');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_mailboxes = $data;

        } else if (!is_null($data)) {
            $this->_mailboxes = (string) $data;

        } else {
            $this->_mailboxes = $data;
        }
        return $this;
    }

    /**
     * Gets column mailboxes
     *
     * @return string
     */
    public function getMailboxes()
    {
        return $this->_mailboxes;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setSendDiversion($data)
    {

        if ($this->_sendDiversion != $data) {
            $this->_logChange('sendDiversion');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_sendDiversion = $data;

        } else if (!is_null($data)) {
            if (!in_array($data, $this->_sendDiversionAcceptedValues) && !empty($data)) {
                throw new \InvalidArgumentException(_('Invalid value for sendDiversion'));
            }
            $this->_sendDiversion = (string) $data;

        } else {
            $this->_sendDiversion = $data;
        }
        return $this;
    }

    /**
     * Gets column send_diversion
     *
     * @return string
     */
    public function getSendDiversion()
    {
        return $this->_sendDiversion;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setSendPai($data)
    {

        if ($this->_sendPai != $data) {
            $this->_logChange('sendPai');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_sendPai = $data;

        } else if (!is_null($data)) {
            if (!in_array($data, $this->_sendPaiAcceptedValues) && !empty($data)) {
                throw new \InvalidArgumentException(_('Invalid value for sendPai'));
            }
            $this->_sendPai = (string) $data;

        } else {
            $this->_sendPai = $data;
        }
        return $this;
    }

    /**
     * Gets column send_pai
     *
     * @return string
     */
    public function getSendPai()
    {
        return $this->_sendPai;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setSendRpid($data)
    {

        if ($this->_sendRpid != $data) {
            $this->_logChange('sendRpid');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_sendRpid = $data;

        } else if (!is_null($data)) {
            if (!in_array($data, $this->_sendRpidAcceptedValues) && !empty($data)) {
                throw new \InvalidArgumentException(_('Invalid value for sendRpid'));
            }
            $this->_sendRpid = (string) $data;

        } else {
            $this->_sendRpid = $data;
        }
        return $this;
    }

    /**
     * Gets column send_rpid
     *
     * @return string
     */
    public function getSendRpid()
    {
        return $this->_sendRpid;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\AstPsEndpoints
     */
    public function setSubscribecontext($data)
    {

        if ($this->_subscribecontext != $data) {
            $this->_logChange('subscribecontext');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_subscribecontext = $data;

        } else if (!is_null($data)) {
            $this->_subscribecontext = (string) $data;

        } else {
            $this->_subscribecontext = $data;
        }
        return $this;
    }

    /**
     * Gets column subscribecontext
     *
     * @return string
     */
    public function getSubscribecontext()
    {
        return $this->_subscribecontext;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return IvozProvider\Mapper\Sql\AstPsEndpoints
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(true);

            if (class_exists('\IvozProvider\Mapper\Sql\AstPsEndpoints')) {

                $this->setMapper(new \IvozProvider\Mapper\Sql\AstPsEndpoints);

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
     * @return null | \IvozProvider\Model\Validator\AstPsEndpoints
     */
    public function getValidator()
    {
        if ($this->_validator === null) {

            if (class_exists('\IvozProvider\\Validator\AstPsEndpoints')) {

                $this->setValidator(new \IvozProvider\Validator\AstPsEndpoints);
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
     * @see \Mapper\Sql\AstPsEndpoints::delete
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