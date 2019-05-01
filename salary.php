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
$sal = mysqli_real_escape_string($link, $_REQUEST['sal']);
$incentives = mysqli_real_escape_string($link, $_REQUEST['incentives']);
$bonus = mysqli_real_escape_string($link, $_REQUEST['bonus']);

// Attempt insert query execution
$sql = "INSERT INTO salary (empid, sal, incentives, bonus) VALUES ($empid, $sal, '$incentives', $bonus)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>