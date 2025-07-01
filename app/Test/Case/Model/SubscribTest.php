<?php
App::uses('Subscrib', 'Model');

/**
 * Subscrib Test Case
 */
class SubscribTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subscrib'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subscrib = ClassRegistry::init('Subscrib');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subscrib);

		parent::tearDown();
	}

}
