<?php
App::uses('AppModel', 'Model');
class Store extends AppModel {
	public $useTable = 'core_store';
	public $primaryKey = 'store_id';
}
