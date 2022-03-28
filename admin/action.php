<?php

use App\classes\Auth;

require_once "../vendor/autoload.php";

$auth = new Auth();


if(isset($_POST['action']) && $_POST['action'] == 'register'){
  
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

  if($auth->user_exists($email) > 0){
    echo 'yes';
  }else{
    echo "no";
  }

  // var_dump($auth->register($name, $email, $password));


}