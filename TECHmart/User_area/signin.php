<?php
include('../include/connect.php');
include('../Functions/common_function.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="../login.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <div id="page" class="site" style="background-color:#f5f4fa">
        <div class="container">
            <div class="theform">
                <div class="play">
                    <div class="wrapper">
                        <div class="card one"></div>
                        <div class="card two"></div>
                        <div class="card three"></div>
                        <div class="card four"></div>
                        <div class="card five"></div>
                    </div>
                </div>
                <div class="signup">
                    <nav>
                        <ul>
                            <li><a href="#"><i class="ri-arrow-left-line"></i></a></li>
                            <li>Already member?<a href="#0" class="t-signin">Sign in</a></li>
                        </ul>
                    </nav>
                    <div class="heading">
                        <h2>Sign Up</h2>
                        <p>We secure your data privacy encrypted.</p>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <p>
                            <i class="ri-user-3-line"></i>
                            <label for="user_username"></label>
                            <input id="user_username" type="text" placeholder="Full name:" autocomplete="off" required="required"
                            name="user_username" >
                        </p>
                        <p>
                            <i class="ri-mail-line"></i>
                            <label for="user_email"></label>
                            <input type="email" placeholder="Email Address:" autocomplete="off" required="required"
                            id="user_email" name="user_email">
                        </p>
                        <p>
                            <i class="ri-phone-line"></i>
                            <label for="user_phone"></label>
                            <input type="phone" placeholder="Phone Number:" autocomplete="off" required="required"
                            id="user_phone" name="user_phone">
                        </p>
                        <p>
                            <i class="ri-lock-line"></i>
                            <label for="user_password"></label>
                            <i class="ri-eye-off-line"></i>
                            <input type="password" placeholder="Password:" autocomplete="off" required="required"
                            id="user_password" name="user_password">
                        </p>
                        <p>
                            <i class="ri-lock-line"></i>
                            <label for="user_comfirmpassword"></label>
                            <input type="password" placeholder="Confirm Password:" autocomplete="off" required="required"
                            id="user_comfirmpassword" name="user_comfirmpassword">
                        </p>
                        <p>
                            <i class="ri-home-line"></i>
                            <label for="user_address"></label>
                            <input type="text" placeholder="Enter Address:" autocomplete="off" required="required"
                            id="user_address" name="user_address">
                        </p>
                        <div class="actions">
                            <label for="">
                                <input type="submit" value="Sign Up" name="user_signup">
                                <i class="ri-arrow-right-line"></i>
                            </label>
                            <p>Or</p>
                            <p class="socials">
                                <button><i class="ri-facebook-line"></i></button>
                                <button><i class="ri-google-line"></i></button>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="signin">
                    <nav>
                        <ul>
                            <li><a href="#"><i class="ri-arrow-left-line"></i></a></li>
                            <li>Don't have an account?<a href="#0" class="t-signup">Sign Up</a></li>
                        </ul>
                    </nav>
                    <div class="heading">
                        <h2>Sign In</h2>
                        <p>We secure your data privacy encrypted.</p>
                    </div>
                    <form action="" method="post">
                         <p>
                            <i class="ri-mail-line"></i>
                            <label for="user_email"></label>
                            <input type="email" placeholder="Email Address:" autocomplete="off" required="required"
                            id="user_email" name="user_email">
                        </p>
                        <p>
                            <i class="ri-lock-line"></i>
                            <label for="user_password"></label>
                            <i class="ri-eye-off-line"></i>
                            <input type="password" placeholder="Password:" autocomplete="off" required="required"
                            id="user_password" name="user_password">
                        </p>
                        <div class="actions">
                            <label for="user_signin">
                                <input type="submit" value="Sign In" id="user_signin" name="user_signin">
                                <i class="ri-arrow-right-line"></i>
                            </label>
                            <p>Or</p>
                            <p class="socials">
                                <button><i class="ri-facebook-line"></i></button>
                                <button><i class="ri-google-line"></i></button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signup = document.querySelector('.t-signup'),
              signin = document.querySelector('.t-signin'),
              addclass = document.querySelector('.site');
        signup.addEventListener('click',function(){
            addclass.className = 'site signup-show';
        })
        signin.addEventListener('click',function(){
            addclass.className = 'site signin-show';
        })
    </script>

<?php
// Function to determine redirect URL based on user flow
function getRedirectUrl($user_ip_address, $con) {
    // Check if user has items in cart
    $select_query_cart = "SELECT * FROM `cart_details` WHERE ip_address='$user_ip_address'";
    $select_cart = mysqli_query($con, $select_query_cart);
    $row_count_cart = mysqli_num_rows($select_cart);
    
    if ($row_count_cart > 0) {
        // User has items in cart, redirect to payment
        return 'payment.php';
    } else {
        // User came directly to login, redirect to homepage
        return '../Homepage.php'; // or whatever your homepage is
    }
}

// SIGNUP PROCESSING
if (isset($_POST['user_signup'])) {
    // Sanitize input data
    $user_username = mysqli_real_escape_string($con, $_POST['user_username']);
    $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
    $user_phone = mysqli_real_escape_string($con, $_POST['user_phone']);
    $user_password = $_POST['user_password'];
    $user_comfirmpassword = $_POST['user_comfirmpassword'];
    $user_address = mysqli_real_escape_string($con, $_POST['user_address']);
    $user_ip_address = getIPAddress();

    // Check if user or email already exists
    $select_query = "SELECT * FROM `user_table` WHERE username='$user_username' OR user_email='$user_email'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);

    if ($rows_count > 0) {
        echo "<script>alert('Either Username or Email address already exists.')</script>";
    } elseif ($user_password != $user_comfirmpassword) {
        echo "<script>alert('Passwords do not match.')</script>";
    } else {
        // Hash the password
        $hash_password = password_hash($user_password, PASSWORD_DEFAULT);

        // Insert user data
        $insert_query = "INSERT INTO `user_table` (username, user_email, user_phone, user_password, user_ip_address, user_address) 
                         VALUES ('$user_username', '$user_email', '$user_phone', '$hash_password', '$user_ip_address', '$user_address')";
        $sql_execute = mysqli_query($con, $insert_query);

        if ($sql_execute) {
            $_SESSION['user_email'] = $user_email;
            $_SESSION['username'] = $user_username;
            
            // Determine redirect URL
            $redirect_url = getRedirectUrl($user_ip_address, $con);
            
            echo "<script>alert('Sign up Successfully!')</script>";
            echo "<script>window.open('$redirect_url','_self')</script>";
        } else {
            echo "<script>alert('Registration failed. Please try again.')</script>";
            die(mysqli_error($con));
        }
    }
}

// SIGNIN PROCESSING
if (isset($_POST['user_signin'])) {
    // Sanitize input data
    $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
    $user_password = $_POST['user_password'];
    $user_ip_address = getIPAddress();

    // Select user data
    $select_query = "SELECT * FROM `user_table` WHERE user_email='$user_email'";
    $result_login = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result_login);

    if ($row_count > 0) {
        $row_data = mysqli_fetch_assoc($result_login);
        if (password_verify($user_password, $row_data['user_password'])) {
            // Login successful
            $_SESSION['user_email'] = $user_email;
            $_SESSION['username'] = $row_data['username'];
            
            // Determine redirect URL
            $redirect_url = getRedirectUrl($user_ip_address, $con);
            
            echo "<script>alert('Sign in Successfully!')</script>";
            echo "<script>window.open('$redirect_url','_self')</script>";
        } else {
            echo "<script>alert('Invalid Credentials.')</script>";
        }
    } else {
        echo "<script>alert('Invalid Credentials.')</script>";
    }
}
?>

</body>
</html>