<?php
App::uses('AppModel', 'Model');
class Product extends AppModel {
	public $useTable = 'catalog_product_entity';
	public $primaryKey = 'entity_id';

	/**
	 * hasAndBelongsToMany associations
	 *
	 * @var array
	 */
	public $hasOne = array(
		'ProductEntity' => array(
			'className' => 'ProductEntity',
			'joinTable' => 'catalog_product_entity',
			'foreignKey' => 'entity_id',
		)
	);

	public function info($id = null) {
		return $this->ProductEntity->info($id);
	}
}
