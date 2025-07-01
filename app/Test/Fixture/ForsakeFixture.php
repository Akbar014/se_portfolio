<?php
/**
 * Forsake Fixture
 */
class ForsakeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'forsake_type' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'days' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'applyDate' => array('type' => 'date', 'null' => false, 'default' => null),
		'startDate' => array('type' => 'date', 'null' => false, 'default' => null),
		'endDate' => array('type' => 'date', 'null' => false, 'default' => null),
		'comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
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
			'forsake_type' => 1,
			'days' => 1,
			'applyDate' => '2018-06-02',
			'startDate' => '2018-06-02',
			'endDate' => '2018-06-02',
			'comments' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'created' => '2018-06-02 12:59:20',
			'modified' => '2018-06-02 12:59:20'
		),
	);

}
