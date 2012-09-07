<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class SubscriptionDetail extends AppModel {

/**
 * Display field
 *
 * @var string
 */
    public $useTable = 'jolie_sales_subscription_detail';
    public $primaryKey = 'detail_id';
}
