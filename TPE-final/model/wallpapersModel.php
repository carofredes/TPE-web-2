<?php

class wallpapersModel extends model {
  function getWallpapers(){
  	
    $sentencia = $this->db->prepare("select * from imagen");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}
?>