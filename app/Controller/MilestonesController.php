<?php
App::uses('AppController', 'Controller');
/**
 * Milestones Controller
 *
 * @property Milestone $Milestone
 */
class MilestonesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Milestone->recursive = 0;
		$this->set('milestones', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Milestone->id = $id;
		if (!$this->Milestone->exists()) {
			throw new NotFoundException(__('Invalid milestone'));
		}
		$this->set('milestone', $this->Milestone->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Milestone->create();
			if ($this->Milestone->save($this->request->data)) {
				$this->Session->setFlash(__('The milestone has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The milestone could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Milestone->id = $id;
		if (!$this->Milestone->exists()) {
			throw new NotFoundException(__('Invalid milestone'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Milestone->save($this->request->data)) {
				$this->Session->setFlash(__('The milestone has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The milestone could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Milestone->read(null, $id);
		}
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
		$this->Milestone->id = $id;
		if (!$this->Milestone->exists()) {
			throw new NotFoundException(__('Invalid milestone'));
		}
		if ($this->Milestone->delete()) {
			$this->Session->setFlash(__('Milestone deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Milestone was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
