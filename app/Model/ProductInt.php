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


	public function fill($product_id){
		$result = array();
		$conditions = array('ProductInt.entity_id' => $product_id);
		$attributes = $this->find('all', compact('conditions'));
		foreach ($attributes as $attribute) {
			$result[$attribute['Attribute']['attribute_code']] = $attribute['ProductInt']['value'];
		}
		return $result;
	}
}
