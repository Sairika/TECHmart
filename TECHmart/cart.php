<!--connect file-->
<?php
include('include/connect.php');
include('Functions/common_function.php');
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>TECHmart-Cart Details</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="Homepage.css">
  <style>
    /* === CART PAGE SPECIFIC STYLES === */
    body {
        overflow-x: hidden;
    }
    
    /* Remove conflicting product-section styles */
    .product-section {
        width: 100%;
        height: auto;
        margin: 0;
        padding: 0;
    }
    
    /* Main container */
    .cart-main {
        padding: 2rem 0;
        min-height: 80vh;
    }
    
    /* Table Container */
    .table-container {
        background-color: rgba(255, 255, 255, 0.95);
        width: 95%;
        max-width: 1200px;
        margin: 0 auto 2rem auto;
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    /* Table Header */
    .table-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 1.5rem;
        text-align: center;
    }
    
    .table-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: white;
        margin: 0;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }
    
    /* Table Body */
    .table-body {
        padding: 1rem;
        background-color: white;
    }
    
    /* Table Styles */
    .cart-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 0;
    }
    
    .cart-table th {
        background-color: #f8f9fa;
        padding: 1rem;
        text-align: left;
        border-bottom: 2px solid #dee2e6;
        font-weight: 600;
        color: #495057;
        text-transform: uppercase;
        font-size: 0.875rem;
        letter-spacing: 0.05em;
    }
    
    .cart-table td {
        padding: 1rem;
        border-bottom: 1px solid #dee2e6;
        vertical-align: middle;
    }
    
    .cart-table tbody tr:hover {
        background-color: #f8f9fa;
        transition: background-color 0.3s ease;
    }
    
    /* Product Images */
    .product-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    
    /* Product Title */
    .product-title {
        font-size: 0.95rem;
        color: #495057;
        font-weight: 500;
        max-width: 200px;
        word-wrap: break-word;
        line-height: 1.4;
    }
    
    /* Form Controls */
    .form-input {
        width: 70px;
        padding: 0.5rem;
        border: 2px solid #e9ecef;
        border-radius: 6px;
        font-size: 0.875rem;
        text-align: center;
        background-color: #fff;
        transition: all 0.3s ease;
    }
    
    .form-input:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }
    
    .form-checkbox {
        width: 1.2rem;
        height: 1.2rem;
        accent-color: #667eea;
        cursor: pointer;
    }
    
    /* Buttons */
    .btn {
        padding: 0.6rem 1.2rem;
        border: none;
        border-radius: 6px;
        font-size: 0.875rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        margin: 0.25rem;
        min-width: 80px;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
    }
    
    .btn-secondary {
        background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
        color: white;
        border: none;
    }
    
    .btn-secondary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 107, 107, 0.4);
    }
    
    .btn-outline {
        background-color: transparent;
        color: #667eea;
        border: 2px solid #667eea;
    }
    
    .btn-outline:hover {
        background-color: #667eea;
        color: white;
        transform: translateY(-2px);
    }
    
    /* Price Display */
    .price-display {
        font-weight: 600;
        color: #28a745;
        font-size: 1.1rem;
    }
    
    /* Subtotal Section */
    .subtotal-section {
        background: linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%);
        padding: 2rem;
        width: 95%;
        max-width: 1200px;
        margin: 0 auto;
        border-radius: 12px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    
    .subtotal-section h3 {
        font-size: 1.8rem;
        color: #2d3436;
        margin: 0 0 1.5rem 0;
        font-weight: 600;
    }
    
    .subtotal-section .price {
        color: #d63031;
        font-weight: 800;
        font-size: 2rem;
    }
    
    .button-group {
        margin-top: 2rem;
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .button-group .btn {
        margin: 0;
        padding: 0.8rem 2rem;
        font-size: 1rem;
        font-weight: 600;
    }
    
    /* Empty Cart Message */
    .empty-cart {
        text-align: center;
        padding: 4rem 2rem;
        color: #6c757d;
        background-color: #f8f9fa;
        border-radius: 12px;
        margin: 2rem 0;
    }
    
    .empty-cart h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #495057;
        font-weight: 600;
    }
    
    .empty-cart p {
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }
    
    /* Action buttons in table */
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    
    /* Responsive Design */
    @media (max-width: 1200px) {
        .table-container {
            width: 98%;
        }
        
        .subtotal-section {
            width: 98%;
        }
    }
    
    @media (max-width: 768px) {
        .table-header h2 {
            font-size: 2rem;
        }
        
        .cart-table {
            font-size: 0.8rem;
        }
        
        .cart-table th,
        .cart-table td {
            padding: 0.5rem;
        }
        
        .product-image {
            width: 60px;
            height: 60px;
        }
        
        .form-input {
            width: 60px;
        }
        
        .btn {
            padding: 0.5rem 0.8rem;
            font-size: 0.8rem;
            min-width: 70px;
        }
        
        .action-buttons {
            flex-direction: column;
        }
        
        .button-group {
            flex-direction: column;
            align-items: center;
        }
        
        .button-group .btn {
            width: 100%;
            max-width: 300px;
        }
    }
    
    @media (max-width: 480px) {
        .cart-main {
            padding: 1rem 0;
        }
        
        .table-container {
            width: 100%;
            border-radius: 0;
        }
        
        .subtotal-section {
            width: 100%;
            border-radius: 0;
            padding: 1.5rem;
        }
        
        .subtotal-section h3 {
            font-size: 1.5rem;
        }
        
        .subtotal-section .price {
            font-size: 1.5rem;
        }
        
        /* Stack table on very small screens */
        .cart-table thead {
            display: none;
        }
        
        .cart-table tbody tr {
            display: block;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 1rem;
            padding: 1rem;
        }
        
        .cart-table tbody td {
            display: block;
            border: none;
            padding: 0.5rem 0;
            text-align: left;
        }
        
        .cart-table tbody td:before {
            content: attr(data-label) ": ";
            font-weight: bold;
            color: #495057;
        }
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
</header>

<?php
// Calling cart function
cart();

// Get IP address
$get_ip_add = getIPAddress();

// Handle form submissions
if (isset($_POST['update_cart'])) {
    // Get the specific product ID from the form
    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);
    
    if ($quantity > 0) {
        $update_cart = "UPDATE `cart_details` SET qty = $quantity WHERE ip_address = '$get_ip_add' AND product_id = $product_id";
        mysqli_query($con, $update_cart);
        echo "<script>alert('Cart updated successfully!'); window.location.href='cart.php';</script>";
        exit();
    }
}

if (isset($_POST['remove_item'])) {
    $product_id = intval($_POST['product_id']);
    $delete_query = "DELETE FROM `cart_details` WHERE product_id = $product_id AND ip_address = '$get_ip_add'";
    mysqli_query($con, $delete_query);
    echo "<script>alert('Item removed from cart!'); window.location.href='cart.php';</script>";
    exit();
}

if (isset($_POST['remove_selected'])) {
    if (isset($_POST['removeitem']) && is_array($_POST['removeitem'])) {
        foreach($_POST['removeitem'] as $remove_id) {
            $remove_id = intval($remove_id);
            $delete_query = "DELETE FROM `cart_details` WHERE product_id = $remove_id AND ip_address = '$get_ip_add'";
            mysqli_query($con, $delete_query);
        }
        echo "<script>alert('Selected items removed!'); window.location.href='cart.php';</script>";
        exit();
    }
}

if (isset($_POST['continue_shopping'])) {
    echo "<script>window.location.href='Home.php';</script>";
    exit();
}
?>

<main class="cart-main">
    <div class="container">
        <div class="wrapper">
            <?php
            $total_price = 0;
            $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
            $result = mysqli_query($con, $cart_query);
            $result_count = mysqli_num_rows($result);
            
            if($result_count > 0) {
            ?>
                <div class="table-container">
                    <div class="table-header">
                        <h2>Shopping Cart</h2>
                    </div>
                    
                    <div class="table-body">
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Select</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Start bulk remove form
                                echo '<form action="" method="post" id="bulk-remove-form">';
                                
                                while($row = mysqli_fetch_array($result)) {
                                    $product_id = $row['product_id'];
                                    $current_qty = isset($row['qty']) ? $row['qty'] : 1;
                                    
                                    $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
                                    $result_products = mysqli_query($con, $select_products);
                                    
                                    while($row_product_price = mysqli_fetch_array($result_products)) {
                                        $product_price = $row_product_price['product_price'];
                                        $product_title = $row_product_price['product_title'];
                                        $product_image1 = $row_product_price['product_image1'];
                                        $line_total = $product_price * $current_qty;
                                        $total_price += $line_total;
                                ?>
                                        <tr>
                                            <td data-label="Product">
                                                <div class="product-title"><?php echo htmlspecialchars($product_title); ?></div>
                                            </td>
                                            <td data-label="Image">
                                                <img src="./Admin_area/product_images/<?php echo htmlspecialchars($product_image1); ?>" 
                                                     alt="<?php echo htmlspecialchars($product_title); ?>" 
                                                     class="product-image">
                                            </td>
                                            <td data-label="Quantity">
                                                <!-- Individual form for each product update -->
                                                <form action="" method="post" style="display: inline;">
                                                    <input class="form-input" type="number" value="<?php echo $current_qty; ?>" 
                                                           name="quantity" min="1" max="99">
                                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                                    <input type="submit" value="Update" class="btn btn-primary btn-sm" name="update_cart" 
                                                           style="margin-left: 5px; padding: 0.3rem 0.8rem; font-size: 0.8rem;">
                                                </form>
                                            </td>
                                            <td data-label="Price">
                                                <div class="price-display">$<?php echo number_format($line_total, 2); ?></div>
                                            </td>
                                            <td data-label="Select">
                                                <input type="checkbox" name="removeitem[]" value="<?php echo $product_id; ?>" class="form-checkbox">
                                            </td>
                                            <td data-label="Actions">
                                                <!-- Individual remove form -->
                                                <form action="" method="post" style="display: inline;">
                                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                                    <input type="submit" value="Remove" class="btn btn-secondary btn-sm" name="remove_item"
                                                           onclick="return confirm('Are you sure you want to remove this item?')"
                                                           style="padding: 0.3rem 0.8rem; font-size: 0.8rem;">
                                                </form>
                                            </td>
                                        </tr>
                                <?php 
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        </form> <!-- End bulk remove form -->
                    </div>
                </div>
                
                <!-- Subtotal Section -->
                <div class="subtotal-section">
                    <h3>Subtotal: <span class="price">$<?php echo number_format($total_price, 2); ?></span></h3>
                    <div class="button-group">
                        <a href="./Home.php" class="btn btn-outline">Continue Shopping</a>
                        <a href="./User_area/checkout.php" class="btn btn-primary">Proceed to Checkout</a>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="table-container">
                    <div class="table-header">
                        <h2>Shopping Cart</h2>
                    </div>
                    <div class="empty-cart">
                        <h2>Your cart is empty</h2>
                        <p>Add some products to get started!</p>
                        <a href="./Home.php" class="btn btn-primary">Start Shopping</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</main>

<!--footer starts-->
<footer>
    <!---newsletter starts-->
    <div class="newslater">
        <div class="container">
            <div class="wrapper">
                <div class="box">
                    <div class="content">
                        <h3>Join Our Newsletter!</h3>
                        <p>Get E-mail updates about our latest shop and
                        <strong>special offers</strong></p>
                    </div>
                    <form action="" class="search flexitem">
                        <span class="icon-large"><i class="ri-mail-line"></i></span>
                        <input type="email" placeholder="Enter your email:" required>
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--newsletter ends-->
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
                                <li><a href="">Laptop</a></li>
                                <li><a href="">SmartPhone</a></li>
                                <li><a href="">iPad</a></li>
                                <li><a href="">Drone and Camera</a></li>
                                <li><a href="">Mouse and Keyboard</a></li>
                                <li><a href="">Headphones</a></li>
                                <li><a href="">Electronic gadgets</a></li>
                                <li><a href="">Phone Case and Stickers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item mini-links">
                            <h4>Payment Info</h4>
                            <ul class="flexcol">
                                <li><a href="">Business Card</a></li>
                                <li><a href="">Shop with points</a></li>
                                <li><a href="">Reload Your Balance</a></li>
                                <li><a href="">Card</a></li>
                                <li><a href="">Paypal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item mini-links">
                            <h4>About Us</h4>
                            <ul class="flexcol">
                                <li><a href="">Store Info.</a></li>
                                <li><a href="">News</a></li>
                                <li><a href="">Policies</a></li>
                                <li><a href="">Customer Service</a></li>
                                <li><a href="">Customer Reviews</a></li>
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