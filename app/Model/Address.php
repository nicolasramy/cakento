<?php
App::uses('AppModel', 'Model');
class Address extends AppModel {
	public $useTable = 'customer_address_entity';
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