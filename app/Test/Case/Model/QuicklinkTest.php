<?php
App::uses('Quicklink', 'Model');

/**
 * Quicklink Test Case
 */
class QuicklinkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quicklink'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Quicklink = ClassRegistry::init('Quicklink');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Quicklink);

		parent::tearDown();
	}

}
