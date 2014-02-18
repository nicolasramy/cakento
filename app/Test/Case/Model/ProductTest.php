<?php
App::uses('Product', 'Model');

/**
 * Product Test Case
 *
 */
class ProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product',
		'app.store',
		'app.product_type',
		'app.brand',
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
		$this->Product = ClassRegistry::init('Product');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Product);

		parent::tearDown();
	}

}
