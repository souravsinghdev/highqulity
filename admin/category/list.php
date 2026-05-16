<?php include "../common/connect.php" ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- head start from here -->
        <?php include "../common/head.php"; ?>
        <!-- head end here -->
        <style>
            .card {
                border: 1px solid #dee2e6;
                border-radius: 6px;
            }

            .card-header {
                background-color: #343a40;
                color: #fff;
                padding: 12px 16px;
                font-size: 0.9rem;
                font-weight: 600;
            }

            table#datatablesSimple {
                width: 100%;
                border-collapse: collapse;
            }

            table#datatablesSimple thead tr th {
                background-color: #f8f9fa;
                color: #495057;
                font-size: 0.8rem;
                font-weight: 600;
                text-transform: uppercase;
                padding: 12px 16px;
                border-bottom: 2px solid #dee2e6;
            }

            table#datatablesSimple tbody td {
                padding: 12px 16px;
                vertical-align: middle;
                border-bottom: 1px solid #f1f1f1;
                font-size: 0.9rem;
                color: #333;
            }

            table#datatablesSimple tbody tr:hover {
                background-color: #f8f9fa;
            }

            .cat-img {
                width: 60px;
                height: 60px;
                object-fit: cover;
                border-radius: 6px;
            }

            .slug-badge {
                background: #e9ecef;
                color: #495057;
                padding: 3px 8px;
                border-radius: 4px;
                font-size: 0.8rem;
                font-family: monospace;
            }

            .btn-edit {
                background-color: #0d6efd;
                color: #fff;
                border: none;
                border-radius: 4px;
                padding: 5px 12px;
                font-size: 0.82rem;
                text-decoration: none;
            }

            .btn-edit:hover { background-color: #0b5ed7; color: #fff; }

            .btn-delete {
                background-color: #dc3545;
                color: #fff;
                border: none;
                border-radius: 4px;
                padding: 5px 12px;
                font-size: 0.82rem;
                text-decoration: none;
            }

            .btn-delete:hover { background-color: #bb2d3b; color: #fff; }
        </style>
    </head>
    <body class="sb-nav-fixed">
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
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-table me-1"></i>
                                    Category List
                                </div>
                                <a href="add.php" class="btn btn-sm btn-success">
                                    <i class="fas fa-plus me-1"></i> Add New
                                </a>
                            </div>

                            <?php 
                               $sql = "select * from category";
                               $result = $conn->query($sql);
                            ?>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Category Slug</th>
                                                <th>Category Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i = 1;
                                            foreach ($result as $row): ?>
                                            <tr>
                                                <td><strong><?= $i++; ?></strong></td>
                                                <td>
                                                    <span class="cat-name"><?= $row['category_name']; ?></span>
                                                </td>
                                                <td>
                                                    <span class="slug-badge"><?= $row['category_slug']; ?></span>
                                                </td>
                                                <td>
                                                    <img
                                                        src="../assets/upload/category-image/<?= $row['category_img']; ?>"
                                                        class="cat-img"
                                                        alt="<?= $row['category_name']; ?>"
                                                        onerror="this.src='../assets/img/no-image.png'"
                                                    />
                                                </td>
                                                <td>
                                                    <a href="edit.php?category_id=<?= $row['category_id']; ?>"
                                                        class="btn-edit me-1">
                                                        <i class="fas fa-edit me-1"></i>Edit
                                                    </a>
                                                    <a href="delete.php?category_id=<?= $row['category_id']; ?>"
                                                        class="btn-delete"
                                                        onclick="return confirm('You really want to delete it?')">
                                                        <i class="fas fa-trash me-1"></i>Delete
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