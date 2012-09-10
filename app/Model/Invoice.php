<?php
App::uses('AppModel', 'Model');
class Invoice extends AppModel {
	public $useTable = 'sales_flat_invoice';
	public $primaryKey = 'entity_id';

	public $belongsTo = array(
		'Order' => array(
			'className' => 'Order',
			'conditions' => 'order_id'
		)
	);
}
