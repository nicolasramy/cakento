<?php
App::uses('AppModel', 'Model');
class Address extends AppModel {
	public $useTable = 'customer_address_entity';
	public $primaryKey = 'entity_id';

	public function afterFind(array $customer_addresss) {

		if (isset($customer_addresss[0]['Address'])) {
			foreach ($customer_addresss as $index => $customer_address) {
				$customer_address_id = $customer_address['Address']['entity_id'];

				App::import('model','AddressVarchar');
				App::import('model','AddressInt');
				App::import('model','AddressDatetime');

				$AddressVarchar = new AddressVarchar();
				$AddressInt = new AddressVarchar();
				$AddressDatetime = new AddressVarchar();

				$customer_addresss[$index]['Attribute'] = $AddressVarchar->fill($customer_address_id);
				$customer_addresss[$index]['Attribute'] = $AddressInt->fill($customer_address_id);
				$customer_addresss[$index]['Attribute'] = $AddressDatetime->fill($customer_address_id);
			}
		}

		return $customer_addresss;
	}

	/**
	 * setAttribute
	 * @param  attributes
	 * @return array
	 */
	protected function setAttribute($attributes) {
		$results = array();
		foreach ($attributes as $attribute) {
				$customer_addresss[$index]['Info'][$int['Attribute']['attribute_code']] = $int['AddressInt']['value'];
			}
	}
}