<?php
include('../include/connect.php');
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <style>
        table{
            margin-left:400px;
            background: url(../Photos/table.jpg);
            box-shadow:10px 10px 10px #9da3a5;
        }
        td,th{
            height:90px;
            width:130px;
            text-align: center;
            color:#ffffff;
        }
        th{
            background-color: #fff4;
            font-size:20px;
            font-weight:600;
        }
        td{
            font-size:18px;
        }
       
    </style>
</head>
<body>
    <?php
    $user_email=$_SESSION['user_email'];
    $get_user="Select * from `user_table` where user_email='$user_email'";
    $result=mysqli_query($con,$get_user);
    $row_fetch=mysqli_fetch_assoc($result);
    $user_id=$row_fetch['user_id'];
    ?>
<h3 class="text-center">All My Orders</h3>
<table class="table table-bordered mt-5">
    <thead>
    <tr>
        <th>Order No</th>
        <th>Amount Due</th>
        <th>Total Products</th>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Complete/Incomplete</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $get_order_details="Select * from  `user_orders` where user_id=$user_id";
        $result_orders=mysqli_query($con,$get_order_details);
        while($row_orders=mysqli_fetch_assoc($result_orders)){
            $order_id = $row_orders['order_id'];
            $amount_due = $row_orders['amount_due'];
            $total_products = $row_orders['total_products'];
            $invoice_number = $row_orders['invoice_number'];
            $order_status= $row_orders['order_status'];
            if($order_status=='pending'){
                $order_status='Incomplete';
            }
            else{
                $order_status='Complete';
            }
            $order_date=$row_orders['order_date'];
            $number=1;
            echo "<tr class='bg-info'>
            <td>$number</td>
            <td>$amount_due</td>
            <td>$total_products</td>
            <td>$invoice_number</td>
            <td>$order_date</td>
            <td>$order_status</td>";
            ?>
            <?php
            if($order_status=='Complete'){
               echo "<td>Paid</td>";
            }
            else{
               echo "<td><a href='confirm_payment.php?order_id=$order_id'>Confirm</a></td></tr>";
            }
        $number++;
        }
        ?>
    </tbody>
</table>
</body>
</html>