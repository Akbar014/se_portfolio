<?php
App::uses('DomainRenewal', 'Model');

/**
 * DomainRenewal Test Case
 */
class DomainRenewalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.domain_renewal',
		'app.domain',
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
		$this->DomainRenewal = ClassRegistry::init('DomainRenewal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DomainRenewal);

		parent::tearDown();
	}

}
