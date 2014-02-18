<?php
/**
 * ProductFixture
 *
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'store_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'product_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'brand_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'salable' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'visible' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'searchable' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sku' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,4'),
		'weight' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,4'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'deleted' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'store_id' => 1,
			'product_type_id' => 1,
			'brand_id' => 1,
			'salable' => 1,
			'visible' => 1,
			'searchable' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'sku' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'weight' => 1,
			'created' => '2014-01-29 09:06:16',
			'modified' => '2014-01-29 09:06:16',
			'deleted' => '2014-01-29 09:06:16'
		),
	);

}
