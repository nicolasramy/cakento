<?php
App::uses('AppController', 'Controller');

/**
 * Stores Controller
 *
 * @property Store $Store
 */
class StoresController extends AppController {
	
	/**
	 * manager_index method
	 *
	 * @return void
	 */
	public function manager_index()	{
		$this->Store->recursive = 0;
		$this->set('stores', $this->paginate());
	}


	/**
	 * manager_add method
	 *
	 * @return void
	 */
	public function manager_add() {
		if ($this->request->is('post')) {
			$store = $this->request->data;
			
			$zone_id = $this->Store->Country->find('list', array(
				'fields' => 'zone_id',
				'conditions' => array('id' => $store['Store']['country_id'])
			));
			$zone_id = array_values($zone_id);
			$store['Store']['zone_id'] = $zone_id[0];

			if (empty($store['Store']['zone_id'])) {
				throw new NotFoundException(__('Invalid Country'));
			}

			$state_id = $this->Store->State->find('list', array(
				'fields' => 'id',
				'conditions' => array('name LIKE' => $store['Store']['state_id'])
			));
			$state_id = array_values($state_id);
			$store['Store']['state_id'] = $state_id[0];

			$this->Store->create();
			if ($this->Store->save($store)) {
				$this->Session->setFlash(__('The Store has been saved'), 'Manager/Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand could not be saved. Please, try again.'), 'Manager/Flash/error');
			}
			
		}

		$zones = $this->Store->Zone->find('list');
		$countries = $this->Store->Country->find('list');
		$states = $this->Store->State->find('list');
		$this->set(compact('zones', 'countries', 'states'));
	}
}