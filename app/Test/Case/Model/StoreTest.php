<?php
App::uses('Store', 'Model');

/**
 * Store Test Case
 *
 */
class StoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.store',
		'app.zone',
		'app.country',
		'app.state',
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
		$this->Store = ClassRegistry::init('Store');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Store);

		parent::tearDown();
	}

}
