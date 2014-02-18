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
		if ($this->request->is('post') || $this->request->is('put')) {
			if (isset($this->request->data)) {
				foreach($this->request->data['ProductType'] as $key => $id) {

					// Perform Action
					if ($id && $key != 'action' && $this->ProductType->exists($id)) {
						switch($this->request->data['ProductType']['action']) {
							case 'visible':
								$field = 'visible';
								$value = 1;
								break;
							case 'invisible':
								$field = 'visible';
								$value = 0;
								break;
							case 'searchable':
								$field = 'searchable';
								$value = 1;
								break;
							case 'unsearchable':
								$field = 'searchable';
								$value = 0;
								break;

								break;
							default:
								break;
						}
						$this->ProductType->read(null, $id);
						$this->ProductType->saveField($field, $value);
					}
				}
				$this->redirect($this->referer());
			}
        }

		$this->ProductType->recursive = 0;
		$this->set('productTypes', $this->paginate());
	}

/**
 * manager_view method
 *
 * @param string $id
 * @return void
 */
	public function manager_view($id = null) {
		$this->ProductType->id = $id;
		if (!$this->ProductType->exists()) {
			$this->Session->setFlash(__('Invalid product type.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
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
 * @param string $id
 * @return void
 */
	public function manager_edit($id = null) {
		$this->ProductType->id = $id;
		if (!$this->ProductType->exists()) {
			$this->Session->setFlash(__('Invalid product type.'), 'Manager/Flash/error');
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
 * @param string $id
 * @return void
 */
	public function manager_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ProductType->id = $id;
		if (!$this->ProductType->exists()) {
			$this->Session->setFlash(__('Invalid product type.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->ProductType->delete()) {
			$this->Session->setFlash(__('Product type deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product type was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
