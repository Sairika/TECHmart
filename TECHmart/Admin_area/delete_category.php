<?php
if(isset($_GET['delete_category'])){
    $delete_category=$_GET['delete_category'];
    $delete_query="Delete from `categories` where category_id='$delete_category'";
    $result=mysqli_query($con,$delete_query);
    if($result){
        echo "<script>alert('Category has been deleted successfully.')</script>";
        echo "<script>window.open('view_category.php','_self')</script>";
    }
}
?>
