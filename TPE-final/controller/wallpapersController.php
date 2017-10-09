<?php
include_once('model/wallpapersModel.php');
include_once('view/wallpapersView.php');

class wallpapersController {
  private $view;
  private $model;

  function __construct(){
    $this->view = new wallpapersView();
    $this->model = new wallpapersModel();
  }

  public function wallpapers(){
    $wallpapers = $this->model->getWallpapers();
    print_r($wallpapers);
    $this->view->mostrarWallpapers($wallpapers);
  }
}
 
?>