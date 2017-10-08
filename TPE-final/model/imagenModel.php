<?php
class imagenModel extends model {
  function getImagenes(){
    $sentencia = $this->db->prepare( "select * from imagen");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}
?>