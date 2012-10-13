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
}
