<?php
App::uses('AppModel', 'Model');
class Order extends AppModel {
	public $useTable = 'sales_flat_order';
	public $primaryKey = 'entity_id';
}
