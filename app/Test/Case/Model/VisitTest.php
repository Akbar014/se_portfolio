<?php
App::uses('Visit', 'Model');

/**
 * Visit Test Case
 */
class VisitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.visit',
		'app.employee',
		'app.attendance',
		'app.forsake',
		'app.payment',
		'app.salary',
		'app.user',
		'app.role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Visit = ClassRegistry::init('Visit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Visit);

		parent::tearDown();
	}

}
