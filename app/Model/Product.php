<?php
App::uses('AppModel', 'Model');
class Product extends AppModel {
	public $useTable = 'catalog_product_entity';
	public $primaryKey = 'entity_id';

	public $actsAs = array(
		'Entity' => array(
			'datetime',
			'decimal',
			'int',
			'text',
			'varchar'
		)
	);
}
