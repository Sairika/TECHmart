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
    <title>TECH-Mart</title>
    <link rel="stylesheet" href="Homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
    <!--header starts-->
    <div id="page" class="site page-single">
        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head">
                    <div class="logo"><a href="#"><span class="circle"></span>.TECHmart</a></div>
                    <a href="" class="t-close flexcenter"><i class="ri-close-line"></i></a>
                </div>
            </div>
                <div class="departments">All departmarts</div>
                <nav></nav>
                <div class="thetop-nav"></div>
            </div>
        </aside>
        <header>
<div class="header-top mobile-hide">
    <div class="container">
        <div class="wrapper flexitem">
            <div class="left">
                <ul class="flexitem main-links">
                    <li><a href="./blog.php">Blog</a></li>
                    <li><a href="./Featured_products.php">Featured products</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="right">
                <ul class="flexitem main-links">
                    <li>
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
                        <li><a href="./order_tracking.php">Order Tracking</a></li>
                        <li><a href="">Language
                            <i class="ri-arrow-down-s-line"></i></a>
                            <ul>
                                <li class="current"><a href="">English</a></li>
                                <li><a href="">Bangla</a></li>
                            </ul>
                        </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>        
<!-----header-top starts------>
 <!------header nav starts--->
 <div class="header-nav">
    <div class="container">
        <div class="wrapper flexitem">
            <a href="#" class="trigger desktop-hide"><i class="ri-menu-2-line"></i></a>
            <div class="left flexitem">
                <div class="logo"><a href="/"><span class="circle">.TECHmart</span></a></div>
                <nav class="mobile-hide">
                    <ul class="flexitem second-links">
                        <li><a href="./Homepage.php">Home</a></li>
                        <li><a href="./Home.php">Shop</a></li>
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
<!--all departments start-->
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
<!----header-top ends------->
        <!--header ends-->

<!--main starts-->
<main>
<?php
// Assuming you have a database connection established

function getProductDetails($productId) {
    global $con;
    
    // Fetch the product details from the database based on the given product ID
    $query = "SELECT * FROM `products` WHERE product_id = $productId";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    
    // Extract the product details from the fetched row
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];
    $product_price = $row['product_price'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];

    // Fetch the stock status and SKU from the database or any other source
    $stockStatus = "In stock";
    $sku = "SKU-881";

    // Fetch the color options from the database
    $colors = [
        ['id' => 'cogray', 'name' => 'Gray'],
        ['id' => 'cowhite', 'name' => 'White'],
        ['id' => 'cosilver', 'name' => 'Silver'],
        ['id' => 'coblack', 'name' => 'Black'],
    ];

    // Fetch the size options from the database
    $sizes = [
        ['id' => 'size65', 'name' => '6\'5"'],
        ['id' => 'size66', 'name' => '6\'6"'],
        ['id' => 'size67', 'name' => '6\'7"'],
    ];

    // Prepare the product description HTML
    $description = "
        <ul>
            <!--fourth list-->
            <li class='has-child'>
                <a href='#' class='icon-small'>Review<span class='mini-text'></span></a>
                <div class='content'>
                    <div class='reviews'>
                        <h4>Customer Reviews</h4>
                        <div class='review-block'>   
                            <div class='review-block-head'>
                                <div class='flexitem'>
                                    <span class='rate-sum'>5.0</span>
                                    <span>(220 reviews)</span>
                                </div>
                                <a href='Review-form' class='secondary-button'>Write Review</a>
                            </div>
                            <div class='review-block-body'>
                                <ul>
                                    <li class='item'>
                                        <div class='review-form'>
                                            <p class='person'>Review by Samia</p>
                                            <p class='mini-text'>0n 02/03/2023</p>
                                        </div>
                                        <div class='review-rating rating'>
                                            <div class='stars'></div>
                                        </div>
                                        <div class='review-title'>
                                            <p>Awesome Page and products</p>
                                        </div>
                                        <div class='review-text'>
                                            <p>The support page of TechMart offers comprehensive FAQs, troubleshooting guides, and 
                                            contact information, ensuring customers receive prompt assistance and solutions to their 
                                            queries</p>
                                        </div>
                                    </li>
                                    <li class='item'>
                                        <div class='review-form'>
                                            <p class='person'>Review by Sunjida</p>
                                            <p class='mini-text'>0n 02/03/2023</p>
                                        </div>
                                        <div class='review-rating rating'>
                                            <div class='stars'></div>
                                        </div>
                                        <div class='review-title'>
                                            <p>Awesome Page</p>
                                        </div>
                                        <div class='review-text'>
                                            <p>TechMart's newsletter subscription page allows users to stay updated on the 
                                            latest tech trends, exclusive offers, and upcoming product releases, keeping them 
                                            informed and engaged.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class='second-links'>
                                    <a href='#' class='view-all'>View All
                                        <i class='ri-arrow-right-line'></i>
                                    </a>
                                </div>
                            </div>
                            <div id='review-form' class='review-form'>
                                <h4>Write a review</h4>
                                <div class='rating'>
                                    <p>Are you satisfied enough?</p>
                                    <div class='rate-this'>
                                        <input type='radio' name='rating' id='star5'>
                                        <label for='star5'><i class='ri-star-fill'></i></label>
                                        <input type='radio' name='rating' id='star4'>
                                        <label for='star4'><i class='ri-star-fill'></i></label>
                                        <input type='radio' name='rating' id='star3'>
                                        <label for='star3'><i class='ri-star-fill'></i></label>
                                        <input type='radio' name='rating' id='star2'>
                                        <label for='star2'><i class='ri-star-fill'></i></label>
                                        <input type='radio' name='rating' id='star1'>
                                        <label for='star1'><i class='ri-star-fill'></i></label>
                                    </div>
                                </div>
                                <form action=''>
                                    <p><label for=''>Name</label>
                                        <input type='text'></p>
                                    <p><label for=''>Summary</label>
                                        <input type='text'></p>
                                    <p><label for=''>Review</label>
                                        <textarea cols='30' rows='10'>Submit Review</textarea>
                                    <p class='primary-button'><a href=''>Submit</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>";

    // Prepare the HTML output
    $output = "
         <main>
           <div class='single-product'>
            <div class='container'>
                <div class='wrapper'>
                    <div class='breadCrumb'>
                        <ul class='flexitem'>
                            <li><a href='Homepage.html'>Home</a></li>
                            <li><a href='#'>$product_title</a></li>
                        </ul>
                    </div>
                    <!--------breadcrumb--------->
                    <div class='column'>
                        <div class='products one'>
                            <div class='flexwrap'>
                                <div class='row'>
                                    <div class='item is_sticky'>
                                        <div class='price'>
                                            <span class='discount'>11%<br>Off</span>
                                        </div>
                                        <div class='big-image'>
                                            <div class='big-image-wrapper swiper-wrapper'>
                                                <div class='image-show swiper-slide'>
                                                    <a data-fslightbox href='./Admin_area/product_images/$product_image1'>
                                                        <img src='./Admin_area/product_images/$product_image1' style='object-fit:contain;'>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class='swiper-button-next'></div>
                                            <div class='swiper-button-prev'></div>
                                        </div>
                                        <div thumbSlider='' class='small-image'>
                                            <ul class='small-image-wrapper flexitem swiper-wrapper'>
                                                <li class='thumbnail-show swiper-slide'>
                                                    <a data-fslightbox href='./Admin_area/product_images/$product_image2' style='object-fit:contain;'>
                                                        <img src='./Admin_area/product_images/$product_image2'>
                                                    </a>
                                                </li>
                                                <li class='thumbnail-show swiper-slide'>
                                                    <a data-fslightbox href='./Admin_area/product_images/$product_image3' style='object-fit:contain;'>
                                                        <img src='./Admin_area/product_images/$product_image3'>
                                                    </a>
                                                </li>
                                                <li>
                                                $product_keywords</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='item'>
                                        <h1>$product_title</h1>
                                        <div class='content'>
                                            <div class='stock-sku'>
                                                <span class='available'>$stockStatus</span>
                                                <span class='sku mini-text'>$sku</span>
                                            </div>
                                            <div class='price'>
                                                <span class='current'>$product_price</span>
                                            </div>
                                            <div class='colors'>
                                                <p>Color</p>
                                                <div class='varient'>
                                                    <form action=''>
                                                        ";
                                                         foreach ($colors as $color) {
                                                           $output .= "
                                                            <p>
                                                                <input type='radio' name='color' id='{$color['id']}'>
                                                                <label for='{$color['id']}' class='circle'></label>
                                                            </p>
                                                        ";
                                                        }
                                                $output .= "
                                                    </form>
                                                </div>
                                            </div>
                                            <div class='sizes'>
                                                <p>Sizes</p>
                                                <div class='varient'>
                                                    <form action=''>
                                                        ";
                                                  foreach ($sizes as $size) {
                                                         $output .= "
                                                            <p>
                                                                <input type='radio' name='size' id='{$size['id']}'>
                                                                <label for='{$size['id']}' class='circle'>
                                                                    <span>{$size['name']}</span>
                                                                </label>
                                                            </p>
                                                        ";
                                                        }
                                               $output .= "
                                                    </form>
                                                </div>
                                            </div>
                                            <div class='actions'>
                                            <div class='button-cart'>
                                            <button class='primary-button'><a href='Home.php?add_to_cart=$product_id'>Add to cart</a></button>
                                            </div>
                                            <div class='wish-share'>
                                            <ul class='flexitem second-links'>
                                                <li><a href=''>
                                                    <span class='icon-large'><i class='ri-heart-line'></i></span>
                                                    <span>Wishlist</span>
                                                </a></li>
                                                <li><a href=''>
                                                    <span class='icon-large'><i class='ri-share-line'></i></span>
                                                    <span>Share</span>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                            <h1>More Details</h1>
                                            $product_description
                                            $description
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>";

    return $output;
}

// Example usage: Assuming the product ID is passed through the URL parameter 'product_id'
if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];
    $productDetails = getProductDetails($productId);
    
    // Display the product details on the page
    echo $productDetails;
}
?>  
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
<!--div class="menu-bottom destop-hide">
    <div class="container">
        <div class="wrapper">
            <nav>
                <ul class="flexitem">
                    <li><a href="#">
                        <i class="ri-bar-chart-line"></i>
                        <span>Trending</span>
                    </a></li>
                    <li><a href="#">
                        <i class="ri-user-6-line"></i>
                        <span>Account</span>
                    </a></li>
                    <li><a href="#">
                        <i class="ri-heart-line"></i>
                        <span>Wishlist</span>
                    </a></li>
                    <li><a href="#" class="t-search">
                        <i class="ri-search-line"></i>
                        <span>Search</span>
                    </a></li>
                    <li><a href="#">
                        <i class="ri-shopping-cart-line"></i>
                        <span>Cart</span>
                        <div class="fly-item">
                            <div class="span item-number">0</div>
                        </div>
                    </a></li>
                </ul>
            </nav>
        </div>
    </div>
</div-->
<!--menu-bottom-->
<div class="search-bottom destop-hide">
    <div class="container">
        <div class="wrapper">
            <form action="" class="search">
                <a href="" class="t-close search close flexcenter">
                    <i class="ri-close-line"></i></a>
                <span class="icon-large"><i class="ri-mai-line"></i></span>
                <input type="search" placeholder="Search for products:" required>
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    <!--search bottom-->
    <div class="overlay"></div>
</div>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.3.1/index.js"></script>
<script src="script.js"></script>
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
</body>
</html>