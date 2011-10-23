<?php
/**
 * AppController Controller
 *
 * @property AppController $AppController
 */
class AppController extends Controller
{

	public $helpers = array('Html', 'Form', 'Js', 'Session', 'Crumb', 'Time');
	public $components = array('Session', 'RequestHandler');

	//var $components = array('Acl', 'Auth', 'Emailvalidator');
}
