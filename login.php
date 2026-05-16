<?php include "common/connect.php";	 ?>

<?php

  // this function check the user exit in database or not and also creating cookie and session
  function validate($username,$password)
   {
       $flag=false;

       global $conn;

       $sql = "SELECT * from users where username='$username' and password='$password'";
       $result=$conn->query($sql);

       if ($result->num_rows > 0) {
            
            if (isset($_POST['check'])) {
                 
                setcookie('username',$username, time() + (86400 * 30), "/");
                setcookie('password',$password, time() + (86400 * 30), "/");
            }     
             
            $row = $result->fetch_assoc();
             
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];

            $flag=true;
            
        }
        return($flag); 
    }
    // if cookie is already exist
    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        
        $username = $_COOKIE['username'];
        $password = $_COOKIE['password'];

        if (validate($username, $password)==true) {
            header("Location: index.php");
        }
    }

    // if user not click on check button
    elseif (isset($_POST['username']) && isset($_POST['password'])) {
        
        extract($_POST);

        if (validate($username, $password)==true) {
            header("Location: index.php");   
        }

        else{
            echo "<script>alert('login not done....')</script>";
        }   
    }   
?>
<!doctype html>
<html>
    <head>
        <!--- head start from here --->
        <?php include "common/head.php"; ?>
        <!--- head end here -->
    </head>
    <body>
        <!-- header start from here --->
        <?php include "common/header.php"; ?>
        <!-- header end here -->

        <div class="login-wrap">
            <div class="login-card">
                <h2 class="login-title">Welcome Back!</h2>
                <p class="login-subtitle">Apna username aur password daalo</p>

                <form class="login-form" action="login.php" method="POST">
                    <!-- ── USERNAME ── -->
                    <div class="login-field">
                        <label for="username">Username *</label>
                        <input type="text" id="username" name="username" placeholder="rahul123" required/>
                    </div>

                    <!-- ── PASSWORD ── -->
                    <div class="login-field">
                        <label for="password">Password *</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Apna password daalo"
                            required
                        />
                    </div>
                    <div class="remember-wrap">
                      <input type="checkbox" id="remember" name="check" value="1"/>
                      <label for="remember">Don't ask me again</label>
                    </div>
                    <!-- ── SUBMIT ── -->
                    <button type="submit" class="login-submit-btn">Login</button>
                </form>

                <p class="login-register-link">Account nahi hai? <a href="register.php">Register here</a></p>
            </div>
        </div>
        <!--- footer start from here  --->
        <?php include "common/footer.php"; ?>
        <!--- footer end here --->
    </body>
</html>
