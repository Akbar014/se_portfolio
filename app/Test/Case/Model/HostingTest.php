<?php
App::uses('Hosting', 'Model');

/**
 * Hosting Test Case
 */
class HostingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hosting',
		'app.project',
		'app.product',
		'app.category',
		'app.client',
		'app.receipt',
		'app.hosting_renewal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hosting = ClassRegistry::init('Hosting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hosting);

		parent::tearDown();
	}

}
