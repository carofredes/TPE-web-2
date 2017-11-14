<?php
define('HOME', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/');
define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'] .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/login');
define('LOGOUT', 'http://'.$_SERVER['SERVER_NAME'] .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/logout');

class Controller {
  protected $view;
  protected $model;
  protected $admin;
  protected $userLoggedin;

	function __construct() {
		session_start();
		$this->admin = false;
		$this->userLoggedin = false;

		if(isset($_SESSION['USER'])) {
			if ($_SESSION['PERMISSIONS'] == 'admin') {
				$this->admin = true;
			}

			$this->userLoggedin = $_SESSION['USER'];
		}
	}
}

?>
