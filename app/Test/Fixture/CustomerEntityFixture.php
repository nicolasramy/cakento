<?php
/**
 * CustomerEntityFixture
 *
 */
class CustomerEntityFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'customer_entity';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'entity_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'comment' => 'Entity Id'),
		'entity_type_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5, 'key' => 'index', 'comment' => 'Entity Type Id'),
		'attribute_set_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5, 'comment' => 'Attribute Set Id'),
		'website_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'key' => 'index', 'comment' => 'Website Id'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => 'Email', 'charset' => 'utf8'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5, 'comment' => 'Group Id'),
		'increment_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'Increment Id', 'charset' => 'utf8'),
		'store_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 5, 'key' => 'index', 'comment' => 'Store Id'),
		'created_at' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => 'Created At'),
		'updated_at' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00', 'comment' => 'Updated At'),
		'is_active' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 5, 'comment' => 'Is Active'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'entity_id', 'unique' => 1),
			'IDX_CUSTOMER_ENTITY_STORE_ID' => array('column' => 'store_id', 'unique' => 0),
			'IDX_CUSTOMER_ENTITY_ENTITY_TYPE_ID' => array('column' => 'entity_type_id', 'unique' => 0),
			'IDX_CUSTOMER_ENTITY_EMAIL_WEBSITE_ID' => array('column' => array('email', 'website_id'), 'unique' => 0),
			'IDX_CUSTOMER_ENTITY_WEBSITE_ID' => array('column' => 'website_id', 'unique' => 0)
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
			'entity_id' => 1,
			'entity_type_id' => 1,
			'attribute_set_id' => 1,
			'website_id' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'group_id' => 1,
			'increment_id' => 'Lorem ipsum dolor sit amet',
			'store_id' => 1,
			'created_at' => 1347032186,
			'updated_at' => 1347032186,
			'is_active' => 1
		),
	);

}
