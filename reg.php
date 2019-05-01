<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "login");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " .mysqli_connect_error());
}
 
// Escape user inputs for security
$empid = mysqli_real_escape_string($link, $_REQUEST['empid']);
$empname = mysqli_real_escape_string($link, $_REQUEST['empname']);
$deptid = mysqli_real_escape_string($link, $_REQUEST['deptid']);
$phno = mysqli_real_escape_string($link, $_REQUEST['phno']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$doj = mysqli_real_escape_string($link, $_REQUEST['doj']);
 
// Attempt insert query execution
$sql = "call register($empid,'$empname',$deptid,$phno,'$email','$dob','$doj')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>