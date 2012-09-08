<?php
App::uses('AppModel', 'Model');
class CustomerVarchar extends AppModel {
	public $useTable = 'customer_entity_varchar';
	public $primaryKey = 'value_id';

	public $belongsTo = array(
		'Attribute' => array(
			'className' => 'Attribute',
			'foreignKey' => 'attribute_id'
		)
	);

	public function fill($customer_id){
		$result = array();
		$conditions = array('CustomerVarchar.entity_id' => $customer_id);
		$attributes = $this->find('all', compact('conditions'));
		foreach ($attributes as $attribute) {
			$result[$attribute['Attribute']['attribute_code']] = $attribute['CustomerVarchar']['value'];
		}
		return $result;
	}
}
