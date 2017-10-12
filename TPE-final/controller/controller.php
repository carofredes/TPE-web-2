<?php
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');
define('LOGOUT', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/logout');
define('WALLPAPERS', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/wallpapers');
define('THEMES', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/themes');

class Controller {
  protected $view;
  protected $model;
  protected $admin;

	function __construct() {
		session_start();
		$this->admin = false;
		if(isset($_SESSION['USER']) && ($_SESSION['USER'] == 'admin')) {
			$this->admin = true;
		}
	}
}

?>
