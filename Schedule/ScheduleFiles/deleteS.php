<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $date = $_POST['date'];



// Attempt delete query execution
$sql = "DELETE FROM schedule WHERE date='$date'";
if(mysqli_query($link, $sql)){
    echo "Your event was deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>