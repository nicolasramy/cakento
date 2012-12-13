<?php
App::uses('AppModel', 'Model');
/**
 * PaymentGateway Model
 *
 * @property Transaction $Transaction
 * @property UserPaymentProfile $UserPaymentProfile
 */
class PaymentGateway extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'payment_gateway_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UserPaymentProfile' => array(
			'className' => 'UserPaymentProfile',
			'foreignKey' => 'payment_gateway_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
