<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $day = $_POST['day'];

$date = $_POST['date'];

$venue = $_POST['venue'];

$boardgame = $_POST['boardgame'];


// Attempt update query execution

$sql = "UPDATE schedule SET day='$day' WHERE boardgame='$boardgame'";


if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $day = $_POST['day'];

$date = $_POST['date'];

$venue = $_POST['venue'];

$boardgame = $_POST['boardgame'];


$sql = "UPDATE schedule SET date='$date' WHERE boardgame='$boardgame'";


if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $day = $_POST['day'];

$date = $_POST['date'];

$venue = $_POST['venue'];

$boardgame = $_POST['boardgame'];

$sql = "UPDATE schedule SET venue='$venue' WHERE boardgame='$boardgame'";

if(mysqli_query($link, $sql)){
    echo "boardgame was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);


?>