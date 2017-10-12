<?php
include_once('model/loginModel.php');
include_once('view/loginView.php');

class LoginController extends Controller
{

  function __construct()
  {
    $this->view = new loginView();
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
        print_r(password_verify($password, $user[0]['password']));

        if((!empty($user)) && password_verify($password, $user[0]['password'])) {
            session_start();
            $_SESSION['USER'] = $userName;
            $_SESSION['LAST_ACTIVITY'] = time();
            header('Location: '.HOME);
        }
        else{
            $this->view->mostrarLogin('Usuario o Password incorrectos');
        }
      }
  }

  public function destroy()
  {
    session_start();
    session_destroy();
    header('Location: '.LOGIN);
  }
}

 ?>