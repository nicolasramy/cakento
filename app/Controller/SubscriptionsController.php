<?php
App::uses('AppController', 'Controller');
/**
 * Subscriptions Controller
 *
 * @property Subscription $Subscription
 */
class SubscriptionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subscription->recursive = 0;
		$this->set('subscriptions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subscription->id = $id;
		if (!$this->Subscription->exists()) {
			throw new NotFoundException(__('Invalid subscription'));
		}
		$this->set('subscription', $this->Subscription->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subscription->create();
			if ($this->Subscription->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Subscription->Customer->find('list');
		$orders = $this->Subscription->Order->find('list');
		$products = $this->Subscription->Product->find('list');
		$recurringProfiles = $this->Subscription->RecurringProfile->find('list');
		$details = $this->Subscription->Detail->find('list');
		$detailShipments = $this->Subscription->DetailShipment->find('list');
		$this->set(compact('customers', 'orders', 'products', 'recurringProfiles', 'details', 'detailShipments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Subscription->id = $id;
		if (!$this->Subscription->exists()) {
			throw new NotFoundException(__('Invalid subscription'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subscription->save($this->request->data)) {
				$this->Session->setFlash(__('The jolie sales subscription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jolie sales subscription could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subscription->read(null, $id);
		}
		$customers = $this->Subscription->Customer->find('list');
		$orders = $this->Subscription->Order->find('list');
		$products = $this->Subscription->Product->find('list');
		$recurringProfiles = $this->Subscription->RecurringProfile->find('list');
		$details = $this->Subscription->Detail->find('list');
		$detailShipments = $this->Subscription->DetailShipment->find('list');
		$this->set(compact('customers', 'orders', 'products', 'recurringProfiles', 'details', 'detailShipments'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Subscription->id = $id;
		if (!$this->Subscription->exists()) {
			throw new NotFoundException(__('Invalid jolie sales subscription'));
		}
		if ($this->Subscription->delete()) {
			$this->Session->setFlash(__('Jolie sales subscription deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Jolie sales subscription was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
