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
    $this->view->mostrarWallpapers($wallpapers);
  }

  public function store() {
    $titulo = $_POST['titulo'];
    $categoria = $_POST['taskOption'];
    if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
      if($this->tienePalabrasProhibidas($titulo)){
        $this->view->errorCrear("El titulo tiene palabras prohibidas", $titulo, $descripcion, $completada);
      }
      else{
        $this->model->guardarTarea($titulo, $descripcion, $completada);
        header('Location: '.HOME);
      }
    }
    else{
      $this->view->errorCrear("El campo titulo es requerido", $titulo, $descripcion, $completada);
    }
  }

  public function destroy($params){
    $id_tarea = $params[0];
    $this->model->borrarTarea($id_tarea);
    header('Location: '.HOME);
  }

}
 
?>