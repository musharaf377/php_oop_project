<?php
namespace App\classes;

class Auth extends Config{

  public function register($name, $email, $password)
  {
    $result = $this->conn->query("INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name', '$email', '$password')");

    return $result ? true : false;

  }

  public function user_exists($email)
  {
    $result = $this->conn->query("SELECT `email` FROM `users` WHERE `email` = '$email'");

    return $result->num_rows;
  }

  public function user_login($email)
  {
    $login_result = $this->conn->query("SELECT * FROM `users` WHERE `email` = '$email'");

    return $login_result;
  }

}
