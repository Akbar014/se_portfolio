<?php
/**
 * Loan Fixture
 */
class LoanFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'lender_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'loan_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'return_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'remain' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'witness' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'remark' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'lender_id' => 1,
			'loan_date' => '2018-12-22 08:51:28',
			'return_date' => '2018-12-22 08:51:28',
			'amount' => 1,
			'remain' => 1,
			'witness' => 'Lorem ipsum dolor sit amet',
			'remark' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'created' => '2018-12-22 08:51:28',
			'modified' => '2018-12-22 08:51:28'
		),
	);

}
