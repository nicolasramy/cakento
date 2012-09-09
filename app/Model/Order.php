<?php
App::uses('AppModel', 'Model');
class Order extends AppModel {
	public $useTable = 'sales_flat_order_grid';
	public $primaryKey = 'entity_id';

	public $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'entity_id',
		)
	);
}
