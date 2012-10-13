<?php
App::uses('AppModel', 'Model');
class Entity extends AppModel {

	public $useTable = 'eav_entity';

	public $primaryKey = 'entity_id';

	public $belongsTo = array(
		'EntityType' => array(
			'className' => 'EntityType',
			'foreignKey' => 'entity_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
