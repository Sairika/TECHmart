<?php
include('../include/connect.php');
if(isset($_GET['edit_brand'])){
    $edit_brand=$_GET['edit_brand'];
    $get_brands="Select * from `brands` where brand_id=$edit_brand";
    $result = mysqli_query($con,$get_brands);
    $row = mysqli_fetch_assoc($result);
    $brand_title = $row['brand_title'];
    }
    if(isset($_POST['update_brand'])){
        $_updated_brand_title =$_POST['brand_title'];
        $update_query = "update `brands` set brand_title='$_updated_brand_title'
        where brand_id=$edit_brand";
        $result_brand=mysqli_query($con,$update_query);
        if($result_brand){
            echo "<script>alert('Brand is been updated successfully.')</script>";
            echo "<script>window.open('view_brands.php','_self')</script>";
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
  <title>Edit category</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

<h2 class="text-center" style="font-size:16px;">Edit Brand</h2>
<form action="" method="post" class=" text-center mb-2">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="brand_title" class="from-label" style="font-size:16px;font-weight:bolder;">Brand Title</label>
        <input type="text" name="brand_title" id="brand_title" class="form-control" required="required"
        value="<?php echo $brand_title; ?>" style="font-size:20px;width:200px;">
    </div>
    <input type="submit" value="Update Brand" class="btn btn-info px-3 mb-3" name="update_brand"
    style="font-size:16px;width:150px; background-color:#ea4c89;">
</form>
</body>
</html>