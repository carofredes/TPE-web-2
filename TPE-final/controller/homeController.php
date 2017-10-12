<?php

include_once('view/homeView.php');

class homeController {
  private $view;

  function __construct(){
    $this->view = new homeView();
  }

  public function home(){
  	session_start();
  	$admin = false;
  	if(isset($_SESSION['USER']) && ($_SESSION['USER'] == 'admin')) {
  		$admin = true;
    }
    $this->view->mostrarHome($admin);
  }
}
?>