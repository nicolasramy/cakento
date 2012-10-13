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
}
