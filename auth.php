
<?php
session_start();
echo $_SESSION["username"];
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
