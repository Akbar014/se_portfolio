<?php
App::uses('Domain', 'Model');

/**
 * Domain Test Case
 */
class DomainTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.domain',
		'app.project',
		'app.product',
		'app.category',
		'app.client',
		'app.receipt',
		'app.domain_renewal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Domain = ClassRegistry::init('Domain');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Domain);

		parent::tearDown();
	}

}
