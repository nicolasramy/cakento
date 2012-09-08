<?php
App::uses('AppModel', 'Model');
class CustomerDatetime extends AppModel {
	public $useTable = 'customer_entity_datetime';
	public $primaryKey = 'value_id';

	public $belongsTo = array(
		'Attribute' => array(
			'className' => 'Attribute',
			'foreignKey' => 'attribute_id'
		)
	);

	public function fill($customer_id){
		$result = array();
		$conditions = array('CustomerDatetime.entity_id' => $customer_id);
		$attributes = $this->find('all', compact('conditions'));
		foreach ($attributes as $attribute) {
			$result[$attribute['Attribute']['attribute_code']] = $attribute['CustomerDatetime']['value'];
		}
		return $result;
	}
}
