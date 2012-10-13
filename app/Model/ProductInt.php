<?php
App::uses('AppModel', 'Model');
class ProductInt extends AppModel {
	public $useTable = 'catalog_product_entity_int';
	public $primaryKey = 'value_id';

	public $belongsTo = array(
		'Attribute' => array(
			'className' => 'Attribute',
			'foreignKey' => 'attribute_id'
		)
	);
}
