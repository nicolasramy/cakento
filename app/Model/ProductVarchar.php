<?php
App::uses('AppModel', 'Model');
class ProductVarchar extends AppModel {
	public $useTable = 'catalog_product_entity_varchar';
	public $primaryKey = 'value_id';

	public $belongsTo = array(
		'Attribute' => array(
			'className' => 'Attribute',
			'foreignKey' => 'attribute_id'
		)
	);
}
