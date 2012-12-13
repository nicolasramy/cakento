<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController
{

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->User->recursive = 0;
		$users = $this->paginate();
		$this->set(compact('users'));
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash(__('Invalid user.'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$user = $this->User->read(null, $id);
		$this->set(compact('user'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'Default/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', 'Default/Flash/error'));
				$this->redirect($this->referer());
			}
		}
		$userGroups = $this->User->UserGroup->find('list');
		$this->set(compact('userGroups'));
	}

	/**
	 * edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash(__('Invalid user.'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been updated.'), 'Default/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', 'Default/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$userGroups = $this->User->UserGroup->find('list');
		$this->set(compact('userGroups'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash(__('Invalid User'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'), 'Default/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'), 'Default/Flash/error');
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * manager_index method
	 *
	 * @return void
	 */
	public function manager_index()
	{
		$this->User->recursive = 0;
		$users = $this->paginate();
		$this->set(compact('users'));
	}

	/**
	 * manager_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_view($id = null)
	{
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash(__('Invalid user.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$user = $this->User->read(null, $id);
		$this->set(compact('user'));
	}

	/**
	 * manager_add method
	 *
	 * @return void
	 */
	public function manager_add()
	{
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		}
		$userGroups = $this->User->UserGroup->find('list');
		$this->set(compact('userGroups'));
	}

	/**
	 * manager_edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_edit($id = null)
	{
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash(__('Invalid user.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been updated.'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$userGroups = $this->User->UserGroup->find('list');
		$this->set(compact('userGroups'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash(__('Invalid User'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
