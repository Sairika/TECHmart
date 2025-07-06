<!--connect file-->
<?php
include('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <main class="table">
        <section class="TableHeader">
            <h1>All User List</h1>
        </section>
        <section class="TableBody">
            <table>
            <thead>
                <?php
                $get_user="Select * from `user_table`";
                $result=mysqli_query($con,$get_user);
                $row_count=mysqli_num_rows($result);
                echo "<tr><th>Serial No.</th>
                    <th>User name</th>
                    <th>User Email</th>
                    <th>User Phone number</th>
                    <th>User Address</th>
                    <th>Delete</th></tr>
                </thead>		
		   		   <tbody>";
                   if ($row_count==0){
                    echo "<h2>No users yet</h2>";
                   }
                   //username			//user_email				
	
                   else{
                     $number=0;
                     while($row_data=mysqli_fetch_assoc($result)){
                        $user_id=$row_data['user_id'];
                        $username=$row_data['username'];
                        $user_email=$row_data['user_email'];
                        $user_phone=$row_data['user_phone'];
                        $user_address=$row_data['user_address'];
                        $number++;
                        echo "<tr><td>$number</td>
                          <td>$username</td>
                          <td>$user_email</td>
                          <td>+880$user_phone</td>
                          <td>$user_address</td>
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