<?php
include_once('model/ringtonesModel.php');
include_once('view/ringtonesView.php');

class ringtonesController {
  private $view;
  private $model;

  function __construct(){
    $this->view = new ringtonesView();
    $this->model = new ringtonesModel();
  }

  public function ringtones(){
    $ringtones = $this->model->getRingtones();
    $this->view->mostrarRingtones($ringtones);
  }
}
 
?>