<?php
App::uses('AppController', 'Controller');
/**
 * Cities Controller
 *
 * @property City $City
 */
class CitiesController extends AppController
{
	/**
	 * manager_index method
	 *
	 * @return void
	 */
	public function manager_index()
	{
		$this->City->recursive = 0;
		$cities = $this->paginate();
		$this->set(compact('cities'));
	}

	/**
	 * manager_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_view($id = null)
	{
		$this->City->id = $id;
		if (!$this->City->exists()) {
			$this->Session->setFlash(__('Invalid city.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$city = $this->City->read(null, $id);
		$this->set(compact('city'));
	}

	/**
	 * manager_add method
	 *
	 * @return void
	 */
	public function manager_add()
	{
		if ($this->request->is('post')) {
			$this->City->create();
			if ($this->City->save($this->request->data)) {
				$this->Session->setFlash(__('The city has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The city could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		}
		$countries = $this->City->Country->find('list');
		$states = $this->City->State->find('list');
		$this->set(compact('countries', 'states'));
	}

	/**
	 * manager_edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_edit($id = null)
	{
		$this->City->id = $id;
		if (!$this->City->exists()) {
			$this->Session->setFlash(__('Invalid city.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->City->save($this->request->data)) {
				$this->Session->setFlash(__('The city has been updated.'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The city could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->City->read(null, $id);
		}
		$countries = $this->City->Country->find('list');
		$states = $this->City->State->find('list');
		$this->set(compact('countries', 'states'));
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
		$this->City->id = $id;
		if (!$this->City->exists()) {
			$this->Session->setFlash(__('Invalid City'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->City->delete()) {
			$this->Session->setFlash(__('City deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('City was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
