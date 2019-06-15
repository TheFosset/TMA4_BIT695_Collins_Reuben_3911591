<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $boardgame = $_POST['boardgame'];



// Attempt delete query execution
$sql = "DELETE FROM scoring WHERE boardgame='$boardgame'";
if(mysqli_query($link, $sql)){
    echo "Your high score was deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>