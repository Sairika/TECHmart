<?php
include('../include/connect.php');
include('../Functions/common_function.php');
@session_start();
?>
    <?php
    $user_ip=getIPAddress();
    $get_user= "Select * from `user_table` where user_ip_address='$user_ip'";
    $result=mysqli_query($con,$get_user);
    $run_query = mysqli_fetch_array($result);
    $user_id = $run_query['user_id'];
    ?>
   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <nav>
                <input type="checkbox" id="link" hidden>
                <label for="link" class="link">
                    <i class="menu ri-menu-3-line ri-2x"></i>
                    <i class="close ri-close-s-line ri-2x"></i>
                </label>
                <ul class="submenu">
                    <li><a href="./credit_card.php"><span>Pay Online</span><i class="ri-bank-card-line"></i></a></li>
                    <li><a href="order.php?user_id=<?php echo $user_id;?>"><span>Cash On Delivery</span><i class="ri-truck-line"></i></a></li>
                    <li><a href="./profile.php"><span>My Account</span><i class="ri-user-line"></i></a></li>
                    <li><a href="../Homepage.php"><span>Home</span><i class="ri-blaze-line"></i></a></li>
                    <li><a href="../Home.php"><span>Continue Shop</span><i class="ri-shopping-cart-line"></i></a></li>
                    <li><a href="../contact.php"><span>Contact Us</span><i class="ri-chat-3-line"></i></a></li>
                    <li><a href="../about.php"><span>About TECHmart</span><i class="ri-map-pin-line"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>