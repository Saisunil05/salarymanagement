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
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
 
// Attempt insert query execution
$sql = "INSERT INTO regemp (empid, password) VALUES ('$empid', '$password')";
if(mysqli_query($link, $sql)){
    echo "Registered successfully .";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>