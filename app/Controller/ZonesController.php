<?php
App::uses('AppController', 'Controller');
/**
 * Zones Controller
 *
 * @property Zone $Zone
 */
class ZonesController extends AppController
{

	/**
	 * manager_index method
	 *
	 * @return void
	 */
	public function manager_index()
	{
		$this->Zone->recursive = 0;
		$zones = $this->paginate();
		$this->set(compact('zones'));
	}

	/**
	 * manager_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_view($id = null)
	{
		$this->Zone->id = $id;
		if (!$this->Zone->exists()) {
			$this->Session->setFlash(__('Invalid zone.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$zone = $this->Zone->read(null, $id);
		$this->set(compact('zone'));
	}

	/**
	 * manager_add method
	 *
	 * @return void
	 */
	public function manager_add()
	{
		if ($this->request->is('post')) {
			$this->Zone->create();
			if ($this->Zone->save($this->request->data)) {
				$this->Session->setFlash(__('The zone has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zone could not be saved. Please, try again.', 'Manager/Flash/error'));
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
		$this->Zone->id = $id;
		if (!$this->Zone->exists()) {
			$this->Session->setFlash(__('Invalid zone.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Zone->save($this->request->data)) {
				$this->Session->setFlash(__('The zone has been updated.'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zone could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->Zone->read(null, $id);
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
		$this->Zone->id = $id;
		if (!$this->Zone->exists()) {
			$this->Session->setFlash(__('Invalid Zone'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Zone->delete()) {
			$this->Session->setFlash(__('Zone deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Zone was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
