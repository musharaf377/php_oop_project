<?php

namespace App\classes;

use mysqli;

class Config{
  
  public $conn;

  public function __construct()
  {
    $this->conn = new mysqli("localhost", "root", "", "php_oop_project");

    if($this->conn->connect_error){
      die($this->conn->connect_error);
    }
  }

  public function user_exists($email)
  {
    $result = $this->conn->query("SELECT `email` FROM `users` WHERE `email` = '$email'");

    return $result->num_rows;
  }
}

new Config();