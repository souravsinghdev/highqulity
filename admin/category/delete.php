<?php include "../common/connect.php"; ?>

<?php 

 $category_id = $_GET['category_id'];

 // Phle category ke saare products delete karo
  $sql1 = "DELETE FROM product WHERE category_id='$category_id'";
  $conn->query($sql1);

 //fir category ko delete karo
 $sql ="DELETE from category where category_id='$category_id'";
 $conn->query($sql);
 
 header("Location: list.php");
 exit();
?>