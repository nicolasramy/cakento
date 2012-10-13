<?php
App::uses('AppModel', 'Model');
class StoreConfig extends AppModel {
	public $useTable = 'core_config_data';
	public $primaryKey = 'config_id';

	/**
	 * fromPath
	 * @param  path
	 * @return string
	 */
	public function getFromPath($path = null) {
		$conditions = array('StoreConfig.path' => $path);
		$storeConfig = $this->find('first', compact('conditions'));
		return $storeConfig['StoreConfig']['value'];
	}
}
