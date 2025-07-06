<?php
include('../include/connect.php');
if(isset($_GET['edit_category'])){
    $edit_category=$_GET['edit_category'];
    $get_categories="Select * from `categories` where category_id=$edit_category";
    $result = mysqli_query($con,$get_categories);
    $row = mysqli_fetch_assoc($result);
    $category_title = $row['category_title'];
    }
    if(isset($_POST['update_category'])){
        $_updated_category_title =$_POST['category_title'];
        $update_query = "update `categories` set category_title='$_updated_category_title'
        where category_id=$edit_category";
        $result_category=mysqli_query($con,$update_query);
        if($result_category){
            echo "<script>alert('Category is been updated successfully.')</script>";
            echo "<script>window.open('view_category.php','_self')</script>";
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

  <!-- Bootstrap CSS v5.2.1 -->
  <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"-->

</head>

<body>
<!--div class="container mt-3"-->
<h2 class="text-center" style="font-size:16px;">Edit Category</h2>
<form action="" method="post" class=" text-center mb-2">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="category_title" class="from-label" style="font-size:16px;font-weight:bolder;">Category Title</label>
        <input type="text" name="category_title" id="category_title" class="form-control" required="required"
        value="<?php echo $category_title; ?>" style="font-size:20px;width:200px;">
    </div>
    <input type="submit" value="Update Category" class="btn btn-info px-3 mb-3" name="update_category"
    style="font-size:16px;width:150px; background-color:#ea4c89;">
</form>
<!--/div-->
  <!-- Bootstrap JavaScript Libraries -->
  <!--script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script-->
</body>

</html>