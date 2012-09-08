<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 */
class CustomersController extends AppController {

	public $uses = array(
		'Customer'
	);

	/**
	 * index method
	 *
	 * @return void
	 */
	public function info() {
		$this->Customer->recursive = 0;
		$this->set('customers', $this->paginate());
	}

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
		$customer = $this->Customer->info($id);
		$this->set(compact('customer'));
	}
}
