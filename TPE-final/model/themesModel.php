<?php

class themesModel extends model {
  function getThemes(){  	
    $sentencia = $this->db->prepare("select * from imagen, categoria where imagen.id_categoria = categoria.id_categoria order by categoria.id_categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategories(){    
    $sentencia = $this->db->prepare("select * from categoria order by nombre_categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function guardarThemes($titulo){
    $sentencia = $this->db->prepare('INSERT INTO categoria(nombre_categoria)  VALUES (?)');
    $sentencia->execute([$titulo]);
  }

  function borrarThemes($id_theme){
    $sentencia = $this->db->prepare( "delete from categoria where id_categoria=?");
    $sentencia->execute([$id_theme]);
  }

  function editarThemes($id_theme, $titulo){
    $sentencia = $this->db->prepare("update categoria set titulo=? where id_img=?");
    $sentencia->execute([$titulo,$id_theme]);
  }

  function getThemesImages($id_categoria){
    $sentencia = $this->db->prepare("select * from imagen where id_categoria=?");
    $sentencia->execute([$id_categoria]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategorieName($id_categoria){
    $sentencia = $this->db->prepare("select * from categoria where id_categoria=? limit 1");
    $sentencia->execute([$id_categoria]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  
}
?>