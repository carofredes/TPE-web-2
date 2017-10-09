<?php

include_once('view/homeView.php');

class homeController {
  private $view;

  function __construct(){
    $this->view = new homeView();
  }

  public function home(){
    $this->view->mostrarHome();
  }
}
?>