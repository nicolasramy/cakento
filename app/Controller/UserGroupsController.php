<?php
App::uses('AppController', 'Controller');
/**
 * UserGroups Controller
 *
 * @property UserGroup $UserGroup
 */
class UserGroupsController extends AppController
{
/**
 * manager_index method
 *
 * @return void
 */
	public function manager_index()
	{
		$this->UserGroup->recursive = 0;
		$userGroups = $this->paginate();
		$this->set(compact('userGroups'));
	}

/**
 * manager_view method
 *
 * @param string $id
 * @return void
 */
	public function manager_view($id = null)
	{
		$this->UserGroup->id = $id;
		if (!$this->UserGroup->exists()) {
			$this->Session->setFlash(__('Invalid user group.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$userGroup = $this->UserGroup->read(null, $id);
		$this->set(compact('userGroup'));
	}

/**
 * manager_add method
 *
 * @return void
 */
	public function manager_add()
	{
		if ($this->request->is('post')) {
			$this->UserGroup->create();
			if ($this->UserGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The user group has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user group could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		}
	}

/**
 * manager_edit method
 *
 * @param string $id
 * @return void
 */
	public function manager_edit($id = null)
	{
		$this->UserGroup->id = $id;
		if (!$this->UserGroup->exists()) {
			$this->Session->setFlash(__('Invalid user group.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The user group has been updated.'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user group could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->UserGroup->read(null, $id);
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
	public function manager_delete($id = null)
	{
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->UserGroup->id = $id;
		if (!$this->UserGroup->exists()) {
			$this->Session->setFlash(__('Invalid User group'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->UserGroup->delete()) {
			$this->Session->setFlash(__('User group deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User group was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
