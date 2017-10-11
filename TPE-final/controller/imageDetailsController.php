<?php
include_once('view/imageDetailsView.php');

class imageDetailsController {
  private $view;

  function __construct(){
    $this->view = new imageDetailsView();
    $this->model = new imgDetailsModel();
  }

  function imageDetails($idImg) {
  	$idImg = $_POST['palabra'];
    $this->view->mostrarDetalleImg($idImg);

  }
}
 
?>