<?php
App::uses('Salary', 'Model');

/**
 * Salary Test Case
 */
class SalaryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salary',
		'app.employee',
		'app.attendance',
		'app.forsake',
		'app.payment',
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
		$this->Salary = ClassRegistry::init('Salary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Salary);

		parent::tearDown();
	}

}
