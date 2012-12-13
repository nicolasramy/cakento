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
		$order = array('Zone.name' => 'ASC');
		$zones = $this->Country->Zone->find('list', compact('order'));
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
		$order = array('Zone.name' => 'ASC');
		$zones = $this->Country->Zone->find('list', compact('order'));
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
