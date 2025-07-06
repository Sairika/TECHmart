<!--connect file-->
<?php
include('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <main class="table">
        <section class="TableHeader">
            <h1>All Products</h1>
        </section>
        <section class="TableBody">
            <table>
            <thead>
                <tr><th>Product ID</th>
                    <th>Product Title</th>
                    <th>Product Price</th>
                    <th>Total Sold</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th></tr>
            </thead>
            <tbody>
                <?php
                $get_products="Select * from `products`";
                $result=mysqli_query($con,$get_products);
                while($row=mysqli_fetch_assoc($result)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_image1=$row['product_image1'];
                    $product_image1_tmp=$row['product_image1'];
                    $product_price=$row['product_price'];
                    //To count sold out products
                    $get_count="Select * from `order_pending` where product_id=$product_id";
                    $result_count=mysqli_query($con,$get_count);
                    $rows_count=mysqli_num_rows($result_count);

                    echo "<tr><td>$product_id</td>
                          <td><img src='./product_images/$product_image1'>$product_title</td>
                          <td><strong>$$product_price.00</strong></td>
                          <td>0</td>
                          <td class='status available'>Available</td>
                          <td><a href='index.php?edit_products=$product_id'><i class='ri-edit-box-line'></i></a></td>
                          <td><a href='index.php?delete_product=$product_id'><i class='ri-delete-bin-line'></i></a></td></tr>";
                    }
                ?>
            </tbody>
            </table>
        </section>
    </main>
</body>
</html>