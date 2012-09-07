<?php
App::uses('CustomerEntity', 'Model');

/**
 * CustomerEntity Test Case
 *
 */
class CustomerEntityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_entity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerEntity = ClassRegistry::init('CustomerEntity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerEntity);

		parent::tearDown();
	}

}
