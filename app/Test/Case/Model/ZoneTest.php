<?php
App::uses('Zone', 'Model');

/**
 * Zone Test Case
 *
 */
class ZoneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.zone',
		'app.country',
		'app.customer_address',
		'app.state',
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
		$this->Zone = ClassRegistry::init('Zone');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Zone);

		parent::tearDown();
	}

}
