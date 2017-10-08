<?php 
include_once 'libs/Smarty.class.php';
/*
    $db = new PDO('mysql:host=localhost;'
    .'dbname=db_tpe_web2;charset=utf8'
    , 'root', '');
    $sentencia = $db->prepare( "select * from categoria");
    $sentencia->execute();
    $sentencia->fetchAll();
*/
function home()
{
  $titulo = 'NotOnlyCats_v.3';
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
  $smarty->display('templates/index.tpl');
}
	
?>

