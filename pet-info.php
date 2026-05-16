<?php include "common/connect.php"; 

  $parent_category_slug = $_GET['product_slug'];
 
  $sql = "SELECT * FROM product WHERE product_slug = '$parent_category_slug';";

  $parent_category_result = $conn->query($sql);

  $parent_category_row = $parent_category_result->fetch_assoc();
    
  $category_id = $parent_category_row['category_id']; 

  /* die(var_dump($category_id)); */ 
  
?>

<!doctype html>
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

        <div class="pet-wrap">
            <div class="pet-card">
                <?php 
                  
                 $sql = "SELECT * FROM category WHERE category_id = '$category_id';";
                 
                 $result = $conn->query($sql);

                 foreach ($result as $row) {  

                ?>
                <div class="pet-img-side">
                    <span class="pet-available-badge">Available</span>
                    <img src="admin/assets/upload/product-image/<?=$row['category_slug'] ?>/<?=$parent_category_row['product_img'] ?>" alt="<?=$parent_category_row['product_name'] ?>"/>
                </div>
                <div class="pet-info-side">
                    <h2 class="pet-name"><?=$parent_category_row['product_name'] ?></h2>
                    <div class="pet-divider"></div>
                    <span class="pet-price-lbl">Price</span>
                    <span class="pet-price-val">₹<?=$parent_category_row['product_price'] ?></span>
                    <span class="pet-desc-lbl">About this pet</span>
                    <p class="pet-desc-txt"><?=$parent_category_row["desriptions"] ?></p>
                    <div class="pet-btn-group">
                        <button class="pet-btn pet-btn-back" onclick="history.back()">← Back</button>
                        <a class="pet-btn pet-btn-buy" href="pet-buy.php?product_slug=<?=$parent_category_row['product_slug'] ?>">Buy Now</a>
                    </div>
                </div>
                <?php 
                  }
                ?>
            </div>
        </div>

        <!---- footer of website start from here ---->
        <?php include "common/footer.php"; ?>
        <!---- footer end here ---->
    </body>
</html>
