<?php
App::uses('State', 'Model');

/**
 * State Test Case
 *
 */
class StateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.state',
		'app.country',
		'app.zone',
		'app.customer_address',
		'app.store',
		'app.cart',
		'app.customer',
		'app.order',
		'app.product',
		'app.product_type',
		'app.brand',
		'app.cart_item',
		'app.credit_memo_item',
		'app.invoice_item',
		'app.product_category',
		'app.category',
		'app.subscription_item',
		'app.subscription',
		'app.warehouse_item',
		'app.transaction',
		'app.warehouse',
		'app.website'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->State = ClassRegistry::init('State');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->State);

		parent::tearDown();
	}

}
