<?php
App::uses('Subscribe', 'Model');

/**
 * Subscribe Test Case
 */
class SubscribeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subscribe'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subscribe = ClassRegistry::init('Subscribe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subscribe);

		parent::tearDown();
	}

}
