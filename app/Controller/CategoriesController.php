<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 */
class CategoriesController extends AppController {


	public $helpers = array('Html', 'Tree');
/**
 * manager_index method
 *
 * @return void
 */
	public function manager_index() {

		$categories = $this->Category->find('all', array('order' => 'lft ASC'));
		$this->set('categories', $categories);
	}

/**
 * manager_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manager_view($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->set('category', $this->Category->read(null, $id));
	}

/**
 * manager_add method
 *
 * @return void
 */
	public function manager_add() {

		if ($this->request-is('post')) {

			if (empty($this->request->data['Category']['slug'])) {
				$this->request->data['Category']['slug'] = strtolower(str_replace(' ', '-', $this->request->data['Category']['name']));
			}

			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The Category has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'), 'Manager/Flash/error');
			}

		}

		$this->set('parents', $this->Category->generateTreeList());
	}

/**
 * manager_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manager_edit($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid Category'));
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
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->Category->removeFromTree($id)) {
			$this->Session->setFlash(__('Category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * manager_moveUp method
 * @throws NotFoundException
 * @param string $id
 * @return void 
 */
	public function manager_moveUp($id=null) {

		if (!$id) {
			throw new NotFoundException(__('Invalid category'));
		}

		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}

		if ($this->Category->moveUp($id, 1)) {
			$this->Session->setFlash(__('The Categorty has been move up'), 'Manager/Flash/information');
			$this->redirect(array('action' => 'index'));
		} 

		$this->Session->setFlash(__('Category was not move up'), 'Manager/Flash/error');
	}

/**
 * manager_moveUp method
 * @throws NotFoundException
 * @param string $id
 * @return void 
 */
	public function manager_moveDown($id=null) {

		if (!$id) {
			throw new NotFoundException(__('Invalid category'));
		}

		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}

		if ($this->Category->moveDown($id, 1)) {
			$this->Session->setFlash(__('The Categorty has been move down'), 'Manager/Flash/information');
			$this->redirect(array('action' => 'index'));
		} 

		$this->Session->setFlash(__('Category was not move down'), 'Manager/Flash/error');
	}
}
