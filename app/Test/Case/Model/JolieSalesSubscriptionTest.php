<?php
App::uses('JolieSalesSubscription', 'Model');

/**
 * JolieSalesSubscription Test Case
 *
 */
class JolieSalesSubscriptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jolie_sales_subscription',
		'app.customer',
		'app.order',
		'app.product',
		'app.recurring_profile',
		'app.detail',
		'app.jolie_sales_subscription_detail',
		'app.detail_shipment',
		'app.jolie_sales_subscription_detail_shipment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JolieSalesSubscription = ClassRegistry::init('JolieSalesSubscription');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JolieSalesSubscription);

		parent::tearDown();
	}

}
