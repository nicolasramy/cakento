<?php
App::uses('AppController', 'Controller');
/**
 * ProductTypes Controller
 *
 * @property ProductType $ProductType
 */
class ProductTypesController extends AppController {

/**
 * manager_index method
 *
 * @return void
 */
	public function manager_index() {
		$this->ProductType->recursive = 0;
		$this->set('productTypes', $this->paginate());
	}

/**
 * manager_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manager_view($id = null) {
		$this->ProductType->id = $id;
		if (!$this->ProductType->exists()) {
			throw new NotFoundException(__('Invalid product type'));
		}
		$this->set('productType', $this->ProductType->read(null, $id));
	}

/**
 * manager_add method
 *
 * @return void
 */
	public function manager_add() {
		if ($this->request->is('post')) {
			$this->ProductType->create();
			if ($this->ProductType->save($this->request->data)) {
				$this->Session->setFlash(__('The product type has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product type could not be saved. Please, try again.'), 'Manager/Flash/error');
			}
		}
	}

/**
 * manager_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manager_edit($id = null) {
		$this->ProductType->id = $id;
		if (!$this->ProductType->exists()) {
			$this->Session->setFlash(__('Invalid product type.'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductType->save($this->request->data)) {
				$this->Session->setFlash(__('The product type has been updated'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product type could not be saved. Please, try again.'), 'Manager/Flash/error');
			}
		} else {
			$this->request->data = $this->ProductType->read(null, $id);
		}
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
		$this->ProductType->id = $id;
		if (!$this->ProductType->exists()) {
			throw new NotFoundException(__('Invalid product type'), 'Manager/Flash/default');
		}
		if ($this->ProductType->delete()) {
			$this->Session->setFlash(__('Product type deleted'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product type was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
