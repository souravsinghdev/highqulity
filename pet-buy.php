<?php include "common/connect.php"; ?>

<?php include "common/session.php"; ?>

<?php 

    $child_product_slug = $_GET['product_slug'];
   
    $sql = "SELECT * FROM product WHERE product_slug = '$child_product_slug';";
      
    $child_product_result = $conn->query($sql);

    $child_parent_row = $child_product_result->fetch_assoc(); //fetch sirf single entry ke liye chlta hai or multipul ke liye loopo chlega row krke

    $category_id = $child_parent_row['category_id'];

   /* die(var_dump($child_parent_row));*/  
 ?>


<!doctype html>
<html>
    <head>
    	<!-- head start from here -->
          <?php include "common/head.php"; ?>
        <!-- head end here -->
    </head>
    <body>
    	<!-- header start from here --->
        <?php include "common/header.php"; ?>
        <!-- header end here --->

        <div class="contact-wrap">
            <div class="contact-grid">
                <!-- ── LEFT: FORM ── -->
                <div>
                    <h2 class="contact-form-title">Send us a message!</h2>

                    <div class="contact-form-group">
                        <div class="contact-row">
                            <div class="contact-field">
                                <label>Name *</label>
                                <input type="text" placeholder="Your name"/>
                            </div>
                            <div class="contact-field">
                                <label>Email Address *</label>
                                <input type="email" placeholder="your@email.com"/>
                            </div>
                        </div>

                        <div class="contact-field">
                            <label>Contact Number *</label>
                            <input type="tel" placeholder="+91 00000 00000"/>
                        </div>

                        <div class="contact-field">
                            <label>Message *</label>
                            <textarea placeholder="Apna message yahan likhein..."></textarea>
                        </div>

                        <div>
                            <button class="contact-submit-btn">Send Message</button>
                        </div>
                    </div>
                </div>
                 <!-- ── LEFT: FORM END HERE ── -->

                <!-- ── RIGHT: PET INFO CARD ── -->
                <div class="pet-info-card">
                	<?php 

                     $sql = "SELECT * FROM category where category_id = '$category_id';";

                     $result = $conn->query($sql);
                      
                     foreach ($result as $row) {
                    
                	?>
                    <div class="pet-info-card-img">
                        <span class="pet-info-card-badge">Available</span>
                        <!-- apna image path daal dena -->
                        <img src="admin/assets/upload/product-image/<?=$row['category_slug'] ?>/<?=$child_parent_row['product_img'] ?>" alt="Pet Image"/>
                    </div>

                    <div class="pet-info-card-body">
                        <!-- DB se PHP variables aayenge yahan -->
                        <h3 class="pet-info-card-name"><?=$child_parent_row['product_name'] ?></h3>
                        <div class="pet-info-card-divider"></div>

                        <div>
                            <span class="pet-info-card-lbl">Price</span>
                            <span class="pet-info-card-price">₹ <?=$child_parent_row['product_price'] ?></span>
                        </div>

                        <div>
                            <span class="pet-info-card-lbl">About this pet</span>
                            <p class="pet-info-card-desc">
                                <?=$child_parent_row['product_name'] ?> ek friendly aur active breed hai. Family ke saath bahut achha rehta
                                hai.
                            </p>
                        </div>
                    </div>
                    <?php 
                      }
                    ?>
                </div>
                <!-- ── RIGHT: PET INFO CARD END HERE ── -->

                <!--- information start from here--->
                <div class="info-box">
                    <h3 class="info-box-title">Information</h3>
                    <ul class="info-box-list">
                        <li>
                            <span class="info-icon">✉️</span>
                            <a href="mailto:highqualitypets@gmail.com">highqualitypets@gmail.com</a>
                        </li>
                        <li>
                            <span class="info-icon">📞</span>
                            <span>+91-9540532869</span>
                        </li>
                        <li>
                            <span class="info-icon">📍</span>
                            <span>Delhi, India - 110001</span>
                        </li>
                    </ul>
                </div>
                <!--- information end here--->
            </div>
        </div>
        
        <!--- footer start from here   --->
          <?php include "common/footer.php"; ?>
        <!--- footer end here  --->
    </body>
</html>
