<?php
//displaying categories
function getcategories(){
    global $con;
    $select_categories="Select * from `categories`";
    $result_categories=mysqli_query($con,$select_categories);
    while($row_data=mysqli_fetch_assoc($result_categories)){
        $category_title=$row_data['category_title'];
        $category_id=$row_data['category_id'];
        echo "<li class='nav-item bg-info'>
        <a href='Home.php?category=$category_id' class='nav-link text-light text-center'>$category_title</a>
        </li>";
    }
}

//displaying brands
function getbrands(){
    global $con;
    $select_brands="Select * from `brands`";
    $result_brands=mysqli_query($con,$select_brands);
    while($row_data=mysqli_fetch_assoc($result_brands)){
        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
        echo "<li class='nav-item bg-info'>
        <a href='Home.php?brand=$brand_id' class='nav-link text-light text-center'>$brand_title</a>
        </li>";
    }
}

//Accessing IP Address
function getIPAddress(){
    //whether ip is from the share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address
    else{
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// Function to get all products
function getproducts() {
    global $con;
    
    // Check if category or brand is selected
    if (!isset($_GET['category']) && !isset($_GET['brand'])) {
        $select_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,9";
        $result_query = mysqli_query($con, $select_query);
        
        while($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_keywords = $row['product_keywords'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            
            echo "<div class='box'>
                    <div class='image'>
                        <img src='./admin_area/product_images/$product_image1' alt='$product_title'>
                        <div class='icons'>
                            <a href='view_more.php?product_id=$product_id' class='cart-btn'>View More</a>
                            <a href='Home.php?add_to_cart=$product_id'><i class='ri-shopping-cart-line'></i></a>
                        </div>
                    </div>
                    <div class='content'>
                        <h3>$product_title</h3>
                        <h5>$$product_keywords</h5>
                        <div class='price'>$$product_price</div>
                    </div>
                </div>";
        }
    }
}

// Function to get unique categories
function get_unique_categories() {
    global $con;
    
    if (isset($_GET['category'])) {
        $category_id = $_GET['category'];
        $select_query = "SELECT * FROM `products` WHERE category_id = $category_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No products found in this category</h2>";
        }
        
        while($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_keywords = $row['product_keywords'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            
            echo "<div class='box'>
                    <div class='image'>
                        <img src='./admin_area/product_images/$product_image1' alt='$product_title'>
                        <div class='icons'>
                            <a href='view_more.php?product_id=$product_id' class='cart-btn'>View More</a>
                            <a href='Home.php?add_to_cart=$product_id'><i class='ri-shopping-cart-line'></i></a>
                        </div>
                    </div>
                    <div class='content'>
                        <h3>$product_title</h3>
                        <h5>$$product_keywords</h5>
                        <div class='price'>$$product_price</div>
                    </div>
                </div>";
        }
    }
}

// Function to get unique brands
function get_unique_brands() {
    global $con;
    
    if (isset($_GET['brand'])) {
        $brand_id = $_GET['brand'];
        $select_query = "SELECT * FROM `products` WHERE brand_id = $brand_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No products found for this brand</h2>";
        }
        
        while($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_keywords = $row['product_keywords'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            
            echo "<div class='box'>
                    <div class='image'>
                        <img src='./admin_area/product_images/$product_image1' alt='$product_title'>
                        <div class='icons'>
                            <a href='view_more.php?product_id=$product_id' class='cart-btn'>View More</a>
                            <a href='Home.php?add_to_cart=$product_id'><i class='ri-shopping-cart-line'></i></a>
                        </div>
                    </div>
                    <div class='content'>
                        <h3>$product_title</h3>
                        <h5>$$product_keywords</h5>
                        <div class='price'>$$product_price</div>
                    </div>
                </div>";
        }
    }
}

//search products function
function search_product(){
    global $con;
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
        $search_query="Select * from `products` where product_keywords like '%$search_data_value%'";
        $result_query=mysqli_query($con,$search_query);
        $num_of_rows=mysqli_num_rows($result_query);
        
        if($num_of_rows==0){
            echo "<h2 class='text-center text-danger'>No results found for '$search_data_value'!</h2>";
        }
        
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_keywords = $row['product_keywords'];
            $product_description=$row['product_description'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            
            echo "<div class='box'>
                    <div class='image'>
                        <img src='./admin_area/product_images/$product_image1' alt='$product_title'>
                        <div class='icons'>
                            <a href='view_more.php?product_id=$product_id' class='cart-btn'>View More</a>
                            <a href='Home.php?add_to_cart=$product_id'><i class='ri-shopping-cart-line'></i></a>
                        </div>
                    </div>
                    <div class='content'>
                        <h3>$product_title</h3>
                        <h5>$$product_keywords</h5>
                        <div class='price'>$$product_price</div>
                    </div>
                </div>";
        }
    }
}

//get top brands for homepage
function get_top_brands(){
    global $con;
    $select_brands="Select * from `top_brand` limit 0,9";
    $result_brands=mysqli_query($con,$select_brands);
    
    while($row_data=mysqli_fetch_assoc($result_brands)){
        $brand_id=$row_data['brand_id'];
        $brand_image=$row_data['brand_image'];
        
        echo "<div class='item'>
                <a href='Home.php?brand=$brand_id'>
                    <img src='./Admin_area/brand_images/$brand_image' width='60%'>
                </a>
              </div>";
    }
}

// FIXED CART FUNCTION - Now properly handles qty column
function cart(){
    if(isset($_GET['add_to_cart'])){
        global $con;
        $get_ip_add = getIPAddress();
        $get_product_id = intval($_GET['add_to_cart']); // Sanitize input
        
        // Check if item already exists in cart
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add' AND product_id=$get_product_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        
        if($num_of_rows > 0){
            // If item exists, update quantity
            $update_query = "UPDATE `cart_details` SET qty = qty + 1 WHERE ip_address='$get_ip_add' AND product_id=$get_product_id";
            mysqli_query($con, $update_query);
            echo "<script>alert('Item quantity updated in cart')</script>";
            echo "<script>window.location.href='Home.php';</script>";
        } else {
            // If new item, insert with qty = 1
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, qty) VALUES ($get_product_id, '$get_ip_add', 1)";
            $result_query = mysqli_query($con, $insert_query);
            
            if($result_query){
                echo "<script>alert('Item added to cart')</script>";
                echo "<script>window.location.href='Home.php';</script>";
            } else {
                echo "<script>alert('Error adding item to cart')</script>";
            }
        }
    }
}

// FIXED CART ITEM COUNT FUNCTION - Returns total quantity of items in cart
function cart_item(){
    global $con;
    $get_ip_add = getIPAddress();
    $total_items = 0;
    
    $select_query = "SELECT SUM(qty) as total_qty FROM `cart_details` WHERE ip_address='$get_ip_add'";
    $result_query = mysqli_query($con, $select_query);
    
    if($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $total_items = $row['total_qty'] ? intval($row['total_qty']) : 0;
    }
    
    echo $total_items;
}

function total_cart_price(){
    global $con;
    $get_ip_add = getIPAddress();
    $total_price = 0;
    
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
    $result = mysqli_query($con, $cart_query);
    
    if($result && mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            $product_id = $row['product_id'];
            $qty = isset($row['qty']) ? intval($row['qty']) : 1;
            
            $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
            $result_products = mysqli_query($con, $select_products);
            
            while($row_product_price = mysqli_fetch_array($result_products)){
                $product_price = floatval($row_product_price['product_price']);
                $total_price += ($product_price * $qty);
            }
        }
    }
    
    echo number_format($total_price, 0);
}

// NEW FUNCTION - Get cart total with quantity for checkout
function get_cart_total(){
    global $con;
    $get_ip_add = getIPAddress();
    $total_price = 0;
    
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
    $result = mysqli_query($con, $cart_query);
    
    while($row = mysqli_fetch_array($result)){
        $product_id = $row['product_id'];
        $qty = isset($row['qty']) ? intval($row['qty']) : 1;
        
        $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
        $result_products = mysqli_query($con, $select_products);
        
        while($row_product_price = mysqli_fetch_array($result_products)){
            $product_price = floatval($row_product_price['product_price']);
            $total_price += ($product_price * $qty);
        }
    }
    return $total_price;
}

// NEW FUNCTION - Get cart items with details for checkout
function get_cart_items(){
    global $con;
    $get_ip_add = getIPAddress();
    $cart_items = array();
    
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
    $result = mysqli_query($con, $cart_query);
    
    while($row = mysqli_fetch_array($result)){
        $product_id = $row['product_id'];
        $qty = isset($row['qty']) ? intval($row['qty']) : 1;
        
        $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
        $result_products = mysqli_query($con, $select_products);
        
        while($row_product = mysqli_fetch_array($result_products)){
            $cart_items[] = array(
                'product_id' => $product_id,
                'product_title' => $row_product['product_title'],
                'product_price' => $row_product['product_price'],
                'quantity' => $qty,
                'line_total' => $row_product['product_price'] * $qty
            );
        }
    }
    return $cart_items;
}

?>