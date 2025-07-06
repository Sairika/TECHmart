<!--connect file-->
<?php
include('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Orders</title>
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <main class="table">
        <section class="TableHeader">
            <h1>All Order List</h1>
        </section>
        <section class="TableBody">
            <table>
            <thead>
                <?php
                $get_orders="Select * from `user_orders`";
                $result=mysqli_query($con,$get_orders);
                $row_count=mysqli_num_rows($result);
                echo "<tr><th>Serial No.</th>
                    <th>Due Amount</th>
                    <th>Invoice Number</th>
                    <th>Total products</th>
                    <th>Order date</th>
                    <th>Order Status</th>
                    <th>Delete</th></tr>
                </thead>		
		   		   <tbody>";
                   if ($row_count==0){
                    echo "<h2>No orders yet</h2>";
                   }
                   else{
                     $number=0;
                     while($row_data=mysqli_fetch_assoc($result)){
                        $order_id=$row_data['order_id'];
                        $user_id=$row_data['user_id'];
                        $amount_due=$row_data['amount_due'];
                        $invoice_number=$row_data['invoice_number'];
                        $total_products=$row_data['total_products'];
                        $order_date=$row_data['order_date'];
                        $order_status=$row_data['order_status'];
                        $number++;
                        echo "<tr><td>$number</td>
                          <td>$amount_due</td>
                          <td>$invoice_number</td>
                          <td>$total_products</td>
                          <td>$order_date</td>
                          <td>$order_status</td>
                          <td><a href='index.php?delete_order=$order_id'><i class='ri-delete-bin-line'></i></a></td></tr>";
                        }
                   }
                   ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>