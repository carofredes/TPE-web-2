<?php

define('RESOURCE', 0);
define('PARAMS', 1);

require_once ('api/config/router.php');
require_once ('model/model.php');
require_once ('api/controller/comentarioApiController.php');


$router = new Router();
//url, verb, controller, method
$router->AddRoute("comentario/:id", "GET", "comentarioApiController", "getComentarioOfImg");
$router->AddRoute("comentario/:id/:fecha", "GET", "comentarioApiController", "getUltimosComentarios");

$router->AddRoute("comentario", "POST", "comentarioApiController", "createComentarios");

$router->AddRoute("comentario/:id", "DELETE", "comentarioApiController", "deleteComentarios");


$route = $_GET['resource'];
$array = $router->Route($route);

if(sizeof($array) == 0)
  echo "404";
else
{
  $controller = $array[0];
  $metodo = $array[1];
  $url_params = $array[2];
  echo (new $controller())->$metodo($url_params);
}





?>
