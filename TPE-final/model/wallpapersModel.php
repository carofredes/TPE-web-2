<?php

class wallpapersModel extends model {
  
  function getWallpapers(){
    $sentencia = $this->db->prepare("select * from imagen");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategories(){    
    $sentencia = $this->db->prepare("select * from categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function guardarWallpaper($titulo, $id_categoria){
    $sentencia = $this->db->prepare('INSERT INTO imagen(titulo,id_categoria) VALUES(?,?)');
    $sentencia->execute([$titulo, $id_categoria]);
  }

  function borrarWallpaper($id_imagen){
    $sentencia = $this->db->prepare( "delete from imagen where id=?");
    $sentencia->execute([$id_imagen]);
  }
}
?>