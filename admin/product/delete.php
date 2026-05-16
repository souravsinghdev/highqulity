<?php include "../common/connect.php"; ?>

<?php
  $product_id = $_GET['product_id'];

  $sql = "DELETE FROM product WHERE product_id='$product_id'";
  $conn->query($sql);

  header("Location: list.php");
  exit();
?>