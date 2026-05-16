<?php include "common/connect.php"; 
   
   $category_slug = $_GET['category_slug'];
    
   $sql = "SELECT * FROM category WHERE category_slug = '$category_slug';";
    
   $parent_category_result = $conn->query($sql);
    
   $parent_category_row = $parent_category_result->fetch_assoc();

   $category_id = $parent_category_row['category_id'];
      
   /* die(var_dump($category_id)); */
   
?>

<!DOCTYPE html>
<html>
<head>
    <!--- head start from here --->
    <?php include "common/head.php"; ?>
    <!--- head end here --->
</head>
<body>
    
    <!--- header start from here --->
     <?php include "common/header.php"; ?>
    <!--- header end here --->

   <!------ meet our ket start from here ------>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pt-5 pb-5">
                    <i class="fa-solid fa-paw" style="font-size: 55px; color: #fc420c;"></i>
                    <h1 class="pt-2" style="font-size: 60px; font-family: 'Brush Script MT', cursive; color: #675444;">Meet Our <?=$parent_category_row['category_name'] ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!----- meet our ket end here ----->

    <!----- cat image content start from here ----->
    <div class="container mb-5">
        <div class="row">
            <?php 
               
              $sql = "SELECT * from product where category_id = '$category_id';";
              $result = $conn->query($sql);
              
              foreach ($result as $row) {
              
              /*die(var_dump($row))*/
            ?>
            <div class="col-md-4 col-lg-3 mb-5">
                <div class="background-effect text-center">
                    <div class="mb-2">
                        <img src="admin/assets/upload/product-image/<?=$parent_category_row['category_slug'] ?>/<?=$row['product_img'] ?>" width="100%" height="200px"/>
                    </div>
                    <h5><?=$row['product_name'] ?></h5>
                    <div class="m-2 mt-4 mb-4">
                       <a class="button mt-2" href="pet-info.php?product_slug=<?=$row['product_slug'] ?>">
                          VIEW MORE
                       </a> 
                       <a class="button-contant mt-1 p-2" href="pet-buy.php?product_slug=<?=$row['product_slug'] ?>">
                          BUY NOW
                       </a>
                    </div>
                </div>
            </div>
            <?php 
             } 
            ?>
            <hr style="width: 100%;"/>
        </div>
    </div>
    <!----- third cat part content end here ------>
    
   
   <!---- footer of website start from here ---->
     <?php include "common/footer.php"; ?> 
   <!---- footer end here ---->

</body>
</html>    