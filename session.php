<?php
include('login.php');
session_start();
$check=$_SESSION['username'];
$session=mysql_query("SELECT username FROM `login` WHERE username='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['username'];
if(!isset($login_session))
{
header("Location:login.html");
}
?>