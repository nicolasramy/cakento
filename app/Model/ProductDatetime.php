<?php
App::uses('AppModel', 'Model');
class ProductDatetime extends AppModel {
	public $useTable = 'catalog_product_entity_datetime';
	public $primaryKey = 'value_id';

	public $belongsTo = array(
		'Attribute' => array(
			'className' => 'Attribute',
			'foreignKey' => 'attribute_id'
		)
	);
}
