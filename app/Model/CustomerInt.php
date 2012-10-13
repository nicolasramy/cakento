<?php
App::uses('AppModel', 'Model');
class CustomerInt extends AppModel {
	public $useTable = 'customer_entity_int';
	public $primaryKey = 'value_id';

	public $belongsTo = array(
		'Attribute' => array(
			'className' => 'Attribute',
			'foreignKey' => 'attribute_id'
		)
	);
}
