<?php
App::uses('AppModel', 'Model');
class AddressVarchar extends AppModel {
	public $useTable = 'customer_address_entity_varchar';
	public $primaryKey = 'value_id';

	public $belongsTo = array(
		'Attribute' => array(
			'className' => 'Attribute',
			'foreignKey' => 'attribute_id'
		)
	);

	public function fill($customer_address_id){
		$result = array();
		$conditions = array('AddressVarchar.entity_id' => $customer_address_id);
		$attributes = $this->find('all', compact('conditions'));
		foreach ($attributes as $attribute) {
			$result[$attribute['Attribute']['attribute_code']] = $attribute['AddressVarchar']['value'];
		}
		return $result;
	}
}
