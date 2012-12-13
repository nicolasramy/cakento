<?php
App::uses('AppController', 'Controller');
/**
 * Warehouses Controller
 *
 * @property Warehouse $Warehouse
 */
class WarehousesController extends AppController
{

	/**
	 * manager_index method
	 *
	 * @return void
	 */
	public function manager_index()
	{
		$this->Warehouse->recursive = 0;
		$warehouses = $this->paginate();
		$this->set(compact('warehouses'));
	}

	/**
	 * manager_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_view($id = null)
	{
		$this->Warehouse->id = $id;
		if (!$this->Warehouse->exists()) {
			$this->Session->setFlash(__('Invalid warehouse.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$warehouse = $this->Warehouse->read(null, $id);
		$this->set(compact('warehouse'));
	}

	/**
	 * manager_add method
	 *
	 * @return void
	 */
	public function manager_add()
	{
		if ($this->request->is('post')) {
			$this->Warehouse->create();
			if ($this->Warehouse->save($this->request->data)) {
				$this->Session->setFlash(__('The warehouse has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The warehouse could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		}
		$stores = $this->Warehouse->Store->find('list');
		$this->set(compact('stores'));
	}

	/**
	 * manager_edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_edit($id = null)
	{
		$this->Warehouse->id = $id;
		if (!$this->Warehouse->exists()) {
			$this->Session->setFlash(__('Invalid warehouse.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Warehouse->save($this->request->data)) {
				$this->Session->setFlash(__('The warehouse has been updated.'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The warehouse could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->Warehouse->read(null, $id);
		}
		$stores = $this->Warehouse->Store->find('list');
		$this->set(compact('stores'));
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
		$this->Warehouse->id = $id;
		if (!$this->Warehouse->exists()) {
			$this->Session->setFlash(__('Invalid Warehouse'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Warehouse->delete()) {
			$this->Session->setFlash(__('Warehouse deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Warehouse was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
