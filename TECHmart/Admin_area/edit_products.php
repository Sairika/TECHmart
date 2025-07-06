<?php
include('../include/connect.php');

if (isset($_GET['edit_products'])) {
    $edit_id = $_GET['edit_products'];
    $get_data = "SELECT * FROM `products` WHERE product_id = $edit_id";
    $result = mysqli_query($con, $get_data);
    $row = mysqli_fetch_assoc($result);

    // Existing data
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    $product_price = $row['product_price'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];

    if (isset($_POST['update_product'])) {
        // Collect new inputs
        $new_title = $_POST['product_title'];
        $new_description = $_POST['product_description'];
        $new_keywords = $_POST['product_keywords'];
        $new_category = $_POST['product_category'];
        $new_brand = $_POST['product_brands'];
        $new_price = $_POST['product_price'];

        // Images
        $image1 = $_FILES['product_image1']['name'];
        $image2 = $_FILES['product_image2']['name'];
        $image3 = $_FILES['product_image3']['name'];

        $temp1 = $_FILES['product_image1']['tmp_name'];
        $temp2 = $_FILES['product_image2']['tmp_name'];
        $temp3 = $_FILES['product_image3']['tmp_name'];

        // Update logic
        $update_fields = [];

        if (!empty($new_title)) $update_fields[] = "product_title = '$new_title'";
        if (!empty($new_description)) $update_fields[] = "product_description = '$new_description'";
        if (!empty($new_keywords)) $update_fields[] = "product_keywords = '$new_keywords'";
        if (!empty($new_category)) $update_fields[] = "category_id = '$new_category'";
        if (!empty($new_brand)) $update_fields[] = "brand_id = '$new_brand'";
        if (!empty($new_price)) $update_fields[] = "product_price = '$new_price'";

        if (!empty($image1)) {
            move_uploaded_file($temp1, "./product_images/$image1");
            $update_fields[] = "product_image1 = '$image1'";
        }
        if (!empty($image2)) {
            move_uploaded_file($temp2, "./product_images/$image2");
            $update_fields[] = "product_image2 = '$image2'";
        }
        if (!empty($image3)) {
            move_uploaded_file($temp3, "./product_images/$image3");
            $update_fields[] = "product_image3 = '$image3'";
        }

        if (!empty($update_fields)) {
            $update_sql = "UPDATE `products` SET " . implode(', ', $update_fields) . " WHERE product_id = $edit_id";
            $result_update = mysqli_query($con, $update_sql);

            if ($result_update) {
                echo "<script>alert('Product updated successfully.')</script>";
                echo "<script>window.open('./view_products.php','_self')</script>";
            } else {
                echo "<script>alert('Update failed.')</script>";
            }
        } else {
            echo "<script>alert('No changes to update.')</script>";
        }
    }
}
?>


<!-- include('../include/connect.php');
if(isset($_GET['edit_products'])){
  $edit_id=$_GET['edit_products'];
  $get_data="Select * from `products` where product_id=$edit_id";
  $result=mysqli_query($con,$get_data);
  $row=mysqli_fetch_assoc($result);
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_keywords=$row['product_keywords'];
  $category_id=$row['category_id'];
  $brand_id	=$row['brand_id'];
  $product_price=$row['product_price'];
	$product_image1=$row['product_image1'];		
	$product_image2=$row['product_image2'];	
	$product_image3=$row['product_image3'];

  if(isset($_POST['update_product'])){
    $product_title=$_POST['product_title'];
    $description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    //accessing image
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    //accessing img temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];
    //checking empty conditions
    if($product_title=='' or $description=='' or $product_keywords=='' or $product_category=='' or 
    $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2==''
    or $product_image3==''){
      echo"<script>alert('Please fill all the available fields.')</script>";
      exit();
    }
    else{
       move_uploaded_file($temp_image1,"./product_images/$product_image1");
       move_uploaded_file($temp_image2,"./product_images/$product_image2");
       move_uploaded_file($temp_image3,"./product_images/$product_image3");
       //insert query
       $update_products="Update `products` set product_title='$product_title',product_description='$description',
       product_keywords='$product_keywords',category_id='$product_category',brand_id='$product_brands',product_image1='$product_image1',
       product_image2='$product_image2',product_image3='$product_image3',product_price ='$product_price' 
       where product_id=$edit_id";
       $result_update=mysqli_query($con,$update_products);
       if($result_update){
        echo"<script>alert('Successfully updated the products.')</script>";
        echo"<script>window.open('./view_products.php','_self')</script>";
       }
    }
}
} -->
<!doctype html>
<html lang="en">
<head>
  <title>Edit Products</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"-->
    <style>
      section{
        width:500px;display:flex;
      }
      input,select{
      border:0;  background-color: #fff5;  border-radius: 5px;padding: 5px 10px; 
      font-family: inherit;width:400px;outline: 0;display:relative; font-size:15px;
      }
      p{
      margin-bottom: 10px;
      }
    </style>
</head>
<body class="bg-light">
<div class="container">
        <section>
        <h1 class="text-center mx-4 px-3">Edit<span>Product</span></h1>
        </section>
        <section>
          <form action="" method="post" entype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label"></label>
            <p><input type="text" name="product_title" id="product_title" placeholder="<?php echo "$product_title";?>"
            autocomplete="on"></p>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="description" class="form-label"></label>
            <p><input type="text" name="product_description" id="product_description" placeholder="<?php echo "$product_description";?>" 
            autocomplete="on"></p>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keywords" class="form-label"></label>
            <p><input type="text" name="product_keywords" id="product_keywords" placeholder="<?php echo "$product_keywords";?>" 
            autocomplete="on"></p>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_category" id="">
              <option value="">Select a category:</option>
              <?php
                   $select_query="Select * from `categories`";
                   $result_query=mysqli_query($con,$select_query);
                   while($row=mysqli_fetch_assoc($result_query)){
                     $category_title=$row['category_title'];
                     $category_id=$row['category_id'];
                     echo "<option value='$category_id'>$category_title</option>";
                   }
              ?>
            </select>
        </div>
         <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_brands" id="">
              <option value="">Select a Brand:</option>
              <?php
                   $select_query="Select * from `brands`";
                   $result_query=mysqli_query($con,$select_query);
                   while($row=mysqli_fetch_assoc($result_query)){
                     $brand_title=$row['brand_title'];
                     $brand_id=$row['brand_id'];
                     echo "<option value='$brand_id'>$brand_title</option>";
                   }
              ?>
            </select>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image1" class="form-label"></label>
            <p><input type="file" name="product_image1" id="product_image1"autocomplete="off">
            <img width="40px" src="<?php echo"./product_images/$product_image1";?>"></p>
         </div> 
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image2" class="form-label"></label>
            <p><input type="file" name="product_image2" id="product_image2"autocomplete="off">
            <img width="40px" src="<?php echo"./product_images/$product_image2";?>"></p>
         </div> 
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image3" class="form-label"></label>
            <p><input type="file" name="product_image3" id="product_image3"autocomplete="off">
            <img width="40px" src="<?php echo"./product_images/$product_image3";?>"></p>
         </div> 
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label"></label>
            <p><input type="text" name="product_price" id="product_price" placeholder="<?php echo"$product_price";?>" 
            autocomplete="on"></p>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <p><input type="submit" name="update_product" class="button"
            value="Update Product"></p>
        </div>
            </form>
        </section>
</div>
</body>
</html> 