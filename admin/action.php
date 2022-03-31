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

if(isset($_POST['action']) && $_POST['action'] == 'login'){
  // print_r($_POST);
  $login_email = $_POST['login_email'];
  $login_password = $_POST['login_password'];
  $remember = isset($_POST['remember']) ? 1 : 0;

  $result = $auth->user_login($login_email);

  if($result->num_rows == 1){
    $row = $result->fetch_assoc();

    if(password_verify($login_password, $row['password'])){
      if($row['status'] == 1 ){
        echo "success";
      }else{
        echo $auth->showMessage('warning',"Your account doesn't active");

      }
    }else{
      echo $auth->showMessage('danger','These Password do not match our records');

    }



  }else{
   echo $auth->showMessage('danger','These credentials do not match our records');
  }




}