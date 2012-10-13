<?php
App::uses('AppModel', 'Model');
class Customer extends AppModel {
	public $useTable = 'customer_entity';
	public $primaryKey = 'entity_id';

	public $actsAs = array(
		'Entity' => array(
			'datetime',
			'decimal',
			'int',
			'text',
			'varchar'
		)
	);
}
