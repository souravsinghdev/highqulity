<?php include "../common/connect.php";
    
  if ($_SERVER['REQUEST_METHOD']=='POST') {
      
      $category_name= $_POST['category_name'];
      $category_slug= $_POST['category_slug'];
      
      // ✅ Image wala code
    if (!empty($_FILES['category_img']['name'])) {
        $img_name    = $_FILES['category_img']['name'];
        $img_tmp     = $_FILES['category_img']['tmp_name'];
        $upload_path = "assets/upload/category-image/" . $img_name;
        move_uploaded_file($img_tmp, $upload_path);
        $category_img = $img_name;
    } else {
        $category_img = ''; // koi image nahi
    }

    $sql = "INSERT INTO category(category_name,category_slug,category_img) values ('$category_name','$category_slug','$category_img')";
    $conn->query($sql);
    header("Location: list.php");
    exit();

   }

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- head start from here -->
        <?php include "../common/head.php"; ?>
        <!-- head end here -->
    </head>
    <body>
        <!-- header start from here -->
        <?php include "../common/header.php"; ?>
        <!-- header end here -->

        <div id="layoutSidenav">
            <!-- sidebar start from here -->
            <?php include "../common/sidebar.php"; ?>
            <!-- sidebar end here -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">CATEGORY</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Category</li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-edit me-1"></i>
                                Add New Category
                            </div>
                            <div class="card-body">
                                <form action="add.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="category_id" value="">
                                    <input type="hidden" name="old_img" value="">
                                    <!-- Category Name -->
                                    <div class="mb-3">
                                        <label class="form-label">Category Name</label>
                                        <input
                                            type="text"
                                            name="category_name"
                                            class="form-control"
                                            required
                                        />
                                    </div>

                                    <!-- Category Slug -->
                                    <div class="mb-3">
                                        <label class="form-label">Category Slug</label>
                                        <input
                                            type="text"
                                            name="category_slug"
                                            class="form-control"
                                            value=""
                                            required
                                        />
                                    </div>

                                    <!-- Category Image -->
                                    <div class="mb-3">
                                        <label class="form-label">Category Image</label>
                                        <input type="file" name="category_img" class="form-control"/>

                                        <div class="mt-2">
                                            <img src="assets/upload/category-image/<?=$row['category_img']; ?>" width="120" class="img-thumbnail">
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="d-flex justify-content-between">
                                        <a href="category-list.php" class="btn btn-secondary">Back</a>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- footer start from here -->
                <?php include "../common/footer.php"; ?>
                <!-- footer end here -->
            </div>
        </div>
        <!-- script start from here -->
        <?php include "../common/script.php"; ?>
        <!-- script end here -->
    </body>
</html>
