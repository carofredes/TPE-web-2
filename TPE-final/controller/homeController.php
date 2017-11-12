<?php

include_once('view/homeView.php');

class homeController extends Controller {

  function __construct(){
  	parent::__construct();
    $this->view = new homeView($this->admin, $this->userLoggedin);
  }

  public function home(){
    $this->view->mostrarHome();
  }

  public function show(){
    $this->view->mostrarHomeContent();
  }
}
?>