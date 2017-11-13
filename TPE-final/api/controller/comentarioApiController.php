<?php

require_once 'model/comentarioModel.php';
require_once 'api.php';
/**
 *
 */
class comentarioApiController extends Api
{
  protected $model;

  function __construct()
  {
      parent::__construct();
      $this->model = new comentarioModel();
  }

  public function getComentarioOfImg($url_params = [])
  {
      $id_comentario = $url_params[":id"];
      $comentario = $this->model->getComentarioOfImg($id_comentario);
      $response = new stdClass();
      $response->comentarios = $comentario;
      $response->status = 200;
      if($response)
        return $this->json_response($response, 200);
      else
        return $this->json_response(false, 404);
  }

  public function deleteComentarios($url_params = [])
  {
      $id_comentario = $url_params[":id"];
      $comentario = $this->model->getComentario($id_comentario);
      if($comentario)
      {
        $this->model->borrarComentario($id_comentario);
        return $this->json_response("Borrado exitoso.", 200);
      }
      else
        return $this->json_response(false, 404);
  }

  public function createComentarios($url_params = []) {
    $body = json_decode($this->raw_data);
    $usuario = $body->usuario;
    $texto = $body->texto;
    $calificacion = $body->calificacion;
    $id_img = $body->id_img;
    $comentario = $this->model->guardarComentario($usuario, $texto, $calificacion,$id_img);
    $response = new stdClass();
    $response->comentarios = [$comentario];
    $response->status = 200;
    return $this->json_response($response, 200);
  }
}

 ?>
