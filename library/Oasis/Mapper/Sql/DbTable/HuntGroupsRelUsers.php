<?php

/**
 * Application Model DbTables
 *
 * @package Oasis\Mapper\Sql\DbTable
 * @subpackage DbTable
 * @author Luis Felipe Garcia
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * Table definition for HuntGroupsRelUsers
 *
 * @package Oasis\Mapper\Sql\DbTable
 * @subpackage DbTable
 * @author Luis Felipe Garcia
 */

namespace Oasis\Mapper\Sql\DbTable;
class HuntGroupsRelUsers extends TableAbstract
{
    /**
     * $_name - name of database table
     *
     * @var string
     */
    protected $_name = 'HuntGroupsRelUsers';

    /**
     * $_id - this is the primary key name
     *
     * @var binary
     */
    protected $_id = 'id';

    protected $_rowClass = 'Oasis\\Model\\HuntGroupsRelUsers';
    protected $_rowMapperClass = 'Oasis\\Mapper\\Sql\\HuntGroupsRelUsers';

    protected $_sequence = true; // binary
    protected $_referenceMap = array(
        'HuntGroupsRelUsersIbfk1' => array(
            'columns' => 'huntGroupId',
            'refTableClass' => 'Oasis\\Mapper\\Sql\\DbTable\\HuntGroups',
            'refColumns' => 'id'
        ),
        'HuntGroupsRelUsersIbfk2' => array(
            'columns' => 'userId',
            'refTableClass' => 'Oasis\\Mapper\\Sql\\DbTable\\Users',
            'refColumns' => 'id'
        )
    );
    
    protected $_metadata = array (
	  'id' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroupsRelUsers',
	    'COLUMN_NAME' => 'id',
	    'COLUMN_POSITION' => 1,
	    'DATA_TYPE' => 'binary(36)',
	    'DEFAULT' => NULL,
	    'NULLABLE' => false,
	    'LENGTH' => NULL,
	    'SCALE' => NULL,
	    'PRECISION' => NULL,
	    'UNSIGNED' => NULL,
	    'PRIMARY' => true,
	    'PRIMARY_POSITION' => 1,
	    'IDENTITY' => false,
	  ),
	  'huntGroupId' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroupsRelUsers',
	    'COLUMN_NAME' => 'huntGroupId',
	    'COLUMN_POSITION' => 2,
	    'DATA_TYPE' => 'binary(36)',
	    'DEFAULT' => NULL,
	    'NULLABLE' => false,
	    'LENGTH' => NULL,
	    'SCALE' => NULL,
	    'PRECISION' => NULL,
	    'UNSIGNED' => NULL,
	    'PRIMARY' => false,
	    'PRIMARY_POSITION' => NULL,
	    'IDENTITY' => false,
	  ),
	  'userId' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroupsRelUsers',
	    'COLUMN_NAME' => 'userId',
	    'COLUMN_POSITION' => 3,
	    'DATA_TYPE' => 'binary(36)',
	    'DEFAULT' => NULL,
	    'NULLABLE' => false,
	    'LENGTH' => NULL,
	    'SCALE' => NULL,
	    'PRECISION' => NULL,
	    'UNSIGNED' => NULL,
	    'PRIMARY' => false,
	    'PRIMARY_POSITION' => NULL,
	    'IDENTITY' => false,
	  ),
	  'timeoutTime' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroupsRelUsers',
	    'COLUMN_NAME' => 'timeoutTime',
	    'COLUMN_POSITION' => 4,
	    'DATA_TYPE' => 'smallint',
	    'DEFAULT' => NULL,
	    'NULLABLE' => false,
	    'LENGTH' => NULL,
	    'SCALE' => NULL,
	    'PRECISION' => NULL,
	    'UNSIGNED' => NULL,
	    'PRIMARY' => false,
	    'PRIMARY_POSITION' => NULL,
	    'IDENTITY' => false,
	  ),
	  'priority' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroupsRelUsers',
	    'COLUMN_NAME' => 'priority',
	    'COLUMN_POSITION' => 5,
	    'DATA_TYPE' => 'smallint',
	    'DEFAULT' => NULL,
	    'NULLABLE' => false,
	    'LENGTH' => NULL,
	    'SCALE' => NULL,
	    'PRECISION' => NULL,
	    'UNSIGNED' => NULL,
	    'PRIMARY' => false,
	    'PRIMARY_POSITION' => NULL,
	    'IDENTITY' => false,
	  ),
	);




}
