<?php
class comentarioModel extends model
{
  function getComentarios(){
    $sentencia = $this->db->prepare( "select * from comentarios");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getComentario($id_comentario){
    $sentencia = $this->db->prepare( "select * from comentarios where id_comentario = ?");
    $sentencia->execute([$id_comentario]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function guardarComentario($usuario, $texto, $calificacion,$id_img){
    $sentencia = $this->db->prepare('INSERT INTO comentarios(id_user,texto,calificacion,id_img) VALUES(?,?,?,?)');
    $sentencia->execute([$usuario,$texto,$calificacion,$id_img]);
    $id = $this->db->lastInsertId();
    return $this->getComentario($id);
  }

  function borrarComentario($id_comentario){
    $sentencia = $this->db->prepare( "delete from comentarios where id_comentario=?");
    $sentencia->execute([$id_comentario]);
  }
}
?>
