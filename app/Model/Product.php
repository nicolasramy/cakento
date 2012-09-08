<?php
App::uses('AppModel', 'Model');
class Product extends AppModel {
	public $useTable = 'catalog_product_entity';
	public $primaryKey = 'entity_id';

	public function afterFind(array $products) {

		if (isset($products[0]['Product'])) {
			foreach ($products as $index => $product) {
				$product_id = $product['Product']['entity_id'];

				App::import('model','ProductVarchar');
				App::import('model','ProductInt');
				App::import('model','ProductDatetime');

				$ProductVarchar = new ProductVarchar();
				$ProductInt = new ProductVarchar();
				$ProductDatetime = new ProductVarchar();

				$products[$index]['Attribute'] = $ProductVarchar->fill($product_id);
				$products[$index]['Attribute'] = $ProductInt->fill($product_id);
				$products[$index]['Attribute'] = $ProductDatetime->fill($product_id);
			}
		}

		return $products;
	}

	/**
	 * setAttribute
	 * @param  attributes
	 * @return array
	 */
	protected function setAttribute($attributes) {
		$results = array();
		foreach ($attributes as $attribute) {
				$products[$index]['Info'][$int['Attribute']['attribute_code']] = $int['ProductInt']['value'];
			}
	}
}
