<?php
/**
 * JolieSalesSubscriptionFixture
 *
 */
class JolieSalesSubscriptionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jolie_sales_subscription';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'subscription_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'comment' => 'Entity Id'),
		'old_subscription_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Old subscription ID'),
		'state' => array('type' => 'string', 'null' => false, 'default' => 'active', 'collate' => 'utf8_general_ci', 'comment' => 'Subscription state', 'charset' => 'utf8'),
		'old_state' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Old state', 'charset' => 'utf8'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index', 'comment' => 'Customer Id'),
		'order_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index', 'comment' => 'Order Id'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'comment' => 'Product Id'),
		'recurring_profile_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'comment' => 'Recurring profile Id'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Subscription description', 'charset' => 'utf8'),
		'shipping_address_info' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Shipping address', 'charset' => 'utf8'),
		'duration' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'comment' => 'Subscription duration'),
		'start_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'Start date'),
		'created_at' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'Creation date'),
		'updated_at' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Update date'),
		'first_box_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Box SKU into Date'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'subscription_id', 'unique' => 1),
			'order_id' => array('column' => array('order_id', 'product_id'), 'unique' => 0),
			'JOLIE_SALES_SUBSCRIPTION_ORDER_ID' => array('column' => 'order_id', 'unique' => 0),
			'customer_id' => array('column' => 'customer_id', 'unique' => 0),
			'customer_id_2' => array('column' => 'customer_id', 'unique' => 0),
			'customer_id_3' => array('column' => 'customer_id', 'unique' => 0),
			'customer_id_4' => array('column' => 'customer_id', 'unique' => 0),
			'customer_id_5' => array('column' => 'customer_id', 'unique' => 0),
			'customer_id_6' => array('column' => 'customer_id', 'unique' => 0),
			'customer_id_7' => array('column' => 'customer_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'subscription_id' => 1,
			'old_subscription_id' => 1,
			'state' => 'Lorem ipsum dolor sit amet',
			'old_state' => 'Lorem ipsum dolor sit amet',
			'customer_id' => 1,
			'order_id' => 1,
			'product_id' => 1,
			'recurring_profile_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'shipping_address_info' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'duration' => 1,
			'start_date' => '2012-09-07 17:31:35',
			'created_at' => '2012-09-07 17:31:35',
			'updated_at' => '2012-09-07 17:31:35',
			'first_box_date' => '2012-09-07'
		),
	);

}
