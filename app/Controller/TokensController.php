<?php
App::uses('AppController', 'Controller');
/**
 * Tokens Controller
 *
 * @property Token $Token
 */
class TokensController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Token->recursive = 0;
		$this->set('tokens', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Token->id = $id;
		if (!$this->Token->exists()) {
			throw new NotFoundException(__('Invalid token'));
		}
		$this->set('token', $this->Token->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Token->create();
			if ($this->Token->save($this->request->data)) {
				$this->Session->setFlash(__('The token has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The token could not be saved. Please, try again.'));
			}
		}
		$users = $this->Token->User->find('list');
		$projects = $this->Token->Project->find('list');
		$tasks = $this->Token->Task->find('list');
		$this->set(compact('users', 'projects', 'tasks'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Token->id = $id;
		if (!$this->Token->exists()) {
			throw new NotFoundException(__('Invalid token'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Token->save($this->request->data)) {
				$this->Session->setFlash(__('The token has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The token could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Token->read(null, $id);
		}
		$users = $this->Token->User->find('list');
		$projects = $this->Token->Project->find('list');
		$tasks = $this->Token->Task->find('list');
		$this->set(compact('users', 'projects', 'tasks'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Token->id = $id;
		if (!$this->Token->exists()) {
			throw new NotFoundException(__('Invalid token'));
		}
		if ($this->Token->delete()) {
			$this->Session->setFlash(__('Token deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Token was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
