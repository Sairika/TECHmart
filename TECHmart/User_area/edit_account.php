<?php
if(isset($_GET['edit_account'])){
    $user_session_name=$_SESSION['user_email'];
    $select_query="Select * from `user_table` where user_email='$user_session_name'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_array($result_query);
    $user_id=$row_fetch['user_id'];
    $user_name=$row_fetch['username'];
    $user_email=$row_fetch['user_email'];
    $user_phone=$row_fetch['user_phone'];
    $user_address=$row_fetch['user_address'];
    if(isset($_POST['user_update'])){
       $update_id=$user_id;
       $user_name=$_POST['username'];
       $user_email=$_POST['user_email'];
       $user_phone=$_POST['user_phone'];
       $user_address=$_POST['user_address'];
       //$user_image=$_POST['user_image']['name'];
       //$user_image_tmp=$_POST['user_image']['tmp'];
       //move_uploaded_file($user_image,'./user_image/$user_image);

       //Update query
       $update_data="Update `user_table` 
       set username='$user_name',user_email='$user_email',user_phone=$user_phone,user_address='$user_address'
       where user_id=$update_id";
       $result_query_update=mysqli_query($con,$update_data);
       if($result_query_update){
        echo "<script>alert('Data Updated Successfully.')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
       }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
</head>
<body>
<div class="contact">
<h2 style="text-align:center;font-weight:bolder;font-size:48px;background-color:#7b7ff6;padding:0.25em;">Edit Account</h2>
<img src="../Photos/undraw_Swipe_profiles_re_tvqm.png" style="width:200px;height:150px;object-fit:contain;">
    <form action="" method="post" entype="multipart/form-data">
        <p><input type="text"  name="user_username" value="Enter your username:"></p>
        <p><input type="email" name="user_email" value="<?php echo "$user_email";?>"></p>
        <p><input type="phone"  name="user_phone" value="<?php echo "$user_phone";?>"></p>
        <p><input type="file" name="user_image">
        <!--img src="./User_image/<?php echo "$user_image"?>"--></p>
        <p><textarea rows="4" name="user_address" placeholder="Update Address"></textarea></p>
        <p><input type="submit" value="Update" class="button" name="user_update"></p>
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
    position:relative;background-color: var(--white-color);padding: 60px;border-radius: 10px;object-fit:contain;margin-bottom:50px;
    max-width: 900px;margin: 4em auto;box-shadow: rgba(0,0,0,0.2) 0 18px 50px -10px;height:700px;margin-left:500px;
}
.contact h1{
    font-style:3em;color:var(--main-color);
}
.contact :is(input,textarea){
    border:0;background-color:var(--light-color);padding: 10px 15px;border-radius: 5px;
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
</style>