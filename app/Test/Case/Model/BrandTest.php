<?php
App::uses('Brand', 'Model');

/**
 * Brand Test Case
 *
 */
class BrandTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.brand',
		'app.product',
		'app.store',
		'app.zone',
		'app.country',
		'app.customer_address',
		'app.state',
		'app.cart',
		'app.customer',
		'app.order',
		'app.transaction',
		'app.warehouse',
		'app.website',
		'app.product_type',
		'app.cart_item',
		'app.credit_memo_item',
		'app.invoice_item',
		'app.product_category',
		'app.category',
		'app.subscription_item',
		'app.subscription',
		'app.warehouse_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Brand = ClassRegistry::init('Brand');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Brand);

		parent::tearDown();
	}

}
