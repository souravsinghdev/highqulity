<?php 

  setcookie('email','', time() - (3600 * 30), "/");
  setcookie('password','', time() - (3600 * 30), "/");

  header("location: login.php");
  exit();

?>
