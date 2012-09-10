<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 */
class CustomersController extends AppController {

	public $uses = array(
		'Customer',
		'Order',
		'Invoice',
		'Address'
	);

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->Customer->recursive = 0;
		$this->set('customers', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$customer = $this->Customer->read(null, $id);

		// Addresses
		$conditions = array('Address.parent_id' => $id);
		$addresses = $this->Address->find('all', compact('conditions'));

		// Orders
		$conditions = array('Order.customer_id' => $id);
		$order = array('Order.created_at DESC');
		$orders = $this->Order->find('all', compact('conditions', 'order'));

		$this->set(compact('customer', 'addresses', 'orders'));
	}
}
