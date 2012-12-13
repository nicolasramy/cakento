<?php
App::uses('AppController', 'Controller');
/**
 * Countries Controller
 *
 * @property Country $Country
 */
class CountriesController extends AppController
{

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Country->recursive = 0;
		$countries = $this->paginate();
		$this->set(compact('countries'));
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			$this->Session->setFlash(__('Invalid country.'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$country = $this->Country->read(null, $id);
		$this->set(compact('country'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Country->create();
			if ($this->Country->save($this->request->data)) {
				$this->Session->setFlash(__('The country has been saved'), 'Default/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The country could not be saved. Please, try again.', 'Default/Flash/error'));
				$this->redirect($this->referer());
			}
		}
		$zones = $this->Country->Zone->find('list');
		$this->set(compact('zones'));
	}

	/**
	 * edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			$this->Session->setFlash(__('Invalid country.'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Country->save($this->request->data)) {
				$this->Session->setFlash(__('The country has been updated.'), 'Default/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The country could not be saved. Please, try again.', 'Default/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->Country->read(null, $id);
		}
		$zones = $this->Country->Zone->find('list');
		$this->set(compact('zones'));
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
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			$this->Session->setFlash(__('Invalid Country'), 'Default/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Country->delete()) {
			$this->Session->setFlash(__('Country deleted'), 'Default/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Country was not deleted'), 'Default/Flash/error');
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * manager_index method
	 *
	 * @return void
	 */
	public function manager_index()
	{
		$this->Country->recursive = 0;
		$countries = $this->paginate();
		$this->set(compact('countries'));
	}

	/**
	 * manager_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_view($id = null)
	{
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			$this->Session->setFlash(__('Invalid country.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$country = $this->Country->read(null, $id);
		$this->set(compact('country'));
	}

	/**
	 * manager_add method
	 *
	 * @return void
	 */
	public function manager_add()
	{
		if ($this->request->is('post')) {
			$this->Country->create();
			if ($this->Country->save($this->request->data)) {
				$this->Session->setFlash(__('The country has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The country could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		}
		$zones = $this->Country->Zone->find('list');
		$this->set(compact('zones'));
	}

	/**
	 * manager_edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_edit($id = null)
	{
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			$this->Session->setFlash(__('Invalid country.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Country->save($this->request->data)) {
				$this->Session->setFlash(__('The country has been updated.'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The country could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->Country->read(null, $id);
		}
		$zones = $this->Country->Zone->find('list');
		$this->set(compact('zones'));
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
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			$this->Session->setFlash(__('Invalid Country'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Country->delete()) {
			$this->Session->setFlash(__('Country deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Country was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
