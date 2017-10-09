<?php
include_once('model/themesModel.php');
include_once('view/themesView.php');

class themesController {
  private $view;
  private $model;

  function __construct(){
    $this->view = new themesView();
    $this->model = new themesModel();
  }

  public function themes(){
    $themes = $this->model->getThemes();
    $this->view->mostrarThemes($themes);
  }
}
 
?>