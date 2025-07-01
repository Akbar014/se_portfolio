<?php
/**
 * HostingRenewal Fixture
 */
class HostingRenewalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'hosting_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'renew_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'exchange_rate' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'paid' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'hosting_id' => 1,
			'renew_date' => '2018-12-22 08:50:55',
			'price' => 1,
			'exchange_rate' => 1,
			'paid' => 1,
			'status' => 1,
			'created' => '2018-12-22 08:50:55',
			'modified' => '2018-12-22 08:50:55'
		),
	);

}
