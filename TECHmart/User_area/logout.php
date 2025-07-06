<?php
session_start();
session_unset();
session_destroy();
echo "<script>window.open('../Home.php','_self')</script>";
?>