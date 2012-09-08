<?php
App::uses('AppModel', 'Model');

class Attribute extends AppModel {
	public $useTable = 'eav_attribute';
	public $primaryKey = 'attribute_id';
	public $displayField = 'attribute_code';
}
