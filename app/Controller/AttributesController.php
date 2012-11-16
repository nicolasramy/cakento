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
		/**
		 *
		 */
		if ($this->request->is('post') || $this->request->is('put')) {
			if (isset($this->request->data)) {
				foreach($this->request->data['Attribute'] as $key => $id) {

					// Perform Action
					if ($id && $key != 'action' && $this->Attribute->exists($id)) {
						switch($this->request->data['Attribute']['action']) {
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
						$this->Attribute->read(null, $id);
						$this->Attribute->saveField($field, $value);
					}
				}
				$this->redirect($this->referer());
			}
        }

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
		if (!$this->Attribute->exists($id)) {
			$this->Session->setFlash(__('Invalid attribute.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
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
			//$this->request->data['Attribute']['type']
			if ($this->Attribute->save($this->request->data)) {
				$this->Session->setFlash(__('The attribute has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attribute could not be saved. Please, try again.'), 'Manager/Flash/error');
			}
		}
		$types = $this->Attribute->getTypes();
		$this->set(compact('types'));
	}

/**
 * manager_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manager_edit($id = null) {
		if (!$this->Attribute->exists($id)) {
			$this->Session->setFlash(__('Invalid attribute.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Attribute->save($this->request->data)) {
				$this->Session->setFlash(__('The attribute has been updated'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attribute could not be saved. Please, try again.'), 'Manager/Flash/error');
			}
		} else {
			$this->request->data = $this->Attribute->read(null, $id);
		}
		$types = $this->Attribute->getTypes();
		$this->set(compact('types'));
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
		if (!$this->Attribute->exists($id)) {
			$this->Session->setFlash(__('Invalid attribute.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Attribute->delete()) {
			$this->Session->setFlash(__('Attribute deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attribute was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
