<?php include "../common/connect.php"; ?>

<!doctype html>
<html lang="en">
    <head>
        <?php include "../common/head.php"; ?>
    </head>
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
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-table me-1"></i>
                                    Product List
                                </div>
                                <a href="add.php" class="btn btn-sm btn-success">
                                    <i class="fas fa-plus"></i> Add New
                                </a>
                            </div>

                            <div class="card-body">
                                <?php 
                                    $sql = "SELECT p.*, c.category_slug, c.category_name
                                            FROM product as p
                                            JOIN category as c ON p.category_id = c.category_id"; 
                                    $result = $conn->query($sql);
                                ?>

                                <!-- Responsive wrapper -->
                                <div class="table-responsive">
                                    <table id="datatablesSimple" class="table table-bordered table-striped table-hover align-middle">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>product Id</th>
                                                <th>Product Name</th>
                                                <th>Product Slug</th>
                                                <th>Category</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($result as $row): ?>
                                            <tr>
                                                <td><?= $row['product_id']; ?></td>
                                                <td><?= $row['product_name']; ?></td>
                                                <td><?= $row['product_slug']; ?></td>
                                                <td>
                                                    <span class="badge bg-secondary">
                                                        <?= $row['category_name']; ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <img
                                                        src="../assets/upload/product-image/<?= $row['category_slug'] ?>/<?= $row['product_img'] ?>"
                                                        width="80"
                                                        height="80"
                                                        style="object-fit: cover; border-radius: 8px;"
                                                        onerror="this.src='../assets/img/no-image.png'"
                                                    />
                                                </td>
                                                <td>    
                                                    <a href="edit.php?product_id=<?= $row['product_id']; ?>"
                                                        class="btn btn-sm btn-primary mb-1">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="delete.php?product_id=<?= $row['product_id']; ?>"
                                                        class="btn btn-sm btn-danger mb-1"
                                                        onclick="return confirm('You really want to delete this?')">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
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