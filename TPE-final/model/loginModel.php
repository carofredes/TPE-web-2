<?php

class loginModel extends Model
{
  function getUser($userName){
    $sentencia = $this->db->prepare( "select * from users where nickName = ? limit 1");
    $sentencia->execute([$userName]);
    
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function createUser($userName, $password) {
  	$sentencia = $this->db->prepare('INSERT INTO users(nickName,password) VALUES(?,?)');
    $sentencia->execute([$userName, $password]);
  }
}
?>