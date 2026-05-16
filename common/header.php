<!--- top bar start from here --->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="pt-2 pb-2 text-pad">
                    <span class="text-success add">WhatsApp</span>
                    <span class="text-danger add ps-3">
                        <i class="fa-solid fa-phone text-danger"></i>+91-9540532869
                    </span>
                    <span class="add padd">
                        <i class="fa-brands fa-facebook-f"></i>
                    </span>
                    <span class="add">
                        <i class="fa-brands fa-instagram"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- top bar end here --->

<!--- navbar start from here ---->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/imgs/logo.png" style="max-height: 45px; width: auto"/>
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item text-contant ps-1 pe-1">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item text-contant ps-1 pe-1">
                    <a class="nav-link" href="about_us.php">About us</a>
                </li>
                <li class="nav-item ps-1 pe-1 dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="pets.php"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                     Pets
                    </a>
                    <ul class="dropdown-menu text-center bg-warning" aria-labelledby="navbarDropdown">
                       <?php 
                     
                         $sql = "SELECT * FROM category";
                         $result = $conn->query($sql);

                         foreach ($result as $row) {
                       ?>
                    
                        <li><a class="dropdown-item" href="pets.php?category_slug=<?=$row['category_slug'] ?>"><?=$row['category_name'] ?></a></li>
                        <!--<li><a class="dropdown-item" href="pets.php">Cats</a></li>
                        <hr class="dropdown-divider"/></li> 
                        <li><a class="dropdown-item" href="pets.php">Birds</a></li>-->
                      <?php 
                         }  
                      ?>
                    </ul>
                </li>
                <li class="nav-item text-contant ps-1 pe-1">
                    <a class="nav-link" href="pet-travel.php" tabindex="-1" aria-disabled="true">Pet Travel</a>
                </li>
                <li class="nav-item text-contant ps-1 pe-1">
                    <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact Us</a>
                </li>
                <?php if (isset($_SESSION['username'])) { ?> 
                  <li class="nav-item text-contant ps-1 pe-1">
                      <a class="nav-link" href="logout.php">logout</a>
                  </li>
                <?php 
                }
                else{ ?> 
                   <li class="nav-item text-contant ps-1 pe-1">
                      <a class="nav-link" href="login.php">login</a>
                   </li>
                <?php  
                }
                ?>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<!---- navbar end here ---->
