<?php
include('../include/connect.php');
if(isset($_POST['insert_top_brand'])){
    //select data from database
    $brand_image=$_FILES['brand_image']['name'];
    //accessing img temp name
    $temp_image=$_FILES['brand_image']['tmp_name'];
    move_uploaded_file($temp_image,"./Brand_images/$brand_image");
    $select_query="Select * from `top_brand` where brand_image='$brand_image'";
    $result_select = mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('This Brand image is present inside the database.')</script>";
    }
    else{
    $insert_query = "insert into `top_brand` (brand_image) values('$brand_image')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Brand Image has been inserted successfully.')</script>";
    }
}
}
?>
<h2 class="text-center">Insert Top Brands</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div>
        <span class="input-group-text bg-info" id="basic-addon1">
            <i></i>
        </span>
        <input type="file" class="form-control" name="brand_image"
        placeholder="Insert Images:" aria-label="Brands"
        aria-describedly="basic-addon1" required="required">
    </div>
    <div>
        <input type="submit" class="bg-info border-0 p-2 m-3" name="insert_top_brand"
        value="Insert Brands">
    </div>
</form>