<?php

class LoginModel extends Model
{
  function getUser($userName){
    $sentencia = $this->db->prepare( "select * from users where nickName = ? limit 1");
    $sentencia->execute([$userName]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}
?>