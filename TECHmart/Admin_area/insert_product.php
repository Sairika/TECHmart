<?php
include('../include/connect.php');
if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];

    // Accessing image
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // Accessing image temp name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // Checking empty conditions
    if ($product_title == '' || $description == '' || $product_keywords == '' || $product_category == '' || $product_brands == ''
        || $product_price == '' || $product_image1 == '' || $product_image2 == '' || $product_image3 == '' || $product_price == '') {
        echo "<script>alert('Please fill all the available fields.')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");

        // Prepare the insert statement
        $stmt = $con->prepare("INSERT INTO products (product_title, product_description, product_keywords, category_id, brand_id, product_image1, product_image2, product_image3, product_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $product_title, $description, $product_keywords, $product_category, $product_brands, $product_image1, $product_image2, $product_image3, $product_price);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Successfully inserted the products.')</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $con->close();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Insert Products</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="table.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>       
<main class="table">
        <section class="TableHeader">
        <h1 class="text-center">Insert <span>Products</span> Form</h1>
        </section>
        <section class="TableBody">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label"></label>
            <p><input type="text" name="product_title" id="product_title" placeholder="Enter product title"
            autocomplete="off" required="required"></p>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="description" class="form-label"></label>
            <p><input type="text" name="product_description" id="description" placeholder="Enter product description" 
            autocomplete="off" required="required"></p>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keywords" class="form-label"></label>
            <p><input type="text" name="product_keywords" id="product_keywords" placeholder="Enter product keyword" 
            autocomplete="off" required="required"></p>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <p><select name="product_category" id="">
              <option value="Select a category:"></option>
              <?php
                   $select_query="Select * from `categories`";
                   $result_query=mysqli_query($con,$select_query);
                   while($row=mysqli_fetch_assoc($result_query)){
                      $category_title=$row['category_title'];
                      $category_id=$row['category_id'];
                      echo "<option value='$category_id'>$category_title</option>";
                   }
              ?>
            </select></p>
        </div>
         <p><div class="form-outline mb-4 w-50 m-auto">
            <select name="product_brands" id="">
              <option value="Select a Brand:"></option>
              <?php
                   $select_query="Select * from `brands`";
                   $result_query=mysqli_query($con,$select_query);
                   while($row=mysqli_fetch_assoc($result_query)){
                      $brand_title=$row['brand_title'];
                      $brand_id=$row['brand_id'];
                     echo "<option value='$brand_id'>$brand_title</option>";
                   }
              ?>
            </select></p>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image1" class="form-label"></label>
            <p><input type="file" name="product_image1" id="product_image1" autocomplete="off" required="required"></p>
        </div>
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image2" class="form-label"></label>
            <p><input type="file" name="product_image2" id="product_image2" autocomplete="off" required="required"></p>
        </div>
         
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image3" class="form-label"></label>
            <p><input type="file" name="product_image3" id="product_image3" autocomplete="off" required="required"></p>
        </div>
       
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label"></label>
            <p><input type="text" name="product_price" id="product_price" placeholder="Enter product Price:" 
            autocomplete="off" required="required"></p>
        </div>
        
        <div class="form-outline mb-4 w-50 m-auto">
            <p><input type="submit" name="insert_product" class="button"
            value="Insert Product"></p>
        </div>
            </form>
        </section>
    </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
<style>
    :root{
    --main-color:#6469f5;
    --secondary-color:#7b7ff6;
    --light-color:#f5f4fa;
    --white-color:white;
   }
    *{
       margin:0; padding: 0; box-sizing:border-box; font-family: sans-serif;
    }
    body{
       min-height: 100vh; display: flex; justify-content:center; align-items: center;
       background:url(../Photos/table.jpg) center/cover;
    }
    h1{
       font-style:4em;color:#d893a3;text-shadow:2px 1px 0 #fff4;font-weight:bolder;font-family:'Nunito',sans-serif;
    }
    h1 span{
       color:#6469f5;
    }
    .TableHeader{
       width:100%; height:10%; background-color:#fff4; padding: .8rem 1rem;text-align: center;
       border-radius: .6rem;backdrop-filter:blur(8px);
    }
    .TableBody{
       width: 80%;max-height:calc(89% - .8rem); background-color: #fff5; margin:.8rem auto; border-radius: .6rem;
       overflow:auto;backdrop-filter:blur(8px);
    }
    .TableBody .button{
      background-color:var(--main-color);  color: var(--white-color);  font-weight:600;
      line-height: 18px; cursor: pointer; transition:background-color 0.3s ease 0s;
      -webkit-transition:background-color 0.3s ease 0s;
    }
    .TableBody .button:hover{
      background-color: #fff4;
    }
    .TableBody::-webkit-scrollbar{
    width: 0.5rem; height: 0.5rem;
     }
    .TableBody::-webkit-scrollbar-thumb{
    border-radius: .5rem; background-color: #0004; visibility:hidden;
    }
     .TableBody:hover::-webkit-scrollbar-thumb{
       visibility:visible;
     }
    input,select{
      border:0;  background-color: #fff4;  padding: 15px 20px;  border-radius: 5px;
      font-family: inherit;width: 100%;outline: 0;backdrop-filter:blur(8px);
    }
    p{
      margin-bottom: 10px;
    }
    </style>