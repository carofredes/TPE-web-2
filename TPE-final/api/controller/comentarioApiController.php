<?php

require_once '../model/comentarioModel.php';
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

  public function getComentarios($url_params = [])
  {
      $comentarios = $this->model->getComentarios();
      $response = new stdClass();
      $response->comentarios = $comentarios;
      $response->status = 200;
      return $this->json_response($response, 200);
  }

  public function getComentario($url_params = [])
  {
      $id_comentario = $url_params[":id"];
      $comentario = $this->model->getComentario($id_comentario);
      if($comentario)
        return $this->json_response($comentario, 200);
      else
        return $this->json_response(false, 404);
  }
/*
  public function getDescripcion($url_params = [])
  {
    $id_comentario = $url_params[":id"];
    $comentario = $this->model->getComentario($id_comentario);
    if($comentario)
      return $this->json_response($comentario["descripcion"], 200);
    else
      return $this->json_response(false, 404);
  }
*/
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
    $comentario = $this->model->guardarcomentario($usuario, $texto, $calificacion);
    //$comentario['completado'] = $comentario['completado'] ? true : false;
    $response = new stdClass();
    $response->comentarios = [$comentario];
    $response->status = 200;
    return $this->json_response($response, 200);
  }
}

 ?>
