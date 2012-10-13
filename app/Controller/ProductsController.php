<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 */
class ProductsController extends AppController {

	public $uses = array(
		'Product'
	);

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$product = $this->Product->read(null, $id);
		$this->set(compact('product'));
	}


	/**
	 * index method
	 *
	 * @return void
	 */
	public function manager_index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}
}
