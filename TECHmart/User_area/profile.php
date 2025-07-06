<!--connect file-->
<?php
include('../include/connect.php');
include('../Functions/common_function.php');
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>TECHmart</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="../Homepage.css">

</head>

<body>
   <!--header starts-->
<div id="page" class="site page-home">
    <aside class="site-off desktop-hide">
        <div class="off-canvas">
            <div class="canvas-head flexitem">
                <div class="logo"><a href="/">
                    <span style="color:#8a8a8a;"class="circle">.TECHmart</span></a></div>
                    <a href="#" class="t-close flexcenter"><i class="ri-close-line"></i></a>
            </div>
            <div class="departments">

            </div>
            <nav></nav>
            <div class="thetop-nav">
            </div>
        </div>
    </aside>
<!------------------header starts------------->
    <header>
    <!------header top starts----->
    <div class="header-top mobile-hide">
        <div class="container">
            <div class="wrapper flexitem">
                <div class="left">
                    <ul class="flexitem main-links">
                        <li><a href="./blog.php">Blog</a></li>
                        <li><a href="Featured_products.php">Featured Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="right">
                    <ul class="flexitem main-links">
                    <li><?php
                    if(isset($_SESSION['user_email'])){
                        echo  "<li class='nav-item'><a class='nav-link' href='./User_area/profile.php'>My Account</a></li>"; 
                    }
                    else{
                        echo"<li class='nav-item'><a class='nav-link' href='./User_area/signin.php'>Sign Up</a></li>";
                    }
                    ?></li>
                         <!--li><a href="./User_area/profile.php">My Account<span class="icon-small">
                        <i class="ri-arrow-down-s-line"></i></span></a>
                        <ul>
                        <?php
                        //  if(!isset($_SESSION['user_email'])){
                        //   echo "<li class='nav-item'><a class='nav-link' href='#'>Welcome Guest</a></li>";
                        //   }
                        //  else{
                        //   echo "<li class='nav-item'><a class='nav-link' href='#'>Welcome ".$_SESSION['user_email']."</a></li>";
                        //  }
                        //   if(isset($_SESSION['user_email'])){
                        //   echo "<li class='nav-item'><a class='nav-link' href='./User_area/signin.php'>Login</a></li>";
                        //   }
                        // else{
                        //  echo "<li class='nav-item'><a class='nav-link' href='./User_area/logout.php'>Logout</a></li>";
                        //  }
                     ?>
                     </ul>
                     </li-->
                        <li><a href="./order_tracking.php">Order Tracking</a></li>
                        <li><a href="#">Language<span class="icon-small">
                            <i class="ri-arrow-down-s-line"></i></span></a>
                            <ul>
                                <li class="current"><a href="">English</a></li>
                                <li><a href="">Bangla</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    //Calling cart function
    cart();
    ?>
    <!------header top ends----->
    <!------header nav starts--->
    <div class="header-nav">
        <div class="container">
            <div class="wrapper flexitem">
                <a href="#" class="trigger desktop-hide"><i class="ri-menu-2-line"></i></a>
                <div class="left flexitem">
                    <div class="logo"><a href="/"><span class="circle">.TECHmart</span></a></div>
                    <nav class="mobile-hide">
                        <ul class="flexitem second-links">
                            <li><a href="Homepage.php">Home</a></li>
                            <li><a href="Home.php">Shop</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="right" style="margin-left:auto;">
                    <ul class="flexitem second-links">
                        <li class="mobile-hide"><a href="#">
                            <!--div class="icon-large"><i class="ri-heart-line"></i>
                                <div class="fly-item"><span class="item-number">3</span></div-->
                            </a></li>
                             <li><a href="../cart.php">
                             <div class="icon-large"><i class="ri-shopping-cart-line"></i>
                                <div class="fly-item"><span class="item-number"><?php cart_item();?></span></div>
                             </div>
                             <div class="icon-text">
                                <div font-weight:500;>Total:</div>
                                <div class="cart-total" style="font-weight:600;">
                                $<?php total_cart_price();?>.00</div>
                             </div>
                        </a>
                       </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
                                        
</header>
<!------------------header ends------------->
<!------------------main starts------------->
  <main>
     <!---all departments start-->
    <div class="header-main mobile-hide">
        <div class="container">
            <div class="wrapper flexitem">
                <div class="left">
                <div class="dpt-cat">
                        <div class="dpt-head">
                            <div class="main-text">My Account</div>
                            <a href="#" class="dpt-trigger mobile-hide">
                                <i class="ri-menu-3-line ri-xl"></i>
                                <i classs="ri-menu-close-line"></i>
                            </a>
                        </div>
                        <div class="dpt-menu">
                            <ul class="second-links">
                                <li class="has-child smartphone"><img src="../Photos/undraw_icons_wdp4.png" width="300px" style="object-fit:cover;"></li>
                                <li class="has-child laptop">
                                    <a href="profile.php?user_email">
                                        <h4>Pending Orders<i class="ri-arrow-right-s-line"></i></h4></a></li>
                                <li class="has-child ipad"><a href="profile.php?edit_account">
                                    <h4>Edit Account<i class="ri-arrow-right-s-line"></i></h4></a></li>
                                <li class="has-child gadget"><a href="profile.php?my_orders">
                                    <h4>My Orders<i class="ri-arrow-right-s-line"></i></h4></a>
                                </li>
                                <li class="has-child smartwatch"><a href="profile.php?delete_account">
                                <h4>Delete Account<i class="ri-arrow-right-s-line"></i></h4></a>
                                </li>
                                <li class="has-child drone"><a href="logout.php">
                                    <h4>Log Out<i class="ri-arrow-right-s-line"></i></h4></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right">
                </div>
            </div>
        </div>
    </div>
    <!-----user functionality----->
    <div class="slider">
        <div class="container" style="height:100vh;">
    <?php
    function get_user_order_details(){
        global $con;
            $user_email=$_SESSION['user_email'];
            $get_details="Select * from `user_table` where user_email='$user_email'";
            $result_query=mysqli_query($con,$get_details);
            while ($row_query=mysqli_fetch_array($result_query)){
                $user_id=$row_query['user_email'];
                if(!isset($_GET['edit_account'])){
                    if(!isset($_GET['my_orders'])){
                       if(!isset($_GET['delete_account'])){
                         $get_order="Select * from `user_orders` where user_id='$user_id' and order_status='pending'";
                         $result_order_query=mysqli_query($con,$get_order);
                         $row_count=mysqli_num_rows($result_order_query);
                         if($row_count>0){
                            echo "<h3 style='margin-left:600px;font-size:3em;'>You have <span class='text-danger'>$row_count</span> Orders.</h3>
                            <a href='profile.php?my_orders'>Order Details</a>";
                         }
                         else{
                            echo "<h3 style='margin-left:600px;font-size:3em;padding-top:200px;'>You have 0 Orders</h3>
                            <a href='../Home.php' style='margin-left:600px;font-size:1.5em;text-decoration:underline;'>Explore Products</a>";
                         }
                       }
                    }
                }
            }
        }
        get_user_order_details();
        if(isset($_GET['edit_account'])){
            include('./edit_account.php');
        }
        if(isset($_GET['my_orders'])){
            include('./user_orders.php');
        }
        if(isset($_GET['delete_account'])){
            include('./delete_account.php');
        }
        ?>
        </div>
    </div>
  </main>
  <!--footer starts-->
<footer>
    <!---newslater starts-->
    <div class="newslater">
        <div class="container">
            <div class="wrapper">
                <div class="box">
                    <div class="content">
                        <h3>Join Our Newsletter!</h3>
                        <p>Get E-mail updates about our latest shop and
                        <strong>special offers</strong></i></p>
                    </div>
                    <form action="" class="search flexitem">
                        <span class="icon-large"><i class="ri-mai-line"></i></span>
                        <input type="mail" placeholder="Enter your email:" required>
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--newslater ends-->
    <div class="widgets">
        <div class="container">
            <div class="wrapper">
                <div class="flexwrap">
                    <div class="row">
                        <div class="item mini-links">
                            <h4>Help and Contact</h4>
                            <ul class="flexcol">
                                <li><a href="#">Your Account</a></li>
                                <li><a href="#">Your Orders</a></li>
                                <li><a href="#">Shipping Rates</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Assistant</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item mini-links">
                            <h4>Product Categories</h4>
                            <ul class="flexcol">
                                <li class="li"><a href="">Laptop</a></li>
                                <li class="li"><a href="">SmartPhone</a></li>
                                <li class="li"><a href="">iPad</a></li>
                                <li class="li"><a href="">Drone and Camera</a></li>
                                <li class="li"><a href="">Mouse and Keyboard</a></li>
                                <li class="li"><a href="">Headphones</a></li>
                                <li class="li"><a href="">Electronic gadgets</a></li>
                                <li class="li"><a href="">Phone Case and Stickers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item mini-links">
                            <h4>Payment Info</h4>
                            <ul class="flexcol">
                                <li class="li"><a href="">Bussiness Card</a></li>
                                <li class="li"><a href="">Shop with points</a></li>
                                <li class="li"><a href="">Reload Your Banlance</a></li>
                                <li class="li"><a href="">Card</a></li>
                                <li class="li"><a href="">Paypal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item mini-links">
                            <h4>About Us</h4>
                            <ul class="flexcol">
                                <li class="li"><a href="">Store Info.</a></li>
                                <li class="li"><a href="">News</a></li>
                                <li class="li"><a href="">Policies</a></li>
                                <li class="li"><a href="">Customer Service</a></li>
                                <li class="li"><a href="">Customer Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----widgets---->
    <div class="footer-info">
        <div class="container">
            <div class="wrapper">
                <div class="flexcol">
                    <div class="logo">
                        <a href=""><span class="circle"></span>.TECHmart</a>
                    </div>
                    <div class="socials">
                         <ul class="flexitem">
                            <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                            <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                            <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                            <li><a href="#"><i class="ri-linkedin-line"></i></a></li>
                            <li><a href="#"><i class="ri-youtube-line"></i></a></li>
                         </ul>
                    </div>
                </div>
                <p>Copyright 2023 .TECHmart. All right reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!--footer ends-->
</body>
</html>
