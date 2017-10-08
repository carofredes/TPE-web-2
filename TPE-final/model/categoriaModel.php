<?php
class categoriaModel extends model {
  function getCategorias(){
    $sentencia = $this->db->prepare( "select * from categoria");
    $sentencia->execute();
  }
}
?>