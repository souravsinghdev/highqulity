<?php include "common/connect.php"; 
  
   session_destroy();
   
   setcookie('username','', time() - (3600 * 30), "/");
   setcookie('password','', time() - (3600 * 30), "/");
   
   header("Location: login.php");
   exit();

?>