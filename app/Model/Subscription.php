<?php
App::uses('AppModel', 'Model');

class Subscription extends AppModel {
	public $useTable = 'jolie_sales_subscription';
	public $primaryKey = 'subscription_id';
}
