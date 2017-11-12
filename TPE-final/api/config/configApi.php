<?php
class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentario#GET'=> 'ComentarioApiController#getComentario',
      'comentario#DELETE'=> 'ComentarioApiController#deleteComentario',
      'comentario#POST'=> 'ComentarioApiController#createComentario',
    ];
}
?>
