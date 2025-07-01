<?php
App::uses('Expensehead', 'Model');

/**
 * Expensehead Test Case
 */
class ExpenseheadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.expensehead',
		'app.expense'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Expensehead = ClassRegistry::init('Expensehead');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Expensehead);

		parent::tearDown();
	}

}
