<?php
include_once('model/loginModel.php');
include_once('view/loginView.php');

class LoginController extends Controller {

  function __construct(){
    parent::__construct();
    $this->view = new loginView($this->admin, $this->userLoggedin);
    $this->model = new loginModel();
  }

  public function index()
  {
    $this->view->mostrarLogin();
  }

  public function verify()
  {
      $userName = $_POST['nickName'];
      $password = $_POST['password'];

      if(!empty($userName) && !empty($password)){
        $user = $this->model->getUser($userName);
        password_verify($password, $user[0]['password']);

        if((!empty($user)) && password_verify($password, $user[0]['password'])) {
          $this->startSession($user);
        }
        else{
            $this->view->mostrarLogin('Usuario o Password incorrectos');
        }
      }else {
        header('Location: '.LOGIN);
      }
  }

  public function add(){
    $userName = $_POST['nickName'];
    $password = $_POST['password'];

    $hashpassword = password_hash($password,PASSWORD_DEFAULT);
    if(!empty($userName) && !empty($hashpassword)){
      $user = $this->model->createUser($userName, $hashpassword);
      $userLogged = $this->model->getUser($userName);
      $this->startSession($userLogged);
    }
    else{
        $this->view->mostrarLogin('Completa todos los datos');
    }
  }

  private function startSession($user){
    session_start();
    $_SESSION['USER'] = $user[0]['nickName'];
    $_SESSION['PERMISSIONS'] = $user[0]['permissions'];
    $_SESSION['LAST_ACTIVITY'] = time();
    header('Location: '.HOME);
  }

  public function destroy() {
    session_start();
    session_destroy();
    header('Location: '.HOME);
  }
}

 ?>
