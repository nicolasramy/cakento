<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array(
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email'),
                    'scope' => array('User.archived' => 0)
                )
            ),
            'authorize' => 'Controller',
            'loginAction' => array('controller' => 'users', 'action' => 'login', 'manager' => false),
            'loginRedirect' => array('controller' => 'dashboard', 'action' => 'index', 'manager' => true),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'logout', 'manager' => false)
        ),
        'Session'
    );

    /**
     * beforeFilter
     * @param
     * @return void
     */
    public function beforeFilter() {
    }

    /**
     * Check user authorization
     * @param object $user
     * @return boolean
     */
    public function isAuthorized($user = null) {
        // Any registered user can access public functions
        if ($this->Auth->loggedIn()) {
            $this->layout = 'manager';
            return true;
        }

        return false;
    }
}
