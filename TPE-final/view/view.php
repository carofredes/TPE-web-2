<?php

include_once 'libs/Smarty.class.php';

class view
{
  protected $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('titulo', 'Not only cats');
  }
}
 ?>
