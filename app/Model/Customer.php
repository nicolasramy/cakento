<?php
App::uses('AppModel', 'Model');
class Customer extends AppModel {
	public $useTable = 'customer_entity';
	public $primaryKey = 'entity_id';

	public function afterFind(array $customers) {

		if (isset($customers[0]['Customer'])) {
			foreach ($customers as $index => $customer) {
				$customer_id = $customer['Customer']['entity_id'];

				App::import('model','CustomerVarchar');
				App::import('model','CustomerInt');
				App::import('model','CustomerDatetime');

				$CustomerVarchar = new CustomerVarchar();
				$CustomerInt = new CustomerVarchar();
				$CustomerDatetime = new CustomerVarchar();

				$customers[$index]['Attribute'] = $CustomerVarchar->fill($customer_id);
				$customers[$index]['Attribute'] = $CustomerInt->fill($customer_id);
				$customers[$index]['Attribute'] = $CustomerDatetime->fill($customer_id);
			}
		}

		return $customers;
	}

	/**
	 * setAttribute
	 * @param  attributes
	 * @return array
	 */
	protected function setAttribute($attributes) {
		$results = array();
		foreach ($attributes as $attribute) {
				$customers[$index]['Info'][$int['Attribute']['attribute_code']] = $int['CustomerInt']['value'];
			}
	}
}