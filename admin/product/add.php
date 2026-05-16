<?php include "../common/connect.php";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $product_name  = $_POST['product_name'];
      $product_slug  = $_POST['product_slug'];
      $category_id   = $_POST['category_id'];
      $product_price = $_POST['product_price'];
      $descriptions  = $_POST['descriptions'];
      $category_slug = $_POST['category_slug'];

      if (!empty($_FILES['product_img']['name'])) {
          $img_name    = $_FILES['product_img']['name'];
          $img_tmp     = $_FILES['product_img']['tmp_name'];
          $upload_path = "../assets/upload/product-image/" . $category_slug . "/" . $img_name;
          move_uploaded_file($img_tmp, $upload_path);
          $product_img = $img_name;
      } else {
         $product_img = '';
      }

      $sql = "INSERT INTO product(category_id, product_name, product_slug, product_img, product_price, desriptions)
        VALUES ('$category_id','$product_name','$product_slug','$product_img','$product_price','$descriptions')";
      $conn->query($sql);
      header("Location: list.php");
      exit();
  }

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
          <li class="breadcrumb-item active">Add</li>
        </ol>
        <div class="card mb-4">
          <div class="card-header"><i class="fas fa-plus me-1"></i> Add New Product</div>
          <div class="card-body">
            <form action="add.php" method="post" enctype="multipart/form-data">

              <!-- Category Dropdown -->
              <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category_id" class="form-control" id="category_select" required onchange="updateSlug()">
                  <option value="">-- Select Category --</option>
                  <?php foreach($cat_result as $cat): ?>
                  <option value="<?=$cat['category_id']?>" data-slug="<?=$cat['category_slug']?>">
                    <?=$cat['category_name']?>
                  </option>
                  <?php endforeach; ?>
                </select>
                <input type="hidden" name="category_slug" id="category_slug_input">
              </div>

              <!-- Product Name -->
              <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control" required />
              </div>

              <!-- Product Slug -->
              <div class="mb-3">
                <label class="form-label">Product Slug</label>
                <input type="text" name="product_slug" class="form-control" required />
              </div>

              <!-- Product Price -->
              <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="number" name="product_price" class="form-control" required />
              </div>

              <!-- Description -->
              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="descriptions" class="form-control" rows="3"></textarea>
              </div>

              <!-- Product Image -->
              <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" name="product_img" class="form-control" />
              </div>

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
<script>
function updateSlug() {
  var sel = document.getElementById('category_select');
  var opt = sel.options[sel.selectedIndex];
  document.getElementById('category_slug_input').value = opt.getAttribute('data-slug') || '';
}
</script>
</body>
</html>