<?php

include_once('view/homeView.php');

class homeController extends Controller {

  function __construct(){
  	parent::__construct();
    $this->view = new homeView($this->admin);
  }

  public function home(){
    $this->view->mostrarHome();
  }
}
?>