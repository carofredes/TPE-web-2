<?php
include_once('model/themesModel.php');
include_once('view/themesView.php');

class themesController extends Controller{

  function __construct(){
    parent::__construct();
    $this->view = new themesView($this->admin);
    $this->model = new themesModel();
  }

  public function themes(){
    $themes = $this->model->getThemes();
    $this->view->mostrarThemes($themes);
  }
}
 
?>