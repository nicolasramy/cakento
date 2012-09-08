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

		$conditions = array('Address.parent_id' => $id);
		$addresses = $this->Address->find('all', compact('conditions'));
		$this->set(compact('customer', 'addresses'));
	}
}
