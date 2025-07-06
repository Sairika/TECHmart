<?php
    if(!isset($_SESSION['user_email'])){
        echo "<li><a href='./signin.php'>Welcome Guest</a></li>";
    }
    else{
        echo "<li><a href='./profile.php'>".$_SESSION['user_email']."</a></li>";
    }
    if(isset($_SESSION['user_email'])){
        echo "<li><a href='./signin.php'>Log in</a></li>";
    }
    else{
        echo "<li><a href='./logout.php'>Log out</a></li>";
    }
?>

//logout
<?php
session_start();
session_unset();
session_destroy();
echo "<script>window.open('../Home.php','_self')</script>";
?>

//checkout
<?php
  if(!isset($_SESSION['username'])){
    include('./signin.php');
  }
  else{
    include('./payment.php');
  }
  ?>

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
                                  include('edit_products.php');
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



