<?php
include('../include/connect.php');
include('../Functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./admin_login.css">
</head>
<body>
     <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                     <h2>Log in</h2>
                     <form action="" method="post">
                        <label for="email"></label>
                        <input type="email" class="input-box" placeholder="Enter your Email ID:" required name="admin_email" id="email">
                        <label for="password"></label>
                        <input type="password" class="input-box" placeholder="Enter your password:" required name="admin_password" id="password">
                        <label for="submit"></label>
                        <input type="submit" class="input-box submit-btn" name="login" value="Submit">
                        <input type="checkbox"><span>Remember me!</span>
                        <button type="button" class="submit-btn" onclick="openRegister()">I am new here!</button>
                        <a href="#">Forgot Password?</a>
                     </form>
                </div>
                <div class="card-back">
                     <h2>Register</h2>
                     <form action="" method="post">
                        <label for="username"></label>
                        <input type="text" class="input-box" placeholder="Enter your username:" required name="username" id="username">
                        <label for="email"></label>
                        <input type="email" class="input-box" placeholder="Enter your Email ID:" required name="re_email" id="email">
                        <label for="password"></label>
                        <input type="password" class="input-box" placeholder="Enter your password:" required name="re_password" id="password">
                        <label for="submit"></label>
                        <input type="submit" class="input-box submit-btn" name="register" value="Submit">
                        <input type="checkbox"><span>Remember me!</span>
                        <button type="button" class="submit-btn" onclick="openLogin()">I've an account!</button>
                        <a href="#">Forgot Password?</a>
                     </form>
                </div>
            </div>
        </div>
     </div>
     <script>
        var card = document.getElementById("card");
        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }
     </script>
</body>
</html>
<?php
function isAdmin() {
    return isset($_SESSION['admin_email']) && in_array($_SESSION['admin_email'], ['sabrina@gmail.com', 'mehlaqa@gmail.com']);
}
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $re_email = $_POST['re_email'];
    $re_password = $_POST['re_password'];
    $hash_password = password_hash($re_password, PASSWORD_DEFAULT);
    
    $select_query = "SELECT * FROM `admin_table` WHERE admin_email='$re_email'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);
    
    if ($rows_count > 0) {
        echo "<script>alert('Username and Email already exist.')</script>";
    } else {
        $insert_query = "INSERT INTO `admin_table` (admin_name, admin_email, admin_password)
                        VALUES ('$username', '$re_email', '$hash_password')";
        $sql_execute = mysqli_query($con, $insert_query);
        
        if ($sql_execute) {
            echo "<script>alert('Data inserted successfully.')</script>";
        } else {
            die(mysqli_error($con));
        }
    }
}

?>
<?php

if (isset($_POST['login'])) {
    $email = $_POST['admin_email'];
    $password = $_POST['admin_password'];

    // Query the database to check if the email exists
    $select_query = "SELECT admin_email, admin_password FROM admin_table WHERE admin_email = '$email'";
    $result = mysqli_query($con, $select_query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $stored_email = $row['admin_email'];
        $stored_password = $row['admin_password'];

        // Verify the entered password with the stored password
        if (password_verify($password, $stored_password)) {
            $_SESSION['admin_email'] = $stored_email;

            if (isAdmin()) {
                // Redirect to the admin panel after successful login
                header('Location: index.php');
                exit();
            } else {
                echo "<script>alert('You are not authorized to access the admin panel.')</script>";
            }
        } else {
            echo "<script>alert('Invalid password.')</script>";
        }
    } else {
        echo "<script>alert('Invalid email.')</script>";
    }
} else {
    die(mysqli_error($con));
}

?>

