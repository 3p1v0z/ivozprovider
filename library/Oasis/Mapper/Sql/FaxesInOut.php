<?php

/**
 * Application Model Mapper
 *
 * @package Mapper
 * @subpackage Sql
 * @author Luis Felipe Garcia
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * Data Mapper implementation for Oasis\Model\FaxesInOut
 *
 * @package Mapper
 * @subpackage Sql
 * @author Luis Felipe Garcia
 */
namespace Oasis\Mapper\Sql;
class FaxesInOut extends Raw\FaxesInOut
{
    protected function _save(\Oasis\Model\Raw\FaxesInOut $model,
            $recursive = false, $useTransaction = true, $transactionTag = null, $forceInsert = false
    )
    {
        $result = parent::_save($model, $recursive, $useTransaction, $transactionTag, $forceInsert);

        $isOutgoingFax = $model->getType() == "Out";
        $isPending = $model->getStatus() == "pending";
        $statusHaschanged = $model->hasChange("status");

        if ($isOutgoingFax && $statusHaschanged && $isPending) {
            $faxSenderJob = new \Oasis\Gearmand\Jobs\FaxSender();
            $faxSenderJob->setFaxInOut($model);
            $faxSenderJob->send();
        }

        return $result;
    }

}
