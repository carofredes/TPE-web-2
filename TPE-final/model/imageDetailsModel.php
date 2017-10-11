<?php

class imageDetailsModel extends model {
  function getImg($url_img){
    $sentencia = $this->db->prepare( "select * from imagen where id_img = ? limit 1");
    $sentencia->execute([$url_img]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}
?>