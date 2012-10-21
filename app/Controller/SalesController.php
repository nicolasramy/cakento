<?php
App::uses('AppController', 'Controller');
/**
 * Sales Controller
 *
 * @property Sale $Sale
 */
class SalesController extends AppController {

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->Sale->recursive = 0;
		$this->set('sales', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Sale->id = $id;
		if (!$this->Sale->exists()) {
			throw new NotFoundException(__('Invalid sale'));
		}
		$sale = $this->Sale->read(null, $id);

		$this->set(compact('sale'));
	}
}
