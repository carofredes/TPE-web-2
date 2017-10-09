<?php

class wallpapersModel extends model {
  function getWallpapers(){
  	
    $sentencia = $this->db->prepare("select * from imagen");
    $sentencia->execute();
    print_r($sentencia->fetchAll(PDO::FETCH_ASSOC));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}
?>