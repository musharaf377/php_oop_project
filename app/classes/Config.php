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
}

new Config();