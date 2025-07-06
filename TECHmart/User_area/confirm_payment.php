<!--connect file-->
<?php
include('../include/connect.php');
session_start();
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    $select_data="Select * from `user_orders` where order_id=$order_id";
    $result=mysqli_query($con,$select_data);
    $row_fetch=mysqli_fetch_assoc($result);
    $invoice_number=$row_fetch['invoice_number'];
    $amount_due=$row_fetch['amount_due'];
}
if(isset($_POST['comfirm_payment'])){
    $invoice_number=$_POST['invoice_number'];
    $amount_due=$_POST['amount'];
    $payment_mode=$_POST['payment_mode'];
    $insert_query="insert into `user_payment` (order_id,invoice_number,amount,payment_mode,payment_date) 
    values($order_id,$invoice_number,$amount_due,$payment_mode,NOW())";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<h3 class='text-center'>Successfully Completed the payment.</h3>";
        echo "<script>window.open('profile.php?my_orders','_self')</script>";
    }
    $update_orders="Update `user_orders` where order_status='Complete' where order_id=$order_id";
    $result_order=mysqli_query($con,$update_orders);
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Payment Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-light">
<div class="contact">
<h2 style="text-align:center;font-weight:bolder;font-size:36px;background-color:#7b7ff6;padding:0.75em;">Confirm Payment</h2>
<img src="../Photos/undraw_online_transactions_02ka.png" style="width:800px;height:200px;object-fit:contain;">
    <form action="" method="post" entype="multipart/form-data">
        <p><input type="text"  name="invoice_number" placeholder="Invoice Number:"></p>
        <p><input type="number" name="amount" placeholder="Amount"><label for="amount"></label></p>
        <p>
            <label for="payment_mode"></label>
            <select name="payment mode" id="payment_mode" class="form-select">
                <option value="0">Bank-Card</option>
                <option value="1">Bikash</option>
                <option value="2">Naghad</option>
                <option value="3">Rocket</option>
                <option value="4">Cash On Delivery</option>
                <option value="5">PayOffline</option>
            </select>
        </p>
        <p><input type="email" name="user_email" placeholder="Enter your email:"></textarea></p>
        <p><input type="submit" value="Confirm" class="button" name="confirm_payment"></p>
    </form>
</body>
</html>
<style>
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
.contact{
    position:relative;background-color: var(--white-color);padding: 60px;border-radius: 10px;
    max-width: 900px;margin: 4em auto;box-shadow: rgba(0,0,0,0.2) 0 18px 50px -10px;height:900px;
}
.contact h1{
    font-style:3em;color:var(--main-color);
}
.contact :is(input,textarea){
    border:0;background-color:var(--light-color);padding: 15px 20px;border-radius: 5px;
    font-family: inherit;width: 100%;outline: 0;
}
.contact p{
    margin-bottom: 20px;
}
.contact .button{
    background-color:var(--main-color);color: var(--white-color);font-weight:600;
    line-height: 18px;cursor: pointer;transition:background-color 0.3s ease 0s;
    -webkit-transition:background-color 0.3s ease 0s;
}
.contact .button:hover{
    background-color:slategrey;
}
label{
    font-size:var(--font-small);text-transform: capitalize;position: relative;
    width:fit-content;
}
p label{
    margin:0 0 0 1em;cursor:pointer;
}
label span{
    position: absolute;top: 0;right: -10px;width: 6px;height: 6px;
    background-color:var(--primary-color);border-radius: var(--percent50);
}
p:where(input,select){
    background-color:rgb(22% 22% 22%);font-family: inherit;style:none;
}
p input:focus{
    background-color:var(--white-color);
}
p{
    flex-direction:row;
}
</style>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
