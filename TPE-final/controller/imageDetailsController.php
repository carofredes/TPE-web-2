<?php
include_once('view/imageDetailsView.php');
include_once('model/imageDetailsModel.php');

class imageDetailsController extends Controller{

  function __construct(){
    parent::__construct();
    $this->view = new imageDetailsView($this->admin);
    $this->model = new imageDetailsModel();
  }

  function imageDetails($idImg) {
  	$imagen = $this->model->getImg($idImg[0]);
  	$image = $imagen[0];
    $this->view->mostrarDetalleImg($image);

  }
}
 
?>