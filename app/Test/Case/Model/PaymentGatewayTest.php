<?php
App::uses('PaymentGateway', 'Model');

/**
 * PaymentGateway Test Case
 *
 */
class PaymentGatewayTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.payment_gateway',
		'app.transaction',
		'app.user_payment_profile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PaymentGateway = ClassRegistry::init('PaymentGateway');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PaymentGateway);

		parent::tearDown();
	}

}
