<?php

class wallpapersModel extends model {
  
  function getWallpapers(){
    $sentencia = $this->db->prepare("select * from imagen");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function saveWallpaper($id, $titulo, $id_categoria){
    $sentencia = $this->db->prepare('INSERT INTO imagen(id,titulo,id_categoria) VALUES(?,?,?)');
    $sentencia->execute([$id, $titulo, $id_categoria]);
  }

  function borrarTarea($id_imagen){
    $sentencia = $this->db->prepare( "delete from imagen where id=?");
    $sentencia->execute([$id_imagen]);
  }
}
?>