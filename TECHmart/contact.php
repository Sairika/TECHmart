<?php
include('include/connect.php');
include('Functions/common_function.php');
@session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
    $user_message = mysqli_real_escape_string($con, $_POST['user_message']);
    $user_ip_address = getIPAddress(); // Make sure you define this function

    // Insert contact details into the database
    $insert_query = "INSERT INTO `contact` (user_name, user_email, user_message, user_ip_address) 
                     VALUES ('$user_name', '$user_email', '$user_message', '$user_ip_address')";
    
    if (mysqli_query($con, $insert_query)) {
        echo "<script>alert('Your message has been submitted successfully. We will get in touch with you soon.')</script>";
    } else {
        echo "<script>alert('Error submitting your message. Please try again later.')</script>";
    }
}
?>
          

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECH-Mart</title>
    <link rel="stylesheet" href="contact_us.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
    <div id="page" class="site">
        <div class="_bg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000b76" fill-opacity="1" d="M0,128L15,149.3C30,171,60,213,90,197.3C120,181,150,107,180,80C210,53,240,75,270,106.7C300,139,330,181,360,213.3C390,245,420,267,450,229.3C480,192,510,96,540,96C570,96,600,192,630,197.3C660,203,690,117,720,90.7C750,64,780,96,810,133.3C840,171,870,213,900,234.7C930,256,960,256,990,250.7C1020,245,1050,235,1080,218.7C1110,203,1140,181,1170,170.7C1200,160,1230,160,1260,176C1290,192,1320,224,1350,240C1380,256,1410,256,1425,256L1440,256L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path></svg>
        </div>
        <div class="container">
         <!------header starts------->
            <header>
                <nav>
                    <div class="logo">
                        <a href="#">.TECHmart</a>
                    </div>
                    <ul>
                        <li><a href="Homepage.php">Home</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="Home.php">Products</a></li>
                        <li><a href="./User_area/profile.php">My Account</a></li>
                        <li><a href="./about.php">Who we are</a></li>
                    </ul>
                    <a href="#"><ion-icon size="large" name="menu-outline"></ion-icon></a>
                </nav>
            </header>
            <!------header ends-------->
            <main>
                <div class="contact">
                    <div class="split">
                        <div class="left">
                            <h1>Contact Us</h1>
                            <p>How can we help? We hear you!</p>
                            <form method="POST">
                            <p><input type="text" name="user_name" placeholder="Enter your name:" required></p>
                            <p><input type="email" name="user_email" placeholder="Enter your mail:" required></p>
                            <p><textarea name="user_message" rows="7" placeholder="Write here. We are listening.." required></textarea></p>
                            <p><input type="submit" class="button" value="Submit"></p>
                        </form>
                        </div>
                        <div class="middle">
                            <div class="image">
                                <img src="./Photos/contact.png">
                            </div>
                            <div class="address">
                                <ul>
                                    <li><ion-icon name="location"></ion-icon>Pahartoli,Chittagong</li>
                                    <li><ion-icon name="call"></ion-icon>
                                        <a href="tel:+8801846772444">01846772444</a></li>
                                    <li><ion-icon name="mail"></ion-icon>
                                        <a href="mailto:sairikajamal@gmail.com">sairikajamal@gmail.com</a>
                                    </li>
                                    <li><ion-icon name="chatbubbles"></ion-icon>24/7 supports</li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <ul>
                                <li>
                                    <a href="">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <ion-icon name="logo-instagram"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <ion-icon name="logo-twitter"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <ion-icon name="logo-linkedin"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <ion-icon name="logo-pinterest"></ion-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<script src="script.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>