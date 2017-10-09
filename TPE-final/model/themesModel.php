<?php

class themesModel extends model {
  function getThemes(){
  	
    $sentencia = $this->db->prepare("select * from imagen, categoria where imagen.id_categoria = categoria.id_categoria order by categoria.id_categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}
?>