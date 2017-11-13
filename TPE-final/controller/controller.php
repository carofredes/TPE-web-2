<?php
define('HOME', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/');
define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'] .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/login');
define('LOGOUT', 'http://'.$_SERVER['SERVER_NAME'] .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/logout');
define('WALLPAPERS', 'http://'.$_SERVER['SERVER_NAME'] .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/wallpapers');

class Controller {
  protected $view;
  protected $model;
  protected $admin;
  protected $userLoggedin;

	function __construct() {
		session_start();
		$this->admin = false;
		$this->userLoggedin = false;
		if(isset($_SESSION['USER']) && ($_SESSION['USER'] == 'admin')) {
			$this->admin = true;
		}
		if(isset($_SESSION['USER'])) {
			$this->userLoggedin = true;
		}
	}
}

?>
