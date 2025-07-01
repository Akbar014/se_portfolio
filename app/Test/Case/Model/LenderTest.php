<?php
App::uses('Lender', 'Model');

/**
 * Lender Test Case
 */
class LenderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lender',
		'app.loan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lender = ClassRegistry::init('Lender');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lender);

		parent::tearDown();
	}

}
