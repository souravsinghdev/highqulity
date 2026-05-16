<?php include "common/connect.php"; ?>

<?php 

   function validate($email,$password)
   {  

       $flag=false;

       global $conn;
       
       $sql = "SELECT * from admins where email='$email' and password='$password'";
       $result = $conn->query($sql);

       if ($result->num_rows > 0) 
       {
           if (isset($_POST['check'])) {

                setcookie('email', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
                setcookie('password', $password, time() + (86400 * 30), "/"); // 86400 = 1 day 
            }  

            $row = $result->fetch_assoc();

           $_SESSION['email'] = $row['email'];
           $_SESSION['password'] = $row['password'];

           $flag=true;
        }
      return($flag);  
   }
   
   // check cookie is already created or not 
   if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
       
      $email = $_COOKIE['email'];
      $password = $_COOKIE['password'];

      if (validate($email,$password)==true) {
          header("Location: index.php");
       }
    }

    //check user ne aagr cookie set nhi kari hai toh ye chlega
    elseif (isset($_POST['email']) && isset($_POST['password'])) {
         
        extract($_POST);

        if (validate($email,$password)==true) {
            header("Location: index.php");
        }
        
        else{
           echo "<script>alert('login not done...')</script>";
        }
    }

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- head start from here -->
         <?php include "common/head.php"; ?>
        <!-- head start from here --> 
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="login.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com"/>
                                                <label for="email">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password"/>
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" name="check" value="1" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Forgot Password?</a>
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <!-- footer start from here -->
                  <?php include "common/footer.php"; ?>
                <!-- footer end here -->
            </div>
        </div>
        <!-- script start from here -->
           <?php include "common/script.php"; ?>
        <!-- script start from here -->
    </body>
</html>
