<?php
App::uses('Forsake', 'Model');

/**
 * Forsake Test Case
 */
class ForsakeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.forsake',
		'app.employee',
		'app.attendance',
		'app.payment',
		'app.salary',
		'app.user',
		'app.visit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Forsake = ClassRegistry::init('Forsake');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Forsake);

		parent::tearDown();
	}

}
