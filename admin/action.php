<?php
session_start();
use App\classes\Auth;

require_once "../vendor/autoload.php";

$auth = new Auth();


if(isset($_POST['action']) && $_POST['action'] == 'register'){
  
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

  
  if($auth->user_exists($email) > 0){
    echo $auth->showMessage('warning', 'this email already exists');
  }else{
    if($auth->register($name, $email, $password)){
      echo "ok";
      $_SESSION['email'] = $email;
    }else{
      echo $auth->showMessage('danger', 'Registration Failed');
    }
  }


}