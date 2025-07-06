<!--connect file-->
<?php
include('../include/connect.php');
//include('../Functions/common_function.php');
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>TECHmart</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
  <main>
  <div class='container mb-4'>
  <?php
  if(!isset($_SESSION['username'])){
    include('./signin.php');
  }
  else{
    include('./payment.php');
  }
  ?>
  </div>
  </main>
</body>

</html>