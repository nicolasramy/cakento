<?php 


/**
* 
*/
class StatesController extends AppController
{
	public $components = array('RequestHandler');

	public function view($id) {
		$state = $this->State->find('list', array(
			'conditions' => array('country_id' => $id)
		));
		
		$this->set(array(
			'state' => $state,
			'_serialize' => array('state')
		));
	}
}