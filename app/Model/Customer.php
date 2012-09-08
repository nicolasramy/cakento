<?php
App::uses('AppModel', 'Model');
class Customer extends AppModel {
	public $useTable = 'customer_entity';
	public $primaryKey = 'entity_id';

	/**
	 * hasAndBelongsToMany associations
	 *
	 * @var array
	 */
	public $hasOne = array(
		'CustomerEntity' => array(
			'className' => 'CustomerEntity',
			'joinTable' => 'customer_entity',
			'foreignKey' => 'entity_id',
		)
	);

	public function info($id = null) {
		return $this->CustomerEntity->info($id);
	}
}
