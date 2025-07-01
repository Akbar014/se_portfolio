<?php
App::uses('HostingRenewal', 'Model');

/**
 * HostingRenewal Test Case
 */
class HostingRenewalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hosting_renewal',
		'app.hosting',
		'app.project',
		'app.product',
		'app.category',
		'app.client',
		'app.receipt'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HostingRenewal = ClassRegistry::init('HostingRenewal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HostingRenewal);

		parent::tearDown();
	}

}
