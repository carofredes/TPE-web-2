<?php
include_once 'model/wallpapersModel.php';
include_once 'view/wallpapersView.php';

class wallpapersController extends Controller {
    protected $viewDetails;

    public function __construct() {
        parent::__construct();
        $this->view  = new wallpapersView($this->admin, $this->userLoggedin);
        $this->model = new wallpapersModel();
    }

    public function wallpapers() {
        $wallpapers = $this->model->getWallpapers();
        $categories = $this->model->getCategories();
        $this->view->mostrarWallpapers($wallpapers, $categories);
    }

    public function store() {
        if ($this->admin) {
            $titulo    = $_POST['titulo'];
            $categoria = $_POST['categoria'];
            if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                $this->model->guardarWallpaper($titulo, $categoria);
            }
            header('Location: ' . HOME);
        } else {
            header('Location: ' . LOGIN);
        }
    }

    private function sonJPG($imagenesTipos) {
        foreach ($imagenesTipos as $tipo) {
            if ($tipo != 'image/jpeg') {
                return false;
            }
        }
        return true;
    }

    public function storeRelated() {
        if ($this->admin) {
            $nombre             = $_POST['nombre'];
            $imagen_relacionada = $_POST['id-imagen-relacionada'];
            if ((isset($_FILES['imagenes']['type']) && !empty($_FILES['imagenes']['type'])) && (isset($_POST['nombre']) && !empty($_POST['nombre']))) {
                $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
                if ($this->sonJPG($_FILES['imagenes']['type'])) {
                    $this->model->guardarWallpaperRelated($nombre, $imagen_relacionada, $rutaTempImagenes);
                }
                header('Location: ' . HOME);
            } else {
                header('Location: ' . HOME);
            }
        } else {
            header('Location: ' . LOGIN);
        }
    }

    public function destroy($params) {
        if ($this->admin) {
            if (isset($params[0]) && !empty($params[0])) {
                $id_img = $params[0];
                $this->model->borrarWallpaper($id_img);
            }
            header('Location: ' . HOME);
        } else {
            header('Location: ' . LOGIN);
        }
    }

    public function destroyRelated($params) {
        if ($this->admin) {
            if (!empty($_POST['images-to-delete'])) {
                $rutaTempImagenes = [];
                foreach ($_POST['images-to-delete'] as $check) {
                    array_push($rutaTempImagenes, $check);
                }
                $this->model->borrarWallpaperRelacionado($rutaTempImagenes);
            }
            header('Location: ' . HOME);
        } else {
            header('Location: ' . LOGIN);
        }
    }

    public function edit() {
        if ($this->admin) {
            $id_img    = $_POST['id_imgedit'];
            $titulo    = $_POST['tituloedit'];
            $categoria = $_POST['categoriaedit'];
            if (isset($_POST['tituloedit']) && !empty($_POST['tituloedit'])) {
                $this->model->guardarWallpaperExistente($id_img, $titulo, $categoria);
            }
            header('Location: ' . HOME);
        } else {
            header('Location: ' . LOGIN);
        }
    }

    public function imageDetails($idImg) {
        if (isset($idImg[0]) && !empty($idImg[0])) {
            $imagen                = $this->model->getImg($idImg[0]);
            $image                 = $imagen[0];
            $imagenes_relacionadas = $this->model->getRelatedImgs($idImg[0]);
            $this->view->mostrarDetalleImg($image, $imagenes_relacionadas);
        } else {
            header('Location: ' . HOME);
        }
    }

    public function showResults($params) {
        if (isset($params[0]) && !empty($params[0])) {
            $id_cat        = $params[0];
            $resultImages  = $this->model->getCategorieImages($id_cat);
            $categorieName = $this->model->getCategorieName($id_cat);
            $this->view->mostrarWallpapersPorCategoria($resultImages, $categorieName);
        } else {
            header('Location: ' . HOME);
        }
    }

    public function storeCategorie() {
        if ($this->admin) {
            $titulo = $_POST['titulo'];
            if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                $this->model->guardarCategoria($titulo);
            }
            header('Location: ' . HOME);
        } else {
            header('Location: ' . LOGIN);
        }
    }

    public function destroyCategorie($params) {
        if ($this->admin) {
            if (!empty($params[0])) {
                $id_cat = $params[0];
                $this->model->borrarCategoria($id_cat);
            }
            header('Location: ' . HOME);
        } else {
            header('Location: ' . LOGIN);
        }
    }

}
