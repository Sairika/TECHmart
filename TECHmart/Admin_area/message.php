<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Messages</title>
    <link rel="stylesheet" href="message.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <div class="admin-panel">
        <div class="sidebar">
            <ul>
                <li><a href="index.php">Admin Panel</a></li>
                <li class="active"><a href="message.php">Messages</a></li>
                <li><a href="../Homepage.php">Home</a></li>
                <li><a href="../Home.php">Shop</a></li>
                <li><a href="../about.php">About</a></li>
                <li><a href="../Featured_products.php">Featured Products</a></li>
                <li><a href="../blog.php">Blog</a></li>
                <li><a href="admin_logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">
           <div class="messages">
            <div class="messages">
                <?php
                // Establish a database connection (replace with your connection details)
                   include('../include/connect.php');
                   include('../Functions/common_function.php');
                   @session_start();
                // Fetch messages from the database
                    $sql = "SELECT * FROM contact";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="message">';
                        echo '<h3>' . $row["user_name"] . '</h3>';
                        echo '<p>Email: ' . $row["user_email"] . '</p>';
                        echo '<p>Message: ' . $row["user_message"] . '</p>';
                        echo '</div>';
                        }
                    } 
                    else {
                    echo "No messages found.";
                   }
                ?>
           </div>
        </div>
      </div>
    </div>
</body>
</html>

