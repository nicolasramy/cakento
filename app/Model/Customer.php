<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 */
class Customer extends AppModel {
	public $useTable = 'customer_entity';
	public $primaryKey = 'entity_id';

}
