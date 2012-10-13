<?php
App::uses('AppController', 'Controller');
/**
 * Addresss Controller
 *
 * @property Address $Address
 */
class AddressesController extends AppController {

	public $uses = array(
		'Address'
	);

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->Address->recursive = 0;
		$this->set('addresses', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Address->id = $id;
		if (!$this->Address->exists()) {
			throw new NotFoundException(__('Invalid address'));
		}
		$address = $this->Address->read(null, $id);
		$this->set(compact('address'));
	}
}
