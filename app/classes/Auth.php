<?php
namespace App\classes;

class Auth extends Config{

  /** 
  *@param $name
  *@param $email
  *@param $password
  *@return bool
  */
  public function register($name, $email, $password)
  {
    $result = $this->conn->query("INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name', '$email', '$password')");

    return $result ? true : false;

  }
  /**
   * @param $email
   * @return bool
   */
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

  public function isLogin()
  {
    session_start();
    return isset($_SESSION['email']) ? true : false;
  }

}
