<?php include "common/connect.php"; ?>

<?php 

  session_destroy();
  unset($_SESSION['name']);
  header("Location: login.php");
  exit();

?>