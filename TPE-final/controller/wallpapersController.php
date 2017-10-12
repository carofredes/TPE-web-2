<?php
include_once('model/wallpapersModel.php');
include_once('view/wallpapersView.php');

class wallpapersController extends Controller{

  function __construct(){
    parent::__construct();
    $this->view = new wallpapersView($this->admin);
    $this->model = new wallpapersModel();
  }

  public function wallpapers(){
    $wallpapers = $this->model->getWallpapers();
    $categories = $this->model->getCategories();
    $this->view->mostrarWallpapers($wallpapers, $categories);
  }

  public function store() {
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
      $this->model->guardarWallpaper($titulo, $categoria);
      header('Location: '.WALLPAPERS);
    }
  }

  public function destroy($params){
    $id_img= $params[0];
    $this->model->borrarWallpaper($id_img);
    header('Location: '.WALLPAPERS);
  }

  public function edit(){
    $id_img = $_POST['id_imgedit'];
    $titulo = $_POST['tituloedit'];
    $categoria = $_POST['categoriaedit'];
    if(isset($_POST['tituloedit']) && !empty($_POST['tituloedit'])){
      $this->model->guardarWallpaperExistente($id_img, $titulo, $categoria);
      header('Location: '.WALLPAPERS);
    }
  }
}
 
?>