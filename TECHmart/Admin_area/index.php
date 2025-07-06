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
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
    <style>
.header {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    background:#673ab7;
    color:#fff5;
}
.header h2 {
    font-size: 48px;
}
.notification-bar {
    position: relative;
}
.notification-icon {
    display: inline-block;
    background-color: #f44336;
    color: #fff5;
    padding: 5px 10px;
    border-radius: 50%;
    cursor: pointer;
}
.notification-count {
    position: absolute;
    top: -5px;
    right: -5px;
    background-color: #fff5;
    color: #f44336;
    padding: 2px 5px;
    border-radius: 50%;
    font-size: 15px;
}
    </style>
</head>
<body>
<header>
    <div class="header">
        <h2>Admin Panel</h2>
        <div class="notification-bar">
            <a href="message.php"><i class="ri-notification-line ri-3x"></i>
                <span class="notification-count">5</span>
            </a>
        </div>
</header>
<main>
    <div class="contact">
        <div class="split">
            <div class="left">
                <h1>Manage Details</h1>
                <!-- Use CSS classes for styling -->
                <div class="image"><img src="../Photos/admin_panel.png"></div>
                <form action="">
                    <!-- Use semantic buttons and organize the links -->
                    <p><button class="button"><a href="insert_product.php">Insert Products</a></button></p>
                    <p><button class="button"><a href="view_products.php">View Products</a></button></p>
                    <p><button class="button"><a href="index.php?insert_categories">Insert Categories</a></button></p>
                    <p><button class="button"><a href="view_category.php">View Categories</a></button></p>
                    <p><button class="button"><a href="index.php?insert_brands">Insert Brands</a></button></p>
                    <p><button class="button"><a href="view_brands.php">View Brands</a></button></p>
                    <p><button class="button"><a href="list_orders.php">All orders</a></button></p>
                    <p><button class="button"><a href="all_payment.php">All payments</a></button></p>
                    <p><button class="button"><a href="list_user.php">List users</a></button></p>
                    <p><button class="button"><a href="index.php?top_brands">Insert top Brands</a></button></p>
                    <p><button class="button"><a href="admin_logout.php">Logout</a></button></p>
                </form>
            </div>
            <div class="item middle p-0 mx-4">
                <div class="image">
                    <img src="../Photos/admin_panel2.png" width="1000px">
                </div>
                <div class="address">
                    <ul class="item">
                        <!-- PHP logic for including different pages -->
                        <li>
                            <?php
                            if (isset($_GET['insert_categories'])) {
                                include('insert_categories.php');
                            }
                            if(isset($_GET['insert_brands'])){
                                include('insert_brands.php');
                             }
                             if(isset($_GET['top_brands'])){
                                 include('insert_top_brand.php');
                              }
                             if(isset($_GET['insert_product'])){
                                 include('insert_product.php');
                             }
                             if(isset($_GET['view_products'])){
                                 include('view_products.php');
                             }
                             if(isset($_GET['edit_products'])){
                                 include('edit_products.php');
                            }
                             if(isset($_GET['delete_product'])){
                                  include('delete_product.php');
                             }
                             if(isset($_GET['view_category'])){
                                 include('view_category.php');
                             }
                             if(isset($_GET['view_brands'])){
                                 include('view_brands.php');
                             }
                             if(isset($_GET['edit_category'])){
                                 include('edit_category.php');
                             }
                             if(isset($_GET['edit_brand'])){
                                 include('edit_brands.php');
                             }
                             if(isset($_GET['delete_category'])){
                                 include('delete_category.php');
                             }
                             if(isset($_GET['delete_brand'])){
                                 include('delete_brand.php');
                             }
                             if(isset($_GET['list_orders'])){
                                 include('list_orders.php');
                             }
                             if(isset($_GET['all_payment'])){
                                 include('all_payment.php');
                             }
                             if(isset($_GET['list_user'])){
                                 include('list_user.php');
                             }
                             if(isset($_GET['logout'])){
                                 include('admin_logout.php');
                             }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- External JavaScript libraries -->
<!-- Add your JavaScript imports here -->

<!-- Use a separate external JavaScript file for your custom scripts -->
<script src="../admin-scripts.js"></script>
</body>
</html>




<!--connect file-->
<?php
//include('../include/connect.php');
//include('../Functions/common_function.php');
//session_start();
?>
<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!--bootstrap css link-->
    <!--link rel="stylesheet" href="../style.css"-->
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"-->
    <!--link rel="stylesheet" href="../Homepage.css"-->
    <!--style>
:root{
    --main-color:#6469f5;
    --secondary-color:#7b7ff6;
    --light-color:#f5f4fa;
    --white-color:white;
}
body{
    font-family:'Nunito',sans-serif;font-size: 16px;font-weight:400;line-height: 1.0;
    background-color: var(--white-color);color:#222;
    
}
a{
    text-decoration: none;color: inherit;
}
ul{
    list-style: none;
}
.site{
    position: relative;background-color:var(--light-color);
}
._bg{
    position: absolute;left: 0;right: 0;top: 120px;
}
._bg::before{
    content: '';position: absolute;top: -150px;width: 100%;
}
.container{
    max-width: 1200px;margin: 0 auto;padding: 0 20px;position: relative;
}
.contact{
    position:relative;background-color: var(--white-color);padding: 60px;border-radius: 10px;
    max-width: 1100px;margin: 4em auto;box-shadow: rgba(0,0,0,0.2) 0 18px 50px -10px;
}
.contact::after{
    content:'';position: absolute;width: 100%;height:calc(100% - 50px);top:0;left:0;
    background-color: var(--white-color);border-radius: 10px;z-index:0;
}
.contact::-webkit-scrollbar{
    width: 0.5rem; height: 0.5rem;
     }
.contact::-webkit-scrollbar-thumb{
    border-radius: .5rem; background-color: #0004; visibility:hidden;
    }
.contact:hover::-webkit-scrollbar-thumb{
       visibility:visible;
     }
.split{
    display:flex;flex-direction: column;
}
.split > div{
    flex:0 0 60%;position: relative;z-index: 1;
}
.split .middle{
    max-width: 500px;
}
.split .left{
    max-width: 450px;
}
.contact h1{
    font-style:3em;color:var(--main-color);font-weight:bold;text-shadow: 1px 1px 0 var(--main-color);
}
.contact :is(input,textarea){
    border:0;background-color:var(--light-color);padding: 15px 20px;border-radius: 5px;
    font-family: inherit;width: 100%;outline: 0;
}
.contact p{
    margin-bottom: 20px;
}
.contact .button {
    background-color: var(--main-color);
    color: var(--white-color);
    font-weight: 600;
    line-height: 18px;
    cursor: pointer;
    transition: background-color 0.5s ease-in-out; /* Adjust the duration and timing function */
}

.contact .button:hover {
    background-color: slategrey;
}
.split .middle{
    padding:5em 0 0 5em;display:relative;
}
.middle .image{
    width:100%;max-height: 300px;overflow: hidden;margin-bottom: 20px;margin-top:50px;
}
.middle .image img{
    object-fit: cover;object-position: top;width:400px;overflow: hidden;
}
.middle .address ul li{
    width:50px;opacity: 0.75;
}
.middle .address li{
    display: flex;align-items: center;font-size: 14px;margin-bottom: 20px;
}
p button{
    padding:0.75em;margin:0.2em;border-style: none;width:410px;height:50px;border-radius:0 0 50%;
    background-color:var(--main-color);color: var(--white-color);font-weight:600;
    pointer;transition:background-color 0.3s ease 0s;-webkit-transition:background-color 0.3s ease 0s;
}
.contact .image img{
    width:400px;overflow: hidden; object-fit: contain;height:300px;
}
@media screen and (min-width:760px){
    nav ul{
        display: flex;
    }
    nav > a{
        display: none;
    }
    .split{
        flex-direction:row;
    }
    .split .middle{
        padding: 0 60px;
    }
    .split .middle{
        right: 0;top:0;width:60px;left:auto;height:auto;border-radius: 0 0 10px 10px;justify-content:flex-end;
    }
    .split .middle ul{
        flex-direction: column;display: flex;
    }
    .contact::after{
        width: calc(100% - 50px);height: 100%;
    }
}
footer{
    position:bottom;
}
/*.address ul{
    max-width:500px;line-height: 2;margin-bottom: 3em;padding-bottom: 2em;
    border-bottom: 1px solid var(--secondary-dark-color);
}
.address li{
    display:flex;justify-content: space-between;font-weight: var(--fw5);
}
.address li:first-child{
    margin-top: 2em;
}*/
button{
    pointer:cursor;
}
.contact .item.middle{
    padding:1em 0 0 5em;
}
.contact .left{
    padding: 1em;background-color: var(--light-bg-color);box-shadow:0 15pxpx 70px -8px rgb(0 0 0/20%);
    width:30%;
} 
.contact .middle{
    padding: 2em;background-color: var(--light-bg-color);box-shadow:0 15pxpx 70px -8px rgb(0 0 0/20%);
} 

</style-->

</head>
<!--body>
<header>
    <div class="container-fluid p-0">
        <h2 style="text-align:center;font-weight:bolder;font-size:36px;background-color:#7b7ff6;padding:0.75em;">Admin Panel</h2>
    </div>
</header>
<main>
    <div class="contact">
        <div class="split">
            <div class="left">
                <h1>Manage Details</h1>
                <div class="image"><img src="../Photos/undraw_Pair_programming_re_or4x.png"></div>
                <form action="">
                    <p><button class="button"><a href="insert_product.php">Insert Products</a></button></p>
                    <p><button class="button"><a href="view_products.php">View Products</a></button></p>
                    <p><button class="button"><a href="index.php?insert_categories">Insert Categories</a></button></p>
                    <p><button class="button"><a href="view_category.php">View Categories</a></button></p>
                    <p><button class="button"><a href="index.php?insert_brands">Insert Brands</a></button></p>
                    <p><button class="button"><a href="view_brands.php">View Brands</a></button></p>
                    <p><button class="button"><a href="list_orders.php">All orders</a></button></p>
                    <p><button class="button"><a href="all_payment.php">All payments</a></button></p>
                    <p><button class="button"><a href="list_user.php">List users</a></button></p>
                    <p><button class="button"><a href="index.php?top_brands">Insert top Brands</a></button></p>
                    <p><button class="button"><a href="admin_logout.php">Logout</a></button></p>
                </form>
           </div>
            <div class="item middle p-0 mx-4">
                <div class="image">
                    <img src="../Photos/undraw_Designer_girl_re_h54c.png" width="1000px">
                </div>
                <div class="address">
                    <ul class="item">
                    <li><?php
                       // if(isset($_GET['insert_categories'])){
                           //include('insert_categories.php');
                       //}
                       //if(isset($_GET['insert_brands'])){
                           //include('insert_brands.php');
                        //}
                       //if(isset($_GET['top_brands'])){
                       //    include('insert_top_brand.php');
                       // }
                       //if(isset($_GET['insert_product'])){
                       //    include('insert_product.php');
                       //}
                       //if(isset($_GET['view_products'])){
                       //    include('view_products.php');
                       //}
                       //if(isset($_GET['edit_products'])){
                       //    include('edit_products.php');
                       //
                       //if(isset($_GET['delete_product'])){
                       //     include('edit_products.php');
                       //}
                       //if(isset($_GET['view_category'])){
                       //    include('view_category.php');
                       //}
                       //if(isset($_GET['view_brands'])){
                       //    include('view_brands.php');
                       //}
                       //if(isset($_GET['edit_category'])){
                       //    include('edit_category.php');
                       //}
                       //if(isset($_GET['edit_brand'])){
                       //    include('edit_brands.php');
                       //}
                       //if(isset($_GET['delete_category'])){
                       //    include('delete_category.php');
                       //}
                       //if(isset($_GET['delete_brand'])){
                       //    include('delete_brand.php');
                       //}
                       //if(isset($_GET['list_orders'])){
                       //    include('list_orders.php');
                       //}
                       //if(isset($_GET['all_payment'])){
                       //    include('all_payment.php');
                       //}
                       //if(isset($_GET['list_user'])){
                       //    include('list_user.php');
                       //}
                       //if(isset($_GET['logout'])){
                       //    include('admin_logout.php');
                       //}
                      ?>
                    </li>
                    </ul>
                </div>
            </div>
    </div>
</div>
</main-->
<!----removable----> 

    <!-- Bootstrap JavaScript Libraries -->
  <!--script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script-->
