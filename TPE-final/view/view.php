<?php

include_once 'libs/Smarty.class.php';

class view
{
  protected $smarty;
  protected $admin;

  function __construct($admin)
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('tituloSitio', 'Not only cats');
    $this->smarty->assign('admin', $admin);

  }
}
 ?>
