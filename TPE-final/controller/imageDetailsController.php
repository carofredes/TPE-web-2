<?php
include_once('view/imageDetailsView.php');

class imageDetailsController {
  private $view;

  function __construct(){
    $this->view = new imageDetailsView();
  }

  function imageDetails($idImg) {
    $this->view->mostrarDetalleImg($idImg);
  }
}
 
?>