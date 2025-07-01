<?php
/**
 * Salary Fixture
 */
class SalaryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'days' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'leaves' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'presents' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'salary' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'bonus' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'sal_month' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 7, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'employee_id' => 1,
			'days' => 1,
			'leaves' => 1,
			'presents' => 1,
			'salary' => 1,
			'bonus' => 1,
			'amount' => 1,
			'sal_month' => 'Lorem',
			'created' => '2018-06-02 13:01:46',
			'modified' => '2018-06-02 13:01:46'
		),
	);

}
