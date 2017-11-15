<?php

require_once 'model/comentarioModel.php';
require_once 'securedApiController.php';

class comentarioApiController extends securedApiController {
    protected $model;
    protected $captchaVista;
    protected $captchaServer;

    public function __construct() {
        parent::__construct();
        $this->model = new comentarioModel();
    }

    private function genCaptcha(){
        //global $captchaVista, $captchaServer;
        $valor1 = mt_rand(10,100);
        $valor2 = mt_rand(10,100);
        $this->captchaVista = $valor1."+".$valor2;
        $this->captchaServer = $valor1;
    }

    public function getComentarioOfImg($url_params = []) {
        $this->genCaptcha();
        //global $captchaVista;
        $id_comentario         = $url_params[":id"];
        $comentario            = $this->model->getComentarioOfImg($id_comentario);
        $response              = new stdClass();
        $response->comentarios = $comentario;
        $response->status      = 200;
        $response->isAdmin     = $this->isAdmin();
        $response->captcha     = $this->captchaVista;
        $response->captchas     = $this->captchaServer;
        if ($response) {
            return $this->json_response($response, 200);
        } else {
            return $this->json_response(false, 404);
        }
    }

    public function deleteComentario($url_params = []) {
        if ($this->isAdmin()) {
            $id_comentario = $url_params[":id"];
            $comentario    = $this->model->getComentario($id_comentario);
            if ($comentario) {
                $this->model->borrarComentario($id_comentario);
                return $this->json_response("Borrado exitoso.", 200);
            }
        }
        return $this->json_response(false, 404);
    }

    public function createComentarios($url_params = []) {
        if ($this->isLogged()){
            $body                  = json_decode($this->raw_data);
            $usuario               = $body->usuario;
            $texto                 = $body->texto;
            $calificacion          = $body->calificacion;
            $id_img                = $body->id_img;
            if ($body->captcha == $this->captchaServer){
                $comentario            = $this->model->guardarComentario($usuario, $texto, $calificacion, $id_img);
                $response              = new stdClass();
                $response->comentarios = [$comentario];
                $response->status      = 200;
                return $this->json_response($response, 200);
            }  else {
                $response              = new stdClass();
                $response->bc = [$body->captcha];
                $response->cs = [$this->captchaServer];
                $response->cv = [$this->captchaVista];
                $response->status      = 123;
            return $this->json_response($response , 404);
            }
        }
    }

    
}

?>
