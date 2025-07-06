 <!--connect file-->
 <?php
include('include/connect.php');
include('Functions/common_function.php');
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECHmart Homepage</title>
    <link rel="stylesheet" href="Homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
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
                        <li><a href="#">Featured Products</a></li>
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
                           //if(!isset($_SESSION['user_email'])){
                           // echo "<li class='nav-item'><a class='nav-link' href='#'>Welcome Guest</a></li>";
                           // }
                           //else{
                           // echo "<li class='nav-item'><a class='nav-link' href='#'>Welcome ".$_SESSION['user_email']."</a></li>";
                           //}
                           // if(isset($_SESSION['user_email'])){
                           // echo "<li class='nav-item'><a class='nav-link' href='./User_area/signin.php'>Login</a></li>";
                           // }
                           //else{
                           //echo "<li class='nav-item'><a class='nav-link' href='./User_area/logout.php'>Logout</a></li>";
                           //}
                     ?>
                     </ul>
                     </li-->
                        <li><a href="./order_tracking.php">Order Tracking</a></li>
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
                             <li><a href="./cart.php">
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
              <i class="ri-menu-3-line ri-xl toggle-icon"></i>
              <i class="ri-close-line ri-xl toggle-icon"></i>
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
        <!--div class="right">
            <div class="search-box" style="margin-left:500px;">
                <form action="search_product.php" method="get">
                    <input type="search" placeholder="Search for products" name="search_data"  style="width:500px;border-radius:10px">
                    <input type="submit" value="search" class="primary-button" name="search_data_product">
                </form>
            </div>
        </div-->
    </div>
  </div>
</div>
    <!--all department end-->
    </header>
<!------------------header ends------------->
<!------------------main starts------------->
<main>  

<!---------------featured Products----------->
        <div class="features">
        <div class="container">
        <div class="wrapper">
        <div class="column">
                <div class="sectop flexitem">
                        <h2><span class="circle"></span><span>Featured Products</span></h2>
                        <div class="second-links">
                            <a href="" class="view-all">View All<i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                    <!---first part-->
                    <div class="products main flexwrap">
                    <?php
                    // SQL query to fetch products from the database
                     $sql = "SELECT * FROM `products` order by rand() limit 0,16";
                     $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Display product information
                        echo '<div class="item">';
                        echo '<div class="media">';
                        echo '<div class="thumbnail object-cover">';
                        echo '<a href="view_more.php?product_id=' . $row["product_id"] . '">';
                        echo '<img src="./Admin_area/product_images/' . $row["product_image1"] . '" width="50%">';
                        echo '</a>';
                        echo '</div>';
                        echo '<div class="hoverable">';
                        echo '<ul>';
                        echo '<li class="active"><a href="Home.php?add_to_cart=' . $row["product_id"] . '"><i class="ri-shopping-cart-line"></i></a></li>';
                        echo '<li><a href=""><i class="ri-eye-line"></i></a></li>';
                        echo '<li><a href=""><i class="ri-shuffle-line"></i></a></li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<div class="discount circle flexcenter"><span>20%</span></div>';
                        echo '</div>';
                        echo '<div class="content">';
                        echo '<div class="rating">';
                        echo '<div class="stars"></div>';
                        echo '<span class="mini-text">2345</span>';
                        echo '</div>';
                        echo '<h3 class="main-links"><a href="">' . $row["product_title"] . '</a></h3>';
                        echo '<div class="price">';
                        echo '<span class="current">$' . $row["product_price"] . '</span>';
                        echo '<span class="normal mini-text">$' . $row["product_price"] . '</span>';
                        echo '</div>';
                        echo '<div class="stock mini-text">';
                        echo '<div class="qty">';
                        echo '<span>Stock:<strong class="qty-available">234</strong></span>';
                        echo '<span>Sold:<strong class="qty-sold">2345</strong></span>';
                        echo '</div>';
                        echo '<div class="bar">';
                        echo '<div class="available"></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No products found.";
                }
                ?>        
            </div>
        </div>
    </div>
</div>
<!---latest Products-->
<!----------------------------------banners starts-------------------------------------->
<div class="banners">
    <div class="container">
        <div class="wrapper">
            <div class="column">
                <div class="banner flexwrap">
                    <div class="row">
                        <div class="item get-gray">
                            <div class="image">
                                <img src="./Photos/feature1.jpg" width="100%" height="510px">
                            </div>
                            <div class="text-content flexcol">
                                <h3>Brutal Sale</h3>
                                <h4><span>Get the deal in here.</span><br>Combo Set</h4>
                                <a href="#" onclick="redirectToShop()" class="primary-button">Shop Now</a>
                            </div>
                            <a href="" class="over-link"></a>
                        </div> 
                </div>
                <div class="row">
                    <div class="item get-gray">
                        <div class="image">
                            <img src="./Photos/feature2.jpg" width="100%" height="510px">
                        </div>
                    <div class="text-content flexcol">
                        <h3>Brutal Sale</h3>
                        <h4><span>Discount Everyday</span></h4>
                        <a href="#" onclick="redirectToShop()" class="primary-button">Shop Now</a>
                    </div>
                    <a href="" class="over-link"></a>
                </div>
            </div>
      </div>
<!---banners-->
</div>
</div>
</div>
</div>
</div>
<!----------banners----------->
    </main>
<!------------------main ends--------------->
<!---------------footer starts-------------->
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
</div>
<script src="script.js"></script>
<script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    $(document).ready(function() {
  $('.dpt-trigger').click(function() {
    $('.dpt-menu').slideToggle();
  });
});
</script>
<style>
    .dpt-menu {
  display: none;
}
</style>
<script>
        function redirectToShop() {
            window.location.href = 'Home.php';
        }
</script>
</body>
</html>