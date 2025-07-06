<!--connect file-->
<?php
include('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Payment</title>
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <main class="table">
        <section class="TableHeader">
            <h1>All Payment</h1>
        </section>
        <section class="TableBody">
            <table>
            <thead>			
                <?php
                $get_payment="Select * from `user_payment`";
                $result=mysqli_query($con,$get_payment);
                $row_count=mysqli_num_rows($result);
                      if ($row_count==0){
                        echo "<h2 style='padding:30px;text-align:center;'>No Payment yet</h2>";
                       }				
	
                   else{
                     while($row_data=mysqli_fetch_assoc($result)){
                        $payment_id=$row_data['payment_id'];
                        $order_id=$row_data['order_id'];
                        $invoice_number=$row_data['invoice_number'];
                        $amount=$row_data['amount'];
                        $payment_mode=$row_data['payment_mode'];
                        $payment_date=$row_data['payment_date'];
                        echo "<tr><th>payment_id</th>
                        <th>order_id</th>
                        <th>invoice_number</th>
                        <th>amount</th>
                        <th>payment_mode</th>
                        <th>payment_date</th>
                        <th>Delete</th></tr>
                    </thead>
                    <tbody>	
                        <tr><td> $payment_id</td>
                          <td>$order_id</td>
                          <td>$invoice_number</td>
                          <td>$amount</td>
                          <td>$payment_mode</td>
                          <td>$payment_date</td>
                          <td><a href='index.php?delete_user=$user_id'><i class='ri-delete-bin-line'></i></a></td></tr>";
                        }
                   }
                   ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>