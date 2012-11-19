<?php
/**
 * AttributeFixture
 *
 */
class AttributeFixture extends CakeTestFixture {

    /**
     * Fields
     * @var array
     */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'type' => array('type' => 'integer', 'null' => false, 'default' => null),
		'visible' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'searchable' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

    /**
     * Records
     * @var array
     */
	public $records = array(
		array(
			'id' => 1,
			'type' => 1,
			'visible' => 1,
			'searchable' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-21 04:52:01',
			'modified' => '2012-10-21 04:52:01',
			'deleted' => '0000-00-00 00:00:00'
		),
		array(
			'id' => 2,
			'type' => 1,
			'visible' => 1,
			'searchable' => 1,
			'name' => 'Lorem',
			'created' => '2012-10-21 04:53:47',
			'modified' => '2012-10-21 04:55:35',
			'deleted' => '0000-00-00 00:00:00'
		),
		array(
			'id' => 3,
			'type' => 2,
			'visible' => 1,
			'searchable' => 1,
			'name' => 'Dolor sit amet',
			'created' => '2012-10-21 04:58:24',
			'modified' => '0000-00-00 00:00:00',
			'deleted' => '0000-00-00 00:00:00'
		),
	);

}
