<?php
App::uses('AppController', 'Controller');
/**
 * States Controller
 *
 * @property State $State
 */
class StatesController extends AppController
{

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->State->recursive = 0;
		$states = $this->paginate();
		$this->set(compact('states'));
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		$this->State->id = $id;
		if (!$this->State->exists()) {
			$this->Session->setFlash(__('Invalid state.'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$state = $this->State->read(null, $id);
		$this->set(compact('state'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->State->create();
			if ($this->State->save($this->request->data)) {
				$this->Session->setFlash(__('The state has been saved'), 'Default/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state could not be saved. Please, try again.', 'Default/Flash/error'));
				$this->redirect($this->referer());
			}
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

	/**
	 * edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		$this->State->id = $id;
		if (!$this->State->exists()) {
			$this->Session->setFlash(__('Invalid state.'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->State->save($this->request->data)) {
				$this->Session->setFlash(__('The state has been updated.'), 'Default/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state could not be saved. Please, try again.', 'Default/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->State->read(null, $id);
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

	/**
	 * delete method
	 *
	 * @throws MethodNotAllowedException
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null)
	{
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->State->id = $id;
		if (!$this->State->exists()) {
			$this->Session->setFlash(__('Invalid State'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->State->delete()) {
			$this->Session->setFlash(__('State deleted'), 'Default/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('State was not deleted'), 'Default/Flash/error');
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * manager_index method
	 *
	 * @return void
	 */
	public function manager_index()
	{
		$this->State->recursive = 0;
		$states = $this->paginate();
		$this->set(compact('states'));
	}

	/**
	 * manager_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_view($id = null)
	{
		$this->State->id = $id;
		if (!$this->State->exists()) {
			$this->Session->setFlash(__('Invalid state.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$state = $this->State->read(null, $id);
		$this->set(compact('state'));
	}

	/**
	 * manager_add method
	 *
	 * @return void
	 */
	public function manager_add()
	{
		if ($this->request->is('post')) {
			$this->State->create();
			if ($this->State->save($this->request->data)) {
				$this->Session->setFlash(__('The state has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

	/**
	 * manager_edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_edit($id = null)
	{
		$this->State->id = $id;
		if (!$this->State->exists()) {
			$this->Session->setFlash(__('Invalid state.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->State->save($this->request->data)) {
				$this->Session->setFlash(__('The state has been updated.'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->State->read(null, $id);
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

	/**
	 * manager_delete method
	 *
	 * @throws MethodNotAllowedException
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function manager_delete($id = null)
	{
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->State->id = $id;
		if (!$this->State->exists()) {
			$this->Session->setFlash(__('Invalid State'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->State->delete()) {
			$this->Session->setFlash(__('State deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('State was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
