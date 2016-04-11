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
 * Data Mapper implementation for Oasis\Model\Companies
 *
 * @package Mapper
 * @subpackage Sql
 * @author Luis Felipe Garcia
 */
namespace Oasis\Mapper\Sql;
class Companies extends Raw\Companies
{
    protected $_model;
    protected $_recursive;
    protected function _save(\Oasis\Model\Raw\Companies $model,
            $recursive = false, $useTransaction = true, $transactionTag = null, $forceInsert = false
    )
    {
        $this->_model = $model;
        $this->_recursive = $recursive;
        if (is_null($model->getPrimaryKey())) {
            $this->_propagateCallACLPatterns();
            $this->_propagateServices();
        }

        return parent::_save($this->_model, $this->_recursive, $useTransaction, $transactionTag, $forceInsert);
    }

    protected function _propagateCallACLPatterns()
    {
        $brand = $this->_model->getBrand();
        if (is_null($brand)) {
            throw new \Exception(_("Brand is not setted"), 60000);
        }
        $genericCallACLPatterns = $brand->getGenericCallACLPatterns();
        $callACLPatterns = array();
        foreach ($genericCallACLPatterns as $genericCallACLPattern) {
            $callACLPattern = new \Oasis\Model\CallACLPatterns();
            $callACLPattern
            ->setCompany($this->_model)
            ->setName($genericCallACLPattern->getName())
            ->setRegExp($genericCallACLPattern->getRegExp());
            $callACLPatterns[] = $callACLPattern;
        }
        if (!empty($callACLPatterns)) {
            $this->_model->setCallACLPatterns($callACLPatterns);
            $this->_recursive = true;
        }
    }

    protected function _propagateServices()
    {
        $brand = $this->_model->getBrand();
        $genericServices = $brand->getGenericServices();
        $services = array();
        foreach ($genericServices as $genericService) {
            $service = new \Oasis\Model\Services();
            $service
            ->setCompany($this->_model)
            ->setName($genericService->getName())
            ->setDescription($genericService->getDescription())
            ->setCode($genericService->getCode());
            $services[] = $service;
        }
        if (!empty($services)) {
            $this->_model->setServices($services);
            $this->_recursive = true;
        }
    }

}
