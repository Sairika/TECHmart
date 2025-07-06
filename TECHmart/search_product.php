<!--connect file-->
<?php
include('include/connect.php');
include('Functions/common_function.php');
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>TECHmart</title>
  <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <!-- Bootstrap CSS v5.2.1 -->
  <!--link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"-->
  <link rel="stylesheet" href="Homepage.css">
  <style>
    /*products*/
body{
    overflow-x:hidden;
}
.product-section{
    width:1100px;height:auto;margin-left: 340px;
}
.heading
{
    text-align:center; font-size: 48px; color:#a9a9a9; padding:0.8rem;margin:2rem 0;width:1100px;
    background:darkslateblue;text-shadow: 1px 1px 1px #9da3a5; box-shadow: rgba(17,12,0.15) 0px 24px 50px 0px;
}
.heading span
{
    color:#444444;padding:1rem 0;line-height:1.5;
}
.products .box-container
{
    display:flex;flex-wrap:wrap;gap:1.25rem;max-width:1100px; width:100%;padding-top:10px;padding-bottom:2rem;
}
.products .box-container .box
{
    border-radius:.5rem;flex:1 1 20rem;box-shadow:0 .5rem 1.5rem purple;
    border:.2rem solid #444444;position:relative;
}
.products .box-container .box .discount
{
    position:absolute;top:1rem;left:1rem;padding:.7rem 1rem;font-size:2rem;
    color:olive;background:transparent;z-index:1;
    border-radius:.5rem;
} 
.products .box-container .box .image
{
    position:relative;text-align: center;padding-top: 2rem;overflow:hidden;max-width:
    object-fit:contain;width:100%;
}
/*removable*/
.products .box-container .box .image img
{
    position:relative;text-align: center;padding-top: 2rem;overflow:hidden;max-width:200px;
    object-fit:contain;width:100%;height:200px;
}
.products .box-container .box .image .icons
{
    position:absolute;display:flex;bottom:-7rem;left:0;right:0;font-size:16px;transition: hover 1s;
}
.products .box-container .box:hover .image .icons
{
    bottom:0;left:0;right:0;background-color:#444444;
}
.products .box-container .box .image .icons a
{
    height:5rem;line-height:5rem;font-size:2rem;width:40%;background:#6469f5;
    color:#fff;
}
.products .box-container .box .image .icons i
{
    cursor:pointer;
}
.products .box-container .box .image .icons .cart-btn
{
    border-left:.1rem solid #fff7;border-right:.1rem solid #fff7;width:100%;width:300px;
}
.products .box-container .box .content
{
    padding:1rem;text-align: center;
}
.products .box-container .box .content h3
{
    font-size:1.25rem;color:#333;
}
.products .box-container .box .content .price
{
    font-size:2rem;color:darkmagenta;font-weight: bolder;padding-top: 1rem;
}
.products .box-container .box .content .price span
{
    font-size:1.5rem;color:#999;font-weight:lighter;
    text-decoration: line-through;
}
.products .box-container .box .image .icons a:hover
{
   background: #333;
}
.products .rating .stars{
    width:80px;height: 20px;text-align: center;justify-content: center;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' height='16'%3E%3Cpath d='M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z' fill='rgba(234,113,46,1)'%3E%3C/path%3E%3C/svg%3E");
    background-position-y:top;background-repeat-y: no-repeat;
}
/*products*/
hr{
    margin-top:15px;
    box-sizing:border-box;
}
</style>

</head>

<body>
<header>
    <!------header top starts----->
    <div class="header-top mobile-hide">
        <div class="container">
            <div class="wrapper flexitem">
                <div class="left">
                    <ul class="flexitem main-links">
                        <li><a href="blog.php">Blog</a></li>
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
                        <!--li><a href="">My Account<span class="icon-small">
                        <i class="ri-arrow-down-s-line"></i></span></a>
                        <ul>
                        <?php
                        // if(!isset($_SESSION['user_email'])){
                        //  echo "<li class='nav-item'><a class='nav-link' href='#'>Welcome Guest</a></li>";
                        //  }
                        // else{
                        //  echo "<li class='nav-item'><a class='nav-link' href='#'>Welcome ".$_SESSION['user_email']."</a></li>";
                        // }
                        //  if(isset($_SESSION['user_email'])){
                        //  echo "<li class='nav-item'><a class='nav-link' href='./User_area/signin.php'>Login</a></li>";
                        //  }
                        //else{
                        // echo "<li class='nav-item'><a class='nav-link' href='./User_area/logout.php'>Logout</a></li>";
                        // }
                     ?>
                     </ul>
                     </li-->
                        <li><a href="order_tracking.php">Order Tracking</a></li>
                        <!--li><a href="#">Payment Method<span class="icon-small">
                            <i class="ri-arrow-down-s-line"></i></span></a>
                            <ul>
                                <li class="current"><a href="">Cash on Delivery</a></li>
                                <li><a href="">Bikash</a></li>
                                <li><a href="">Card</a></li>
                                <li><a href="">Rocket</a></li>
                            </ul>
                        </li-->
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
                <div class="right" style="margin-left: auto;">
                    <ul class="flexitem second-links">
                        <li class="mobile-hide"><a href="#">
                            <!--div class="icon-large"><i class="ri-heart-line"></i>
                                <div class="fly-item"><span class="item-number">3</span></div-->
                            </a></li>
                        <li class="iscart"><a href="./cart.php">
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
    <!------header nav ends----->
    <!---all departments start-->
    <div class="header-main mobile-hide">
        <div class="container">
            <div class="wrapper flexitem">
                <div class="left">
                    <div class="dpt-cat">
                        <div class="dpt-head">
                            <div class="main-text">All Products</div>
                            <div class="mini-text mobile-hide">Total 200 products</div>
                            <a href="#" class="dpt-trigger mobile-hide">
                                <i class="ri-menu-3-line ri-xl"></i>
                            </a>
                        </div>
                        <div class="dpt-menu">
                            <ul class="second-links">
                                <li class="has-child smartphone">
                                    <a href="#">
                                        <div class="icon-big"><i class="ri-box-line"></i></div>
                                        <h3>All Categories</h3>
                                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                    </a>
                                </li>
                                <?php getcategories(); ?>
                                <li class="has-child laptop"><a href="#">
                                <div class="icon-big"><i class="ri-box-line"></i></div>
                                <h3>All Brands</h3>
                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                </a>
                                </li>
                                <?php getbrands(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right">
                   <div class="search-box">
                       <form action="search_product.php" class="search" method="get">
                            <ul class="flexitem">
                            <span class="icon-large"><i class="ri-search-line"></i></span>
                            <input type="search" placeholder="Search for products" name="search_data">
                            <!--input type="submit" name="search_data_product" value="Search" class="primary-button"-->
                            <button type="submit" name="search_data_product">Search</button>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--all department end-->
    </header>
    <?php
    //Calling cart function
    cart();
    ?>
<!-----------------------original one------------------------>
<main style="min-height:160vh;">
<div class="container">
   <div class="wrapper">
      <div class="product-section">
          <section class="products" id="products">
             <!--h1 class="heading">Results<span></span></h1-->
                <div class="box-container">
                   <?php
                     search_product(); 
                     get_unique_categories();
                     get_unique_brands();
                     getIPAddress();
                   ?>
                </div>
            </section>
        </div> 
    </div> 
    </div> 
</main>
<hr>
<div class="container">
<?php
    include('./testimonial.php');
?>
</div>
    <!----forth child--->
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
</div>
<!--footer ends-->
  <!-- Bootstrap JavaScript Libraries -->
  <!--script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"-->
  </script>
</body>
</html>

