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
            <h1>All Categories</h1>
        </section>
        <section class="TableBody">
            <table>
            <thead>
                <tr><th>Category ID</th>
                    <th>Category Title</th>
                    <th>Edit</th>
                    <th>Delete</th></tr>
            </thead>
            <tbody>
                <?php
                $get_category="Select * from `categories`";
                $result=mysqli_query($con,$get_category);
                while($row=mysqli_fetch_assoc($result)){
                    $category_id=$row['category_id'];
                    $category_title=$row['category_title'];
                    echo "<tr><td>$category_id</td>
                          <td>$category_title</td>
                          <td><a href='index.php?edit_category=$category_id'><i class='ri-edit-box-line'></i></a></td>
                          <td><a href='index.php?delete_category=$category_id'><i class='ri-delete-bin-line'></i></a></td></tr>";
                    }
                ?>
            </tbody>
            </table>
        </section>
    </main>
</body>
</html>