<?php
class comentarioModel extends model
{
  function getComentarios(){
    $sentencia = $this->db->prepare( "select * from comentario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getComentario($id_comentario){
    $sentencia = $this->db->prepare( "select * from comentario where id_comentario = ?");
    $sentencia->execute([$id_comentario]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function guardarComentario($usuario, $texto, $calificacion){
    $sentencia = $this->db->prepare('INSERT INTO comentario(usuario,texto,calificacion) VALUES(?,?,?)');
    $sentencia->execute([$usuario,$texto,$calificacion]);
    $id = $this->db->lastInsertId();
    return $this->getComentario($id);
  }

  function borrarComentario($id_comentario){
    $sentencia = $this->db->prepare( "delete from comentario where id_comentario=?");
    $sentencia->execute([$id_comentario]);
  }
}
?>
