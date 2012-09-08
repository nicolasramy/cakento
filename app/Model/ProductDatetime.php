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

	public function fill($product_id){
		$result = array();
		$conditions = array('ProductDatetime.entity_id' => $product_id);
		$attributes = $this->find('all', compact('conditions'));
		foreach ($attributes as $attribute) {
			$result[$attribute['Attribute']['attribute_code']] = $attribute['ProductDatetime']['value'];
		}
		return $result;
	}
}
