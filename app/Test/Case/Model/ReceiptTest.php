<?php
App::uses('Receipt', 'Model');

/**
 * Receipt Test Case
 */
class ReceiptTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.receipt',
		'app.project',
		'app.product',
		'app.category',
		'app.client'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Receipt = ClassRegistry::init('Receipt');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Receipt);

		parent::tearDown();
	}

}
