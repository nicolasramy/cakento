<?php
App::uses('AppController', 'Controller');
/**
 * Brands Controller
 *
 * @property Brand $Brand
 */
class BrandsController extends AppController {

	// Parameters
	public $uses = array(
		'Brand',
		'Store'
	);

	// Public actions
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->Brand->recursive = 0;
		$this->set('brands', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->Brand->exists($id)) {
			throw new NotFoundException(__('Invalid brand'));
		}
		$brand = $this->Brand->read(null, $id);
		$this->set(compact('brand'));
	}

	// Manager Actions
	/**
	 * manager_index method
	 *
	 * @return void
	 */
	public function manager_index() {
		if ($this->request->is('post') || $this->request->is('put')) {
			if (isset($this->request->data)) {
				foreach($this->request->data['Brand'] as $key => $id) {

					// Perform Action
					if ($id && $key != 'action' && $this->Brand->exists($id)) {
						switch($this->request->data['Brand']['action']) {
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
						$this->Brand->read(null, $id);
						$this->Brand->saveField($field, $value);
					}
				}
				$this->redirect($this->referer());
			}
        }

		$this->Brand->recursive = 0;
		$this->set('brands', $this->paginate());
	}

	/**
	 * manager_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function manager_view($id = null) {
		if (!$this->Brand->exists($id)) {
			throw new NotFoundException(__('Invalid brand'));
		}
		$this->set('brand', $this->Brand->read(null, $id));
	}

	/**
	 * manager_add method
	 *
	 * @return void
	 */
	public function manager_add() {
		if ($this->request->is('post')) {

			if (empty($this->request->data['Brand']['slug'])) {
				$this->request->data['Brand']['slug'] = strtolower(str_replace(' ', '-', $this->request->data['Brand']['name']));
			}

			$this->Brand->create();
			if ($this->Brand->save($this->request->data)) {
				$this->Session->setFlash(__('The brand has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand could not be saved. Please, try again.'), 'Manager/Flash/error');
			}
		}
		$stores = $this->Store->find('list');
		$this->set(compact('stores'));
	}

	/**
	 * manager_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function manager_edit($id = null) {
		if (!$this->Brand->exists($id)) {
			throw new NotFoundException(__('Invalid brand'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Brand->save($this->request->data)) {
				$this->Session->setFlash(__('The brand has been saved'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand could not be saved. Please, try again.'), 'Manager/Flash/error');
			}
		} else {
			$this->request->data = $this->Brand->read(null, $id);
		}
		$stores = $this->Store->find('list');
		$this->set(compact('stores'));
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
			die();
			throw new MethodNotAllowedException();
		}
		$this->Brand->id = $id;
		if (!$this->ProductType->exists()) {
			die();
			$this->Session->setFlash(__('Invalid brand.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Brand->delete()) {
			$this->Session->setFlash(__('Brand deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Brand was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
