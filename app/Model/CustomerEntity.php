<?php
App::uses('AppModel', 'Model');
class CustomerEntity extends AppModel {
	public $useTable = 'customer_entity';
	public $primaryKey = 'entity_id';

	/**
	 * hasAndBelongsToMany associations
	 *
	 * @var array
	 */
	public $hasAndBelongsToMany = array(
		'CustomerVarchar' => array(
			'className' => 'CustomerVarchar',
			'joinTable' => 'customer_entity_varchar',
			'foreignKey' => 'entity_id',
		),
		'CustomerInt' => array(
			'className' => 'CustomerInt',
			'joinTable' => 'customer_entity_int',
			'foreignKey' => 'entity_id',
		),
		'CustomerDatetime' => array(
			'className' => 'CustomerDatetime',
			'joinTable' => 'customer_entity_datetime',
			'foreignKey' => 'entity_id',
		),
		'Customer' => array(
			'className' => 'Customer',
			'joinTable' => 'entity_id',
			'foreignKey' => 'entity_id',
		)
	);

	/**
	 * info
	 * @param  id
	 * @return object
	 */
	public function info($id = null) {
		if (!$id) {
			return false;
		}

		$customer = array();

		$customer = $this->Customer->read(null, $id);
		$customer['Info']['email'] = $customer['Customer']['email'];

		$conditions = array('CustomerVarchar.entity_id' => $id);
		$varchars = $this->CustomerVarchar->find('all', compact('conditions'));
		foreach ($varchars as $varchar) {
			$customer['Info'][$varchar['Attribute']['attribute_code']] = $varchar['CustomerVarchar']['value'];
		}

		$conditions = array('CustomerInt.entity_id' => $id);
		$ints = $this->CustomerInt->find('all', compact('conditions'));
		foreach ($ints as $int) {
			$customer['Info'][$int['Attribute']['attribute_code']] = $int['CustomerInt']['value'];
		}

		$conditions = array('CustomerDatetime.entity_id' => $id);
		$datetimes = $this->CustomerDatetime->find('all', compact('conditions'));
		foreach ($datetimes as $datetime) {
			$customer['Info'][$datetime['Attribute']['attribute_code']] = $datetime['CustomerDatetime']['value'];
		}

		return $customer;
	}

}
