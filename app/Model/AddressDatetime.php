<?php
App::uses('AppModel', 'Model');
class AddressDatetime extends AppModel {
	public $useTable = 'customer_address_entity_datetime';
	public $primaryKey = 'value_id';

	public $belongsTo = array(
		'Attribute' => array(
			'className' => 'Attribute',
			'foreignKey' => 'attribute_id'
		)
	);

	public function fill($customer_address_id){
		$result = array();
		$conditions = array('AddressDatetime.entity_id' => $customer_address_id);
		$attributes = $this->find('all', compact('conditions'));
		foreach ($attributes as $attribute) {
			$result[$attribute['Attribute']['attribute_code']] = $attribute['AddressDatetime']['value'];
		}
		return $result;
	}
}
