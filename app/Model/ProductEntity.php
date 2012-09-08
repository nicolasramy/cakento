<?php
App::uses('AppModel', 'Model');
class ProductEntity extends AppModel {
	public $useTable = 'customer_entity';
	public $primaryKey = 'entity_id';

	/**
	 * hasAndBelongsToMany associations
	 *
	 * @var array
	 */
	public $hasAndBelongsToMany = array(
		'ProductVarchar' => array(
			'className' => 'ProductVarchar',
			'joinTable' => 'catalog_product_entity_varchar',
			'foreignKey' => 'entity_id',
		),
		'ProductInt' => array(
			'className' => 'ProductInt',
			'joinTable' => 'catalog_product_entity_int',
			'foreignKey' => 'entity_id',
		),
		'ProductDatetime' => array(
			'className' => 'ProductDatetime',
			'joinTable' => 'catalog_product_entity_datetime',
			'foreignKey' => 'entity_id',
		),
		'Product' => array(
			'className' => 'Product',
			'joinTable' => 'entity_id',
			'foreignKey' => 'entity_id',
		)
	);

	/**
	 * info
	 * @param  id
	 * @return object
	 */
	public function info($id = null) {
		if (!$id) {
			return false;
		}

		$info = array();

		$product = $this->Product->read(null, $id);
		$info['Info']['sku'] = $product['Product']['sku'];

		$conditions = array('ProductVarchar.entity_id' => $id);
		$varchars = $this->ProductVarchar->find('all', compact('conditions'));
		foreach ($varchars as $varchar) {
			$info['Info'][$varchar['Attribute']['attribute_code']] = $varchar['ProductVarchar']['value'];
		}

		$conditions = array('ProductInt.entity_id' => $id);
		$ints = $this->ProductInt->find('all', compact('conditions'));
		foreach ($ints as $int) {
			$info['Info'][$int['Attribute']['attribute_code']] = $int['ProductInt']['value'];
		}

		$conditions = array('ProductDatetime.entity_id' => $id);
		$datetimes = $this->ProductDatetime->find('all', compact('conditions'));
		foreach ($datetimes as $datetime) {
			$info['Info'][$datetime['Attribute']['attribute_code']] = $datetime['ProductDatetime']['value'];
		}

		return $info;
	}

}
