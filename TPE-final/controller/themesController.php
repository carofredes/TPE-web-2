<?php
include_once('model/themesModel.php');
include_once('view/themesView.php');

class themesController extends Controller{

  function __construct(){
    parent::__construct();
    $this->view = new themesView($this->admin, $this->userLoggedin);
    $this->model = new themesModel();
  }

  public function themes(){
    $themes = $this->model->getThemes();
    $categories = $this->model->getCategories();
    $this->view->mostrarThemes($themes,$categories);
  }

  public function store() {
    $titulo = $_POST['titulo'];
    if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
      $this->model->guardarThemes($titulo);
      header('Location: '.THEMES);
    }
  }

  public function destroy($params){
    $id_img= $params[0];
    $this->model->borrarThemes($id_img);
    header('Location: '.THEMES);
  }

  public function edit(){
    $id_img = $_POST['id_imgedit'];
    $titulo = $_POST['tituloedit'];
    $categoria = $_POST['categoriaedit'];
    if(isset($_POST['tituloedit']) && !empty($_POST['tituloedit'])){
      $this->model->guardarWallpaperExistente($id_img, $titulo, $categoria);
      header('Location: '.THEMES);
    }
  }
  
  public function themeImages($params){
    $id_cat= $params[0];
    $themesImages = $this->model->getThemesImages($id_cat);
    $categorieName = $this->model->getCategorieName($id_cat);
    $this->view->mostrarDetalleImg($themesImages,$categorieName);
  }
  

}
 
?>