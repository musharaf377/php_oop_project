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

  public function showMessage($type,$message)
  {
    $output = '';
    $output .= '<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
               <strong>'.$message.'</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    
    return $output;
  }
}

new Config();