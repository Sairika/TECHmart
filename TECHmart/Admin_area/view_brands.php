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
            <h1>All Brands</h1>
        </section>
        <section class="TableBody">
            <table>
            <thead>
                <tr><th>Serial Number</th>
                    <th>Brand Title</th>
                    <th>Edit</th>
                    <th>Delete</th></tr>
            </thead>
            <tbody>
                <?php
                $number=0;
                $get_brand="Select * from `brands`";
                $result=mysqli_query($con,$get_brand);
                while($row=mysqli_fetch_assoc($result)){
                    $brand_id=$row['brand_id'];
                    $brand_title=$row['brand_title'];
                    $number++;
                    echo "<tr><td>$number</td>
                          <td>$brand_title</td>
                          <td><a href='index.php?edit_brand=$brand_id'><i class='ri-edit-box-line'></i></a></td>
                          <td><a href='index.php?delete_brand=$brand_id'><i class='ri-delete-bin-line'></i></a></td></tr>";
                    }
                ?>
            </tbody>
            </table>
        </section>
    </main>
</body>
</html>