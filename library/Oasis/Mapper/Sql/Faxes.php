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
 * Data Mapper implementation for Oasis\Model\Faxes
 *
 * @package Mapper
 * @subpackage Sql
 * @author Luis Felipe Garcia
 */
namespace Oasis\Mapper\Sql;
class Faxes extends Raw\Faxes
{

    protected function _save(\Oasis\Model\Raw\Faxes $model,
            $recursive = false, $useTransaction = true, $transactionTag = null, $forceInsert = false
    )
    {
        if ($model->getSendByEmail() == 0) {
            $model->setEmail(null);
        }

        return parent::_save($model, $recursive, $useTransaction, $transactionTag, $forceInsert);
    }

}
