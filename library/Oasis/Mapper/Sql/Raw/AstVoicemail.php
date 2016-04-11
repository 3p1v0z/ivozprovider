<?php

/**
 * Application Model Mapper
 *
 * @package Oasis\Mapper\Sql
 * @subpackage Raw
 * @author Luis Felipe Garcia
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * Data Mapper implementation for Oasis\Model\AstVoicemail
 *
 * @package Oasis\Mapper\Sql
 * @subpackage Raw
 * @author Luis Felipe Garcia
 */

namespace Oasis\Mapper\Sql\Raw;
class AstVoicemail extends MapperAbstract
{
    protected $_modelName = 'Oasis\\Model\\AstVoicemail';


    protected $_urlIdentifiers = array();

    /**
     * Returns an array, keys are the field names.
     *
     * @param Oasis\Model\Raw\AstVoicemail $model
     * @return array
     */
    public function toArray($model, $fields = array())
    {

        if (!$model instanceof \Oasis\Model\Raw\AstVoicemail) {
            if (is_object($model)) {
                $message = get_class($model) . " is not a \Oasis\Model\Raw\AstVoicemail object in toArray for " . get_class($this);
            } else {
                $message = "$model is not a \\Oasis\Model\\AstVoicemail object in toArray for " . get_class($this);
            }

            $this->_logger->log($message, \Zend_Log::ERR);
            throw new \Exception('Unable to create array: invalid model passed to mapper', 2000);
        }

        if (empty($fields)) {
            $result = array(
                'uniqueid' => $model->getUniqueid(),
                'context' => $model->getContext(),
                'mailbox' => $model->getMailbox(),
                'password' => $model->getPassword(),
                'fullname' => $model->getFullname(),
                'alias' => $model->getAlias(),
                'email' => $model->getEmail(),
                'pager' => $model->getPager(),
                'attach' => $model->getAttach(),
                'attachfmt' => $model->getAttachfmt(),
                'serveremail' => $model->getServeremail(),
                'language' => $model->getLanguage(),
                'tz' => $model->getTz(),
                'deleteast_voicemail' => $model->getDeleteastVoicemail(),
                'saycid' => $model->getSaycid(),
                'sendast_voicemail' => $model->getSendastVoicemail(),
                'review' => $model->getReview(),
                'tempgreetwarn' => $model->getTempgreetwarn(),
                'operator' => $model->getOperator(),
                'envelope' => $model->getEnvelope(),
                'sayduration' => $model->getSayduration(),
                'forcename' => $model->getForcename(),
                'forcegreetings' => $model->getForcegreetings(),
                'callback' => $model->getCallback(),
                'dialout' => $model->getDialout(),
                'exitcontext' => $model->getExitcontext(),
                'maxmsg' => $model->getMaxmsg(),
                'volgain' => $model->getVolgain(),
                'imapuser' => $model->getImapuser(),
                'imappassword' => $model->getImappassword(),
                'imapserver' => $model->getImapserver(),
                'imapport' => $model->getImapport(),
                'imapflags' => $model->getImapflags(),
                'stamp' => $model->getStamp(),
            );
        } else {
            $result = array();
            foreach ($fields as $fieldData) {
                $trimField = trim($fieldData);
                if (!empty($trimField)) {
                    if (strpos($trimField, ":") !== false) {
                        list($field,$params) = explode(":", $trimField, 2);
                    } else {
                        $field = $trimField;
                        $params = null;
                    }
                    $get = 'get' . ucfirst($field);
                    $result[lcfirst($field)] = $model->$get($params);
                }
            }
        }

        return $result;

    }

    /**
     * Returns the DbTable class associated with this mapper
     *
     * @return Oasis\\Mapper\\Sql\\DbTable\\AstVoicemail
     */
    public function getDbTable()
    {
        if (is_null($this->_dbTable)) {
            $this->setDbTable('Oasis\\Mapper\\Sql\\DbTable\\AstVoicemail');
        }

        return $this->_dbTable;
    }

    /**
     * Deletes the current model
     *
     * @param Oasis\Model\Raw\AstVoicemail $model The model to delete
     * @see Oasis\Mapper\DbTable\TableAbstract::delete()
     * @return int
     */
    public function delete(\Oasis\Model\Raw\ModelAbstract $model)
    {
        if (!$model instanceof \Oasis\Model\Raw\AstVoicemail) {
            if (is_object($model)) {
                $message = get_class($model) . " is not a \\Oasis\\Model\\AstVoicemail object in delete for " . get_class($this);
            } else {
                $message = "$model is not a \\Oasis\\Model\\AstVoicemail object in delete for " . get_class($this);
            }

            $this->_logger->log($message, \Zend_Log::ERR);
            throw new \Exception('Unable to delete: invalid model passed to mapper', 2000);
        }

        $useTransaction = true;

        $dbTable = $this->getDbTable();
        $dbAdapter = $dbTable->getAdapter();

        try {

            $dbAdapter->beginTransaction();

        } catch (\Exception $e) {

            //Transaction already started
            $useTransaction = false;
        }

        try {

            //onDeleteCascades emulation
            if ($this->_simulateReferencialActions && count($deleteCascade = $model->getOnDeleteCascadeRelationships()) > 0) {

                $depList = $model->getDependentList();

                foreach ($deleteCascade as $fk) {

                    $capitalizedFk = '';
                    foreach (explode("_", $fk) as $part) {

                        $capitalizedFk .= ucfirst($part);
                    }

                    if (!isset($depList[$capitalizedFk])) {

                        continue;

                    } else {

                        $relDbAdapName = 'Oasis\\Mapper\\Sql\\DbTable\\' . $depList[$capitalizedFk]["table_name"];
                        $depMapperName = 'Oasis\\Mapper\\Sql\\' . $depList[$capitalizedFk]["table_name"];
                        $depModelName = 'Oasis\\Model\\' . $depList[$capitalizedFk]["table_name"];

                        if ( class_exists($relDbAdapName) && class_exists($depModelName) ) {

                            $relDbAdapter = new $relDbAdapName;
                            $references = $relDbAdapter->getReference('Oasis\\Mapper\\Sql\\DbTable\\AstVoicemail', $capitalizedFk);

                            $targetColumn = array_shift($references["columns"]);
                            $where = $relDbAdapter->getAdapter()->quoteInto($targetColumn . ' = ?', $model->getPrimaryKey());

                            $depMapper = new $depMapperName;
                            $depObjects = $depMapper->fetchList($where);

                            if (count($depObjects) === 0) {

                                continue;
                            }

                            foreach ($depObjects as $item) {

                                $item->delete();
                            }
                        }
                    }
                }
            }

            //onDeleteSetNull emulation
            if ($this->_simulateReferencialActions && count($deleteSetNull = $model->getOnDeleteSetNullRelationships()) > 0) {

                $depList = $model->getDependentList();

                foreach ($deleteSetNull as $fk) {

                    $capitalizedFk = '';
                    foreach (explode("_", $fk) as $part) {

                        $capitalizedFk .= ucfirst($part);
                    }

                    if (!isset($depList[$capitalizedFk])) {

                        continue;

                    } else {

                        $relDbAdapName = 'Oasis\\Mapper\\Sql\\DbTable\\' . $depList[$capitalizedFk]["table_name"];
                        $depMapperName = 'Oasis\\Mapper\\Sql\\' . $depList[$capitalizedFk]["table_name"];
                        $depModelName = 'Oasis\\Model\\' . $depList[$capitalizedFk]["table_name"];

                        if ( class_exists($relDbAdapName) && class_exists($depModelName) ) {

                            $relDbAdapter = new $relDbAdapName;
                            $references = $relDbAdapter->getReference('Oasis\\Mapper\\Sql\\DbTable\\AstVoicemail', $capitalizedFk);

                            $targetColumn = array_shift($references["columns"]);
                            $where = $relDbAdapter->getAdapter()->quoteInto($targetColumn . ' = ?', $model->getPrimaryKey());

                            $depMapper = new $depMapperName;
                            $depObjects = $depMapper->fetchList($where);

                            if (count($depObjects) === 0) {

                                continue;
                            }

                            foreach ($depObjects as $item) {

                                $setterName = 'set' . ucfirst($targetColumn);
                                $item->$setterName(null);
                                $item->save();
                            } //end foreach

                        } //end if
                    } //end else

                }//end foreach ($deleteSetNull as $fk)
            } //end if

            $where = $dbAdapter->quoteInto($dbAdapter->quoteIdentifier('uniqueid') . ' = ?', $model->getUniqueid());
            $result = $dbTable->delete($where);

            if ($this->_cache) {

                $this->_cache->remove(get_class($model) . "_" . $model->getPrimarykey());
            }

            $fileObjects = array();
            $availableObjects = $model->getFileObjects();

            foreach ($availableObjects as $fso) {

                $removeMethod = 'remove' . $fso;
                $model->$removeMethod();
            }


            if ($useTransaction) {
                $dbAdapter->commit();
            }
        } catch (\Exception $exception) {

            $message = 'Exception encountered while attempting to delete ' . get_class($this);
            if (!empty($where)) {
                $message .= ' Where: ';
                $message .= $where;
            } else {
                $message .= ' with an empty where';
            }

            $message .= ' Exception: ' . $exception->getMessage();
            $this->_logger->log($message, \Zend_Log::ERR);
            $this->_logger->log($exception->getTraceAsString(), \Zend_Log::DEBUG);

            if ($useTransaction) {

                $dbAdapter->rollback();
            }

            throw $exception;
        }


        return $result;

    }

    /**
     * Saves current row
     * @return integer primary key for autoincrement fields if the save action was successful
     */
    public function save(\Oasis\Model\Raw\AstVoicemail $model, $forceInsert = false)
    {
        return $this->_save($model, false, false, null, $forceInsert);
    }

    /**
     * Saves current and all dependent rows
     *
     * @param \Oasis\Model\Raw\AstVoicemail $model
     * @param boolean $useTransaction Flag to indicate if save should be done inside a database transaction
     * @return integer primary key for autoincrement fields if the save action was successful
     */
    public function saveRecursive(\Oasis\Model\Raw\AstVoicemail $model, $useTransaction = true,
            $transactionTag = null, $forceInsert = false)
    {
        return $this->_save($model, true, $useTransaction, $transactionTag, $forceInsert);
    }

    protected function _save(\Oasis\Model\Raw\AstVoicemail $model,
        $recursive = false, $useTransaction = true, $transactionTag = null, $forceInsert = false
    )
    {
        $this->_setCleanUrlIdentifiers($model);

        $fileObjects = array();

        $availableObjects = $model->getFileObjects();

        foreach ($availableObjects as $item) {

            $objectMethod = 'fetch' . $item;
            $fso = $model->$objectMethod(false);
            $specMethod = 'get' . $item . 'Specs';
            $fileSpects = $model->$specMethod();

            $fileSizeSetter = 'set' . $fileSpects['sizeName'];
            $baseNameSetter = 'set' . $fileSpects['baseNameName'];
            $mimeTypeSetter = 'set' . $fileSpects['mimeName'];

            if (!is_null($fso) && $fso->mustFlush()) {

                $fileObjects[$item] = $fso;

                $model->$fileSizeSetter($fso->getSize())
                      ->$baseNameSetter($fso->getBaseName())
                      ->$mimeTypeSetter($fso->getMimeType());
            }

            if (is_null($fso)) {
                $model->$fileSizeSetter(null)
                ->$baseNameSetter(null)
                ->$mimeTypeSetter(null);
            }
        }

        $data = $model->sanitize()->toArray();

        $primaryKey = $model->getUniqueid();
        $success = true;

        if ($useTransaction) {

            try {

                if ($recursive && is_null($transactionTag)) {

                    //$this->getDbTable()->getAdapter()->query('SET transaction_allow_batching = 1');
                }

                $this->getDbTable()->getAdapter()->beginTransaction();

            } catch (\Exception $e) {

                //transaction already started
            }


            $transactionTag = 't_' . rand(1, 999) . str_replace(array('.', ' '), '', microtime());
        }

        if (!$forceInsert) {
            unset($data['uniqueid']);
        }

        try {
            if (is_null($primaryKey) || empty($primaryKey) || $forceInsert) {

                $primaryKey = $this->getDbTable()->insert($data);

                if ($primaryKey) {
                    $model->setUniqueid($primaryKey);
                } else {
                    throw new \Exception("Insert sentence did not return a valid primary key", 9000);
                }

                if ($this->_cache) {

                    $parentList = $model->getParentList();

                    foreach ($parentList as $constraint => $values) {

                        $refTable = $this->getDbTable();

                        $ref = $refTable->getReference('Oasis\\Mapper\\Sql\\DbTable\\' . $values["table_name"], $constraint);
                        $column = array_shift($ref["columns"]);

                        $cacheHash = 'Oasis\\Model\\' . $values["table_name"] . '_' . $data[$column] .'_' . $constraint;

                        if ($this->_cache->test($cacheHash)) {

                            $cachedRelations = $this->_cache->load($cacheHash);
                            $cachedRelations->results[] = $primaryKey;

                            if ($useTransaction) {

                                $this->_cache->save($cachedRelations, $cacheHash, array($transactionTag));

                            } else {

                                $this->_cache->save($cachedRelations, $cacheHash);
                            }
                        }
                    }
                }
            } else {
                $this->getDbTable()
                     ->update(
                         $data,
                         array(
                             $this->getDbTable()->getAdapter()->quoteIdentifier('uniqueid') . ' = ?' => $primaryKey
                         )
                     );
            }

            if (!empty($primaryKey) && !empty($fileObjects)) {

                foreach ($fileObjects as $key => $fso) {

                    $baseName = $fso->getBaseName();
                    if (!empty($baseName)) {
                        $fso->flush($primaryKey);
                    }
                }
            }


            if ($success === true) {

                foreach ($model->getOrphans() as $itemToDelete) {

                    $itemToDelete->delete();
                }

                $model->resetOrphans();
            }

            if ($useTransaction && $success) {

                $this->getDbTable()->getAdapter()->commit();

            } elseif ($useTransaction) {

                $this->getDbTable()->getAdapter()->rollback();

                if ($this->_cache) {

                    $this->_cache->clean(\Zend_Cache::CLEANING_MODE_MATCHING_TAG, array($transactionTag));
                }
            }

        } catch (\Exception $e) {
            $message = 'Exception encountered while attempting to save ' . get_class($this);
            if (!empty($primaryKey)) {
                $message .= ' id: ' . $primaryKey;
            } else {
                $message .= ' with an empty primary key ';
            }

            $message .= ' Exception: ' . $e->getMessage();
            $this->_logger->log($message, \Zend_Log::ERR);
            $this->_logger->log($e->getTraceAsString(), \Zend_Log::DEBUG);

            if ($useTransaction) {
                $this->getDbTable()->getAdapter()->rollback();

                if ($this->_cache) {

                    if ($transactionTag) {

                        $this->_cache->clean(\Zend_Cache::CLEANING_MODE_MATCHING_TAG, array($transactionTag));

                    } else {

                        $this->_cache->clean(\Zend_Cache::CLEANING_MODE_MATCHING_TAG);
                    }
                }
            }

            throw $e;
        }

        if ($success && $this->_cache) {

            if ($useTransaction) {

                $this->_cache->save($model->toArray(), get_class($model) . "_" . $model->getPrimaryKey(), array($transactionTag));

            } else {

                $this->_cache->save($model->toArray(), get_class($model) . "_" . $model->getPrimaryKey());
            }
        }


        if ($success === true) {
            return $primaryKey;
        }

        return $success;
    }

    /**
     * Loads the model specific data into the model object
     *
     * @param \Zend_Db_Table_Row_Abstract|array $data The data as returned from a \Zend_Db query
     * @param Oasis\Model\Raw\AstVoicemail|null $entry The object to load the data into, or null to have one created
     * @return Oasis\Model\Raw\AstVoicemail The model with the data provided
     */
    public function loadModel($data, $entry = null)
    {
        if (!$entry) {
            $entry = new \Oasis\Model\AstVoicemail();
        }

        // We don't need to log changes as we will reset them later...
        $entry->stopChangeLog();

        if (is_array($data)) {
            $entry->setUniqueid($data['uniqueid'])
                  ->setContext($data['context'])
                  ->setMailbox($data['mailbox'])
                  ->setPassword($data['password'])
                  ->setFullname($data['fullname'])
                  ->setAlias($data['alias'])
                  ->setEmail($data['email'])
                  ->setPager($data['pager'])
                  ->setAttach($data['attach'])
                  ->setAttachfmt($data['attachfmt'])
                  ->setServeremail($data['serveremail'])
                  ->setLanguage($data['language'])
                  ->setTz($data['tz'])
                  ->setDeleteastVoicemail($data['deleteast_voicemail'])
                  ->setSaycid($data['saycid'])
                  ->setSendastVoicemail($data['sendast_voicemail'])
                  ->setReview($data['review'])
                  ->setTempgreetwarn($data['tempgreetwarn'])
                  ->setOperator($data['operator'])
                  ->setEnvelope($data['envelope'])
                  ->setSayduration($data['sayduration'])
                  ->setForcename($data['forcename'])
                  ->setForcegreetings($data['forcegreetings'])
                  ->setCallback($data['callback'])
                  ->setDialout($data['dialout'])
                  ->setExitcontext($data['exitcontext'])
                  ->setMaxmsg($data['maxmsg'])
                  ->setVolgain($data['volgain'])
                  ->setImapuser($data['imapuser'])
                  ->setImappassword($data['imappassword'])
                  ->setImapserver($data['imapserver'])
                  ->setImapport($data['imapport'])
                  ->setImapflags($data['imapflags'])
                  ->setStamp($data['stamp']);
        } else if ($data instanceof \Zend_Db_Table_Row_Abstract || $data instanceof \stdClass) {
            $entry->setUniqueid($data->{'uniqueid'})
                  ->setContext($data->{'context'})
                  ->setMailbox($data->{'mailbox'})
                  ->setPassword($data->{'password'})
                  ->setFullname($data->{'fullname'})
                  ->setAlias($data->{'alias'})
                  ->setEmail($data->{'email'})
                  ->setPager($data->{'pager'})
                  ->setAttach($data->{'attach'})
                  ->setAttachfmt($data->{'attachfmt'})
                  ->setServeremail($data->{'serveremail'})
                  ->setLanguage($data->{'language'})
                  ->setTz($data->{'tz'})
                  ->setDeleteastVoicemail($data->{'deleteast_voicemail'})
                  ->setSaycid($data->{'saycid'})
                  ->setSendastVoicemail($data->{'sendast_voicemail'})
                  ->setReview($data->{'review'})
                  ->setTempgreetwarn($data->{'tempgreetwarn'})
                  ->setOperator($data->{'operator'})
                  ->setEnvelope($data->{'envelope'})
                  ->setSayduration($data->{'sayduration'})
                  ->setForcename($data->{'forcename'})
                  ->setForcegreetings($data->{'forcegreetings'})
                  ->setCallback($data->{'callback'})
                  ->setDialout($data->{'dialout'})
                  ->setExitcontext($data->{'exitcontext'})
                  ->setMaxmsg($data->{'maxmsg'})
                  ->setVolgain($data->{'volgain'})
                  ->setImapuser($data->{'imapuser'})
                  ->setImappassword($data->{'imappassword'})
                  ->setImapserver($data->{'imapserver'})
                  ->setImapport($data->{'imapport'})
                  ->setImapflags($data->{'imapflags'})
                  ->setStamp($data->{'stamp'});

        } else if ($data instanceof \Oasis\Model\Raw\AstVoicemail) {
            $entry->setUniqueid($data->getUniqueid())
                  ->setContext($data->getContext())
                  ->setMailbox($data->getMailbox())
                  ->setPassword($data->getPassword())
                  ->setFullname($data->getFullname())
                  ->setAlias($data->getAlias())
                  ->setEmail($data->getEmail())
                  ->setPager($data->getPager())
                  ->setAttach($data->getAttach())
                  ->setAttachfmt($data->getAttachfmt())
                  ->setServeremail($data->getServeremail())
                  ->setLanguage($data->getLanguage())
                  ->setTz($data->getTz())
                  ->setDeleteastVoicemail($data->getDeleteastVoicemail())
                  ->setSaycid($data->getSaycid())
                  ->setSendastVoicemail($data->getSendastVoicemail())
                  ->setReview($data->getReview())
                  ->setTempgreetwarn($data->getTempgreetwarn())
                  ->setOperator($data->getOperator())
                  ->setEnvelope($data->getEnvelope())
                  ->setSayduration($data->getSayduration())
                  ->setForcename($data->getForcename())
                  ->setForcegreetings($data->getForcegreetings())
                  ->setCallback($data->getCallback())
                  ->setDialout($data->getDialout())
                  ->setExitcontext($data->getExitcontext())
                  ->setMaxmsg($data->getMaxmsg())
                  ->setVolgain($data->getVolgain())
                  ->setImapuser($data->getImapuser())
                  ->setImappassword($data->getImappassword())
                  ->setImapserver($data->getImapserver())
                  ->setImapport($data->getImapport())
                  ->setImapflags($data->getImapflags())
                  ->setStamp($data->getStamp());

        }

        $entry->resetChangeLog()->initChangeLog()->setMapper($this);

        return $entry;
    }
}