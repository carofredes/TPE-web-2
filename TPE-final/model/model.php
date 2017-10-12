<?php

class model {
  protected $db;


  function __construct() {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_tpe_web2;charset=utf8'
    , 'root', '');

    
  }
}
?>
