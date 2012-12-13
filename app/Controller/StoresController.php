<?php
App::uses('AppController', 'Controller');
/**
 * Stores Controller
 *
 * @property Store $Store
 */
class StoresController extends AppController
{

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Store->recursive = 0;
		$stores = $this->paginate();
		$this->set(compact('stores'));
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		$this->Store->id = $id;
		if (!$this->Store->exists()) {
			$this->Session->setFlash(__('Invalid store.'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$store = $this->Store->read(null, $id);
		$this->set(compact('store'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Store->create();
			if ($this->Store->save($this->request->data)) {
				$this->Session->setFlash(__('The store has been saved'), 'Default/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', 'Default/Flash/error'));
				$this->redirect($this->referer());
			}
		}
		$zones = $this->Store->Zone->find('list');
		$countries = $this->Store->Country->find('list');
		$states = $this->Store->State->find('list');
		$this->set(compact('zones', 'countries', 'states'));
	}

	/**
	 * edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		$this->Store->id = $id;
		if (!$this->Store->exists()) {
			$this->Session->setFlash(__('Invalid store.'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Store->save($this->request->data)) {
				$this->Session->setFlash(__('The store has been updated.'), 'Default/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', 'Default/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->Store->read(null, $id);
		}
		$zones = $this->Store->Zone->find('list');
		$countries = $this->Store->Country->find('list');
		$states = $this->Store->State->find('list');
		$this->set(compact('zones', 'countries', 'states'));
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
		$this->Store->id = $id;
		if (!$this->Store->exists()) {
			$this->Session->setFlash(__('Invalid Store'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Store->delete()) {
			$this->Session->setFlash(__('Store deleted'), 'Default/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store was not deleted'), 'Default/Flash/error');
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * manager_index method
	 *
	 * @return void
	 */
	public function manager_index()
	{
		$this->Store->recursive = 0;
		$stores = $this->paginate();
		$this->set(compact('stores'));
	}

	/**
	 * manager_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_view($id = null)
	{
		$this->Store->id = $id;
		if (!$this->Store->exists()) {
			$this->Session->setFlash(__('Invalid store.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$store = $this->Store->read(null, $id);
		$this->set(compact('store'));
	}

	/**
	 * manager_add method
	 *
	 * @return void
	 */
	public function manager_add()
	{
		if ($this->request->is('post')) {
			$this->Store->create();
			if ($this->Store->save($this->request->data)) {
				$this->Session->setFlash(__('The store has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		}
		$zones = $this->Store->Zone->find('list');
		$countries = $this->Store->Country->find('list');
		$states = $this->Store->State->find('list');
		$this->set(compact('zones', 'countries', 'states'));
	}

	/**
	 * manager_edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_edit($id = null)
	{
		$this->Store->id = $id;
		if (!$this->Store->exists()) {
			$this->Session->setFlash(__('Invalid store.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Store->save($this->request->data)) {
				$this->Session->setFlash(__('The store has been updated.'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->Store->read(null, $id);
		}
		$zones = $this->Store->Zone->find('list');
		$countries = $this->Store->Country->find('list');
		$states = $this->Store->State->find('list');
		$this->set(compact('zones', 'countries', 'states'));
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
		$this->Store->id = $id;
		if (!$this->Store->exists()) {
			$this->Session->setFlash(__('Invalid Store'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Store->delete()) {
			$this->Session->setFlash(__('Store deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
