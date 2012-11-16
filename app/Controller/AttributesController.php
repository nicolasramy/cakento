<?php
App::uses('AppController', 'Controller');
/**
 * Attributes Controller
 *
 * @property Attribute $Attribute
 */
class AttributesController extends AppController {

/**
 * manager_index method
 *
 * @return void
 */
	public function manager_index() {
		$this->Attribute->recursive = 0;
		$this->set('attributes', $this->paginate());
	}

/**
 * manager_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manager_view($id = null) {
		$this->Attribute->id = $id;
		if (!$this->Attribute->exists()) {
			throw new NotFoundException(__('Invalid attribute'));
		}
		$this->set('attribute', $this->Attribute->read(null, $id));
	}

/**
 * manager_add method
 *
 * @return void
 */
	public function manager_add() {
		if ($this->request->is('post')) {
			$this->Attribute->create();
			if ($this->Attribute->save($this->request->data)) {
				$this->Session->setFlash(__('The attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attribute could not be saved. Please, try again.'));
			}
		}
		$products = $this->Attribute->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * manager_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manager_edit($id = null) {
		$this->Attribute->id = $id;
		if (!$this->Attribute->exists()) {
			throw new NotFoundException(__('Invalid attribute'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Attribute->save($this->request->data)) {
				$this->Session->setFlash(__('The attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attribute could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Attribute->read(null, $id);
		}
		$products = $this->Attribute->Product->find('list');
		$this->set(compact('products'));
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
		$this->Attribute->id = $id;
		if (!$this->Attribute->exists()) {
			throw new NotFoundException(__('Invalid attribute'));
		}
		if ($this->Attribute->delete()) {
			$this->Session->setFlash(__('Attribute deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attribute was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
