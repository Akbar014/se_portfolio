<?php
App::uses('LoanReturn', 'Model');

/**
 * LoanReturn Test Case
 */
class LoanReturnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.loan_return',
		'app.loan',
		'app.lender'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LoanReturn = ClassRegistry::init('LoanReturn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LoanReturn);

		parent::tearDown();
	}

}
