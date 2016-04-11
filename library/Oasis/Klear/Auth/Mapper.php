<?php
namespace Oasis\Klear\Auth;

use Oasis\Mapper\Sql\MainOperators;
use Oasis\Model\Brands;

abstract class Mapper implements \Klear_Auth_Adapter_Interfaces_BasicUserMapper
{
    protected $_mapper;

    /**
     * @var Brands
     */
    protected $_brand;


    public function setBrand(Brands $brand)
    {
        $this->_brand = $brand;
    }


    public function findByLogin($login)
    {

        $userOperator = $this->_mapper->fetchOne(array('username=? and active=1',array($login)));
        if (is_object($userOperator)) {
            $user = new \Oasis\Klear\Auth\User();
            $this->_poblateUser($user, $userOperator);
            $this->_populateCustomPerms($user, $userOperator);

            return $user;
        }

        return null;
    }

    protected function _poblateUser(\Oasis\Klear\Auth\User $user, $operator)
    {
        $user
            ->setId($operator->getId())
            ->setUserName($operator->getName(). ' '. $operator->getLastName() )
            ->setLogin($operator->getUsername())
            ->setEmail($operator->getEmail())
            ->setPassword($operator->getPass())
            ->setActive($operator->getActive())
            ->setTimezone($operator->getTimezone()->getTz());
        return $this;
    }

    protected abstract function _populateCustomPerms(\Oasis\Klear\Auth\User $user, $operator);

}