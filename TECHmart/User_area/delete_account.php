<?php
$user_email_session=$_SESSION['user_email'];
if(isset($_POST['delete'])){
    $delete_query="Delete from `user_table` where user_email= $user_email_session";
    $result=mysqli_query($con,$delete_query);
    if ($result){
        session_destroy();
        echo "<script>alert('Account Deleted successfully.')</script>";
        echo "<script>window.open(../Home.php,'_self')</script>";
    }
}
if(isset($_POST['donot_delete'])){
    echo "<script>window.open(profile.php,'_self')</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Delete Account</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
.delete{
    position:relative;background-color: var(--white-color);padding: 60px;border-radius: 10px;margin-bottom:50px;
    max-width: 900px;margin: 4em auto;box-shadow: rgba(0,0,0,0.2) 0 18px 50px -10px;height:700px;margin-left:500px;
}
.delete h1{
    font-style:3em;color:var(--main-color);
}
.delete :is(input,textarea){
    border:0;background-color:var(--light-color);padding: 15px 20px;border-radius: 5px;
    font-family: inherit;width: 100%;outline: 0;
}
.delete p{
    margin-bottom: 20px;
}
.delete .button{
    background-color:var(--main-color);color: var(--white-color);font-weight:600;
    line-height: 18px;cursor: pointer;transition:background-color 0.3s ease 0s;
    -webkit-transition:background-color 0.3s ease 0s;
}
.delete .button:hover{
    background-color:var(--secondary-color);
}
</style>

</head>

<body>
<body class="bg-light">
<div class="delete">
<h2 style="text-align:center;font-weight:bolder;font-size:36px;background-color:#7b7ff6;padding:0.75em;">Delete Account</h2>
<img src="../Photos/undraw_Personal_info_re_ur1n.png" style="width:800px;height:400px;object-fit:contain;">
    <form action="" method="post">
        <p><input type="submit" value="Delete Account" class="button" name="delete"></p>
        <p><input type="submit" value="Don't Delete Account" class="button" name="donot_delete"></p>
    </form>
</div>
</body>

</html>