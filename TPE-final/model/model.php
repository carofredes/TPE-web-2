<?php
include_once("database/db_config.php");

class model {
  protected $db;

  function __construct() {
    try {
        $this->db = new PDO('mysql:host='.DB_HOST.';'.'dbname='.DB_NAME.';charset=utf8',DB_USER, DB_PASSWORD);
      } catch (PDOException $e) {
        $this->buildDatabasefromFile(DB_NAME,DB_FILE);
      }
  }

  
   public function buildDatabasefromFile(){
      try {
        $this->db = new PDO('mysql:host='.DB_HOST , DB_USER, DB_PASSWORD);
        $this->db->exec('CREATE DATABASE IF NOT EXISTS '.DB_NAME);
        $this->db->exec('USE '.DB_NAME);
        $queries = $this->loadSQLSchema(DB_FILE);
        $i = 0;
        while ($i < count($queries) && strlen($this->db->errorInfo()[2]) == 0)
        {
          $this->db->exec($queries[$i]);
          $i++;
        }
      } catch (Exception $e) {
        echo $e;
      }
    }

    public function loadSQLSchema($dbfile){
      $queries = fopen("database/$dbfile", "r+");
      $sql = "";
      while (!feof($queries)) {
        $linea = fgets($queries);
        $sql .= $linea;
      }
      fclose($queries);
      $queries = explode(";", $sql);
      return $queries;
    }
}
?>
