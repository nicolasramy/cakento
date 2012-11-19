<?php
App::uses('Attribute', 'Model');

/**
 * Attribute Test Case
 */
class AttributeTest extends CakeTestCase {

	/**
	 * Fixtures
	 * @var array
	 */
	public $fixtures = array(
		'app.attribute'
	);

	/**
	 * setUp method
	 * @return void
	 */
	public function setUp() {
		parent::setUp();
		$this->Attribute = ClassRegistry::init('Attribute');
	}

	/**
	 * tearDown method
	 * @return void
	 */
	public function tearDown() {
		unset($this->Attribute);

		parent::tearDown();
	}

}
