<?php

class wallpapersModel extends model {
  
  function getWallpapers(){
    $sentencia = $this->db->prepare("select * from imagen");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategories(){    
    $sentencia = $this->db->prepare("select * from categoria order by nombre_categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function guardarWallpaper($titulo, $id_categoria){
    $sentencia = $this->db->prepare('INSERT INTO imagen(titulo,id_categoria) VALUES(?,?)');
    $sentencia->execute([$titulo, $id_categoria]);
  }

  function guardarWallpaperExistente($id_img, $titulo, $id_categoria){
    $sentencia = $this->db->prepare("update imagen set titulo=?, id_categoria=? where id_img=?");
    $sentencia->execute([$titulo,$id_categoria,$id_img]);
  }

  function borrarWallpaper($id_imagen){
    $sentencia = $this->db->prepare( "delete from imagen where id_img=?");
    $sentencia->execute([$id_imagen]);
  }

  function getImg($url_img){
    $sentencia = $this->db->prepare( "select * from imagen where id_img = ? limit 1");
    $sentencia->execute([$url_img]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategorieImages($id_categoria){
    $sentencia = $this->db->prepare("select * from imagen where id_categoria=?");
    $sentencia->execute([$id_categoria]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategorieName($id_categoria){
    $sentencia = $this->db->prepare("select * from categoria where id_categoria=? limit 1");
    $sentencia->execute([$id_categoria]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  } 

  function guardarCategoria($titulo){
    $sentencia = $this->db->prepare('INSERT INTO categoria(nombre_categoria)  VALUES (?)');
    $sentencia->execute([$titulo]);
  }

  function borrarCategoria($id_theme){
    $sentencia = $this->db->prepare( "delete from categoria where id_categoria=?");
    $sentencia->execute([$id_theme]);
  }

  function editarCategoria($id_theme, $titulo){
    /* todo*/
  }
}
?>