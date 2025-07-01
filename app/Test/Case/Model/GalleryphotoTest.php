<?php
App::uses('Galleryphoto', 'Model');

/**
 * Galleryphoto Test Case
 */
class GalleryphotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.galleryphoto',
		'app.gallery'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Galleryphoto = ClassRegistry::init('Galleryphoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Galleryphoto);

		parent::tearDown();
	}

}
