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
      header('Location: '.HOME);
    }
  }

  public function destroy($params){
    $id_tarea = $params[0];
    $this->model->borrarTarea($id_tarea);
    header('Location: '.HOME);
  }

}
 
?>