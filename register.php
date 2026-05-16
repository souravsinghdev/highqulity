<?php include "common/connect.php"; 

  if ($_SERVER['REQUEST_METHOD']=="POST") {
      
       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $username = $_POST['username'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $password = $_POST['password'];
       $confirm_password = $_POST['confirm_password'];
       $address = $_POST['address'];

       if ($password !== $confirm_password) {
           
           echo "<script>alert('password not match')<script/>";
       }

       $sql = "INSERT INTO users(first_name,last_name,username,email,phone,password,address) values('$first_name','$last_name','$username','$email','$phone','$password','$address')";

       $result = $conn->query($sql);
    }

?>


<!doctype html>
<html>
    <head>
        <!-- head start from here --->
        <?php include 'common/head.php'; ?>
        <!-- head end here --->
    </head>
    <body>
        <!--- header start from here --->
        <?php include "common/header.php"; ?>
        <!--- header end here --->

        <div class="register-wrap">
            <div class="register-card">
                <h2 class="register-title">Create Account</h2>
                <p class="register-subtitle">Apni details bharo aur register karo</p>

                <form class="register-form" action="register.php" method="POST">
                    <!-- ── FIRST NAME + LAST NAME ── -->
                    <div class="register-row">
                        <div class="register-field">
                            <label for="first_name">First Name *</label>
                            <input type="text" id="first_name" name="first_name" placeholder="Rahul" required />
                        </div>

                        <div class="register-field">
                            <label for="last_name">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Sharma" />
                        </div>
                    </div>

                    <!-- ── USERNAME ── -->
                    <div class="register-field">
                        <label for="username">Username *</label>
                        <input type="text" id="username" name="username" placeholder="rahul123" required />
                    </div>

                    <!-- ── EMAIL ── -->
                    <div class="register-field">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" placeholder="rahul@gmail.com" required />
                    </div>

                    <!-- ── PHONE ── -->
                    <div class="register-field">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" placeholder="+91 00000 00000" required />
                    </div>

                    <!-- ── PASSWORD + CONFIRM PASSWORD ── -->
                    <div class="register-row">
                        <div class="register-field">
                            <label for="password">Password *</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Min. 8 chars + number"
                                required
                            />
                        </div>

                        <div class="register-field">
                            <label for="confirm_password">Confirm Password *</label>
                            <input
                                type="password"
                                id="confirm_password"
                                name="confirm_password"
                                placeholder="Password dobara likhein"
                                required
                            />
                        </div>
                    </div>

                    <!-- ── ADDRESS ── -->
                    <div class="register-field">
                        <label for="address">Address *</label>
                        <textarea
                            id="address"
                            name="address"
                            placeholder="address...."
                            required
                        ></textarea>
                    </div>

                    <!-- ── SUBMIT BUTTON ── -->
                    <button type="submit" class="register-submit-btn">Register Now</button>
                </form>

                <p class="register-login-link">Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </div>
        <!-- footer start from here --->
        <?php include "common/footer.php"; ?>
        <!-- footer end here --->
    </body>
</html>
con
