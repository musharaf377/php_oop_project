<?php

require_once "../vendor/autoload.php";
use App\classes\Auth;

  session_start();


 $auth = new Auth();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/all.min.css">
</head>
<body>
  

<h2>Admin dashboard </h2>
<h1><?php echo $_SESSION['email'] ?></h1>
<h1><?php echo $_COOKIE['email'] ?></h1>

<a href="logout.php">Log Out</a>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>