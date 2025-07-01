<?php
App::uses('ProjectRequirement', 'Model');

/**
 * ProjectRequirement Test Case
 */
class ProjectRequirementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_requirement',
		'app.project',
		'app.product',
		'app.category',
		'app.client',
		'app.receipt',
		'app.employee',
		'app.attendance',
		'app.forsake',
		'app.payment',
		'app.salary',
		'app.user',
		'app.role',
		'app.visit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectRequirement = ClassRegistry::init('ProjectRequirement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectRequirement);

		parent::tearDown();
	}

}
