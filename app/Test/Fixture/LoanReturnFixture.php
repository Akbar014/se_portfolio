<?php
/**
 * LoanReturn Fixture
 */
class LoanReturnFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'loan_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'return_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'remain' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'remark' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'loan_id' => 1,
			'return_date' => '2018-12-22 08:51:44',
			'amount' => 1,
			'remain' => 1,
			'remark' => 'Lorem ipsum dolor sit amet',
			'created' => '2018-12-22 08:51:44'
		),
	);

}
