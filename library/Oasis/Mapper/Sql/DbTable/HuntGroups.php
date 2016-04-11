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
 * Table definition for HuntGroups
 *
 * @package Oasis\Mapper\Sql\DbTable
 * @subpackage DbTable
 * @author Luis Felipe Garcia
 */

namespace Oasis\Mapper\Sql\DbTable;
class HuntGroups extends TableAbstract
{
    /**
     * $_name - name of database table
     *
     * @var string
     */
    protected $_name = 'HuntGroups';

    /**
     * $_id - this is the primary key name
     *
     * @var binary
     */
    protected $_id = 'id';

    protected $_rowClass = 'Oasis\\Model\\HuntGroups';
    protected $_rowMapperClass = 'Oasis\\Mapper\\Sql\\HuntGroups';

    protected $_sequence = true; // binary
    protected $_referenceMap = array(
        'HuntGroupsIbfk1' => array(
            'columns' => 'companyId',
            'refTableClass' => 'Oasis\\Mapper\\Sql\\DbTable\\Companies',
            'refColumns' => 'id'
        )
    );
    protected $_dependentTables = array(
        'Oasis\\Mapper\\Sql\\DbTable\\DDIs',
        'Oasis\\Mapper\\Sql\\DbTable\\Extensions',
        'Oasis\\Mapper\\Sql\\DbTable\\HuntGroupCallForwardSettings',
        'Oasis\\Mapper\\Sql\\DbTable\\HuntGroupsRelUsers'
    );
    protected $_metadata = array (
	  'id' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroups',
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
	  'name' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroups',
	    'COLUMN_NAME' => 'name',
	    'COLUMN_POSITION' => 2,
	    'DATA_TYPE' => 'varchar',
	    'DEFAULT' => '',
	    'NULLABLE' => false,
	    'LENGTH' => '100',
	    'SCALE' => NULL,
	    'PRECISION' => NULL,
	    'UNSIGNED' => NULL,
	    'PRIMARY' => false,
	    'PRIMARY_POSITION' => NULL,
	    'IDENTITY' => false,
	  ),
	  'description' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroups',
	    'COLUMN_NAME' => 'description',
	    'COLUMN_POSITION' => 3,
	    'DATA_TYPE' => 'varchar',
	    'DEFAULT' => '',
	    'NULLABLE' => false,
	    'LENGTH' => '500',
	    'SCALE' => NULL,
	    'PRECISION' => NULL,
	    'UNSIGNED' => NULL,
	    'PRIMARY' => false,
	    'PRIMARY_POSITION' => NULL,
	    'IDENTITY' => false,
	  ),
	  'companyId' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroups',
	    'COLUMN_NAME' => 'companyId',
	    'COLUMN_POSITION' => 4,
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
	  'strategy' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroups',
	    'COLUMN_NAME' => 'strategy',
	    'COLUMN_POSITION' => 5,
	    'DATA_TYPE' => 'varchar',
	    'DEFAULT' => NULL,
	    'NULLABLE' => false,
	    'LENGTH' => '25',
	    'SCALE' => NULL,
	    'PRECISION' => NULL,
	    'UNSIGNED' => NULL,
	    'PRIMARY' => false,
	    'PRIMARY_POSITION' => NULL,
	    'IDENTITY' => false,
	  ),
	  'ringAllTimeout' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroups',
	    'COLUMN_NAME' => 'ringAllTimeout',
	    'COLUMN_POSITION' => 6,
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
	  'nextUserPosition' => 
	  array (
	    'SCHEMA_NAME' => NULL,
	    'TABLE_NAME' => 'HuntGroups',
	    'COLUMN_NAME' => 'nextUserPosition',
	    'COLUMN_POSITION' => 7,
	    'DATA_TYPE' => 'smallint',
	    'DEFAULT' => '0',
	    'NULLABLE' => true,
	    'LENGTH' => NULL,
	    'SCALE' => NULL,
	    'PRECISION' => NULL,
	    'UNSIGNED' => true,
	    'PRIMARY' => false,
	    'PRIMARY_POSITION' => NULL,
	    'IDENTITY' => false,
	  ),
	);




}
