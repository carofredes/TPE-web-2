<?php
include_once('model/wallpapersModel.php');
include_once('view/wallpapersView.php');

class wallpapersController extends Controller{
  protected $viewDetails;
  
  function __construct(){
    parent::__construct();
    $this->view = new wallpapersView($this->admin, $this->userLoggedin);
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

  private function sonJPG($imagenesTipos){
      foreach ($imagenesTipos as $tipo) {
        if($tipo != 'image/jpeg') {
          return false;
        }
      }
      return true;
  }

  public function storeRelated() {
    $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
    $nombre = $_POST['nombre'];
    $imagen_relacionada = $_POST['id-imagen-relacionada'];

    if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
      if($this->sonJPG($_FILES['imagenes']['type'])) {
        $this->model->guardarWallpaperRelated($nombre, $imagen_relacionada,$rutaTempImagenes);
        header('Location: '.HOME);
      }
      else{
        $this->view->errorCrear("Las imagenes tienen que ser JPG.", $nombre,  $imagen_relacionada);
      }   
    }
    else{
      $this->view->errorCrear("El campo nombre es requerido", $nombre,  $imagen_relacionada);
    }
  }

  public function destroy($params){
    $id_img= $params[0];
    $this->model->borrarWallpaper($id_img);
    header('Location: '.HOME);
  }

  public function destroyRelated($params){
    if(!empty($_POST['images-to-delete'])) {
      $rutaTempImagenes = [];
      foreach($_POST['images-to-delete'] as $check) {
        array_push($rutaTempImagenes, $check);
      }
      $this->model->borrarWallpaperRelacionado($rutaTempImagenes);
    }    
    header('Location: '.HOME);
  }
  

  public function edit(){
    $id_img = $_POST['id_imgedit'];
    $titulo = $_POST['tituloedit'];
    $categoria = $_POST['categoriaedit'];
    if(isset($_POST['tituloedit']) && !empty($_POST['tituloedit'])){
      $this->model->guardarWallpaperExistente($id_img, $titulo, $categoria);
      header('Location: '.HOME);
    }
  }

  public function imageDetails($idImg) {
    $imagen = $this->model->getImg($idImg[0]);
    $image = $imagen[0];
    $imagenes_relacionadas = $this->model->getRelatedImgs($idImg[0]);
    $this->view->mostrarDetalleImg($image, $imagenes_relacionadas);
  }

  public function showResults($params){
    $id_cat= $params[0];
    $resultImages = $this->model->getCategorieImages($id_cat);
    $categorieName = $this->model->getCategorieName($id_cat);
    $this->view->mostrarWallpapersPorCategoria($resultImages,$categorieName);
  }

  public function storeCategorie() {
    $titulo = $_POST['titulo'];
    if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
      $this->model->guardarCategoria($titulo);
      header('Location: '.WALLPAPERS);
    }
  }

  public function destroyCategorie($params){
    $id_cat= $params[0];
    $this->model->borrarCategoria($id_cat);
    header('Location: '.WALLPAPERS);
  }

  public function editCategorie(){
    /* todo */
  }
}
 
?>