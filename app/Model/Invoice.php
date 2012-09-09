<?php
App::uses('AppModel', 'Model');
class Invoice extends AppModel {
	public $useTable = 'sales_flat_invoice_grid';
	public $primaryKey = 'entity_id';
}
