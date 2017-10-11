<?php
include_once('view/imageDetailsView.php');
include_once('model/imageDetailsModel.php');

class imageDetailsController {
  private $view;
  private $model;

  function __construct(){
    $this->view = new imageDetailsView();
    $this->model = new imageDetailsModel();
  }

  function imageDetails($idImg) {
  	$imagen = $this->model->getImg($idImg[0]);
  	$image = $imagen[0];
    $this->view->mostrarDetalleImg($image);

  }
}
 
?>