<?php
App::uses('AppController', 'Controller');
/**
 * PaymentGateways Controller
 *
 * @property PaymentGateway $PaymentGateway
 */
class PaymentGatewaysController extends AppController
{
	/**
	 * manager_index method
	 *
	 * @return void
	 */
	public function manager_index()
	{
		$this->PaymentGateway->recursive = 0;
		$paymentGateways = $this->paginate();
		$this->set(compact('paymentGateways'));
	}

	/**
	 * manager_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function manager_view($id = null)
	{
		$this->PaymentGateway->id = $id;
		if (!$this->PaymentGateway->exists()) {
			$this->Session->setFlash(__('Invalid payment gateway.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		$paymentGateway = $this->PaymentGateway->read(null, $id);
		$this->set(compact('paymentGateway'));
	}

	/**
	 * manager_add method
	 *
	 * @return void
	 */
	public function manager_add()
	{
		if ($this->request->is('post')) {
			$this->PaymentGateway->create();
			if ($this->PaymentGateway->save($this->request->data)) {
				$this->Session->setFlash(__('The payment gateway has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment gateway could not be saved. Please, try again.', 'Manager/Flash/error'));
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
		$this->PaymentGateway->id = $id;
		if (!$this->PaymentGateway->exists()) {
			$this->Session->setFlash(__('Invalid payment gateway.'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PaymentGateway->save($this->request->data)) {
				$this->Session->setFlash(__('The payment gateway has been updated.'), 'Manager/Flash/information');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment gateway could not be saved. Please, try again.', 'Manager/Flash/error'));
				$this->redirect($this->referer());
			}
		} else {
			$this->request->data = $this->PaymentGateway->read(null, $id);
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
		$this->PaymentGateway->id = $id;
		if (!$this->PaymentGateway->exists()) {
			$this->Session->setFlash(__('Invalid Payment gateway'), 'Manager/Flash/error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->PaymentGateway->delete()) {
			$this->Session->setFlash(__('Payment gateway deleted'), 'Manager/Flash/default');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Payment gateway was not deleted'), 'Manager/Flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
