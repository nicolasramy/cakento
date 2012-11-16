<?php
App::uses('AppController', 'Controller');
/**
 * ProductCategories Controller
 *
 * @property ProductCategory $ProductCategory
 */
class ProductCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductCategory->recursive = 0;
		$this->set('productCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProductCategory->id = $id;
		if (!$this->ProductCategory->exists()) {
			throw new NotFoundException(__('Invalid product category'));
		}
		$this->set('productCategory', $this->ProductCategory->read(null, $id));
	}

/**
 * manager_index method
 *
 * @return void
 */
	public function manager_index() {
		$this->ProductCategory->recursive = 0;
		$this->set('productCategories', $this->paginate());
	}

/**
 * manager_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manager_view($id = null) {
		$this->ProductCategory->id = $id;
		if (!$this->ProductCategory->exists()) {
			throw new NotFoundException(__('Invalid product category'));
		}
		$this->set('productCategory', $this->ProductCategory->read(null, $id));
	}

/**
 * manager_add method
 *
 * @return void
 */
	public function manager_add() {
		if ($this->request->is('post')) {
			$this->ProductCategory->create();
			if ($this->ProductCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The product category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product category could not be saved. Please, try again.'));
			}
		}
		$categories = $this->ProductCategory->Category->find('list');
		$products = $this->ProductCategory->Product->find('list');
		$this->set(compact('categories', 'products'));
	}

/**
 * manager_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manager_edit($id = null) {
		$this->ProductCategory->id = $id;
		if (!$this->ProductCategory->exists()) {
			throw new NotFoundException(__('Invalid product category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The product category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProductCategory->read(null, $id);
		}
		$categories = $this->ProductCategory->Category->find('list');
		$products = $this->ProductCategory->Product->find('list');
		$this->set(compact('categories', 'products'));
	}

/**
 * manager_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manager_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ProductCategory->id = $id;
		if (!$this->ProductCategory->exists()) {
			throw new NotFoundException(__('Invalid product category'));
		}
		if ($this->ProductCategory->delete()) {
			$this->Session->setFlash(__('Product category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
