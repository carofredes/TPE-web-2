<?php
include_once('model/ringtonesModel.php');
include_once('view/ringtonesView.php');

class ringtonesController extends Controller{

  function __construct(){
    parent::__construct();
    $this->view = new ringtonesView($this->admin, $this->userLoggedin);
    $this->model = new ringtonesModel();
  }

  public function ringtones(){
    $ringtones = $this->model->getRingtones();
    $this->view->mostrarRingtones($ringtones);
  }
}
 
?>