<?php include "../common/connect.php";

// Pehle product_id lo GET se
$product_id = $_GET['product_id'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $product_name  = $_POST['product_name'];
    $product_slug  = $_POST['product_slug'];
    $category_id   = $_POST['category_id'];
    $product_id    = $_POST['product_id']; 

    //DB se category_slug lo 
    $cat_sql = "SELECT category_slug FROM category WHERE category_id='$category_id'";
    $cat_res = $conn->query($cat_sql);
    $cat_row = $cat_res->fetch_assoc();
    $category_slug = $cat_row['category_slug']; 

    if (!empty($_FILES['product_img']['name'])) {
        $img_name    = $_FILES['product_img']['name'];
        $img_tmp     = $_FILES['product_img']['tmp_name'];
        $upload_path = "../assets/upload/product-image/" . $category_slug . "/" . $img_name;
        move_uploaded_file($img_tmp, $upload_path);
        $product_img = $img_name;
    } else {
        $product_img = $_POST['old_img'];
    }

    $sql = "UPDATE product SET
              product_name='$product_name',
              product_slug='$product_slug',
              product_img='$product_img',
              category_id='$category_id'
            WHERE product_id='$product_id'";
    $conn->query($sql);
    header("Location: list.php");
    exit();
}

// Product data fetch karo
$sql = "SELECT p.*, c.category_slug 
           FROM product as p
           JOIN category as c ON p.category_id = c.category_id
           WHERE p.product_id='$product_id'";
$result = $conn->query($sql);
$row  = $result->fetch_assoc();

// Category dropdown ke liye
$cat_result = $conn->query("SELECT * FROM category");
?>

<!doctype html>
<html lang="en">
<head><?php include "../common/head.php"; ?></head>
<body class="sb-nav-fixed">
<?php include "../common/header.php"; ?>
<div id="layoutSidenav">
  <?php include "../common/sidebar.php"; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
        <h1 class="mt-4">Product</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item">Product</li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
        <div class="card mb-4">
          <div class="card-header"><i class="fas fa-edit me-1"></i> Edit Product</div>
          <div class="card-body">
            <form action="edit.php?product_id=<?=$product_id?>" method="post" enctype="multipart/form-data">

              <!-- Hidden fields -->
              <input type="hidden" name="product_id" value="<?=$row['product_id']; ?>">
              <input type="hidden" name="old_img" value="<?=$row['product_img']; ?>">

              <!-- Product Name -->
              <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control"
                    value="<?=$row['product_name']; ?>" required />
              </div>

              <!-- Product Slug -->
              <div class="mb-3">
                <label class="form-label">Product Slug</label>
                <input type="text" name="product_slug" class="form-control"
                    value="<?=$row['product_slug']; ?>" required/>
              </div>

              <!-- Category Dropdown -->
              <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category_id" class="form-control" required >
                  <?php foreach($cat_result as $cat): ?>
                  <option value="<?=$cat['category_id']?>"
                          <?= ($cat['category_id'] == $row['category_id']) ? 'selected' : '' ?>>
                    <?=$cat['category_name']?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <!-- Product Image -->
              <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" name="product_img" class="form-control"/>
                <div class="mt-2">
                  <img src="../assets/upload/product-image/<?=$row['category_slug']; ?>/<?=$row['product_img']; ?>"
                       width="120" class="img-thumbnail">
                </div>
              </div>

              <!-- Buttons -->
              <div class="d-flex justify-content-between">
                <a href="list.php" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-success">Save</button>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </main>
    <?php include "../common/footer.php"; ?>
  </div>
</div>
<?php include "../common/script.php"; ?>
</body>
</html>