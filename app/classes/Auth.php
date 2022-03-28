<?php
namespace App\classes;
use App\classes\Config;

class Auth extends Config{

  public function register($name, $email, $password)
  {
    $result = $this->conn->query("INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name', '$email', '$password')");

    return $result ? true : false;

  }
}
