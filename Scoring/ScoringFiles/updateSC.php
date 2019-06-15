<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $boardgame = $_POST['boardgame'];

$high_score = $_POST['high_score'];

$firstname = $_POST['firstname'];

$surname = $_POST['surname'];

$MemberID = $_POST['MemberID'];


// Attempt update query execution

$sql = "UPDATE scoring SET high_score='$high_score' WHERE boardgame='$boardgame'";


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

  $boardgame = $_POST['boardgame'];

$high_score = $_POST['high_score'];

$firstname = $_POST['firstname'];

$surname = $_POST['surname'];

$MemberID = $_POST['MemberID'];


$sql = "UPDATE scoring SET firstname='$firstname' WHERE boardgame='$boardgame'";


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

 $boardgame = $_POST['boardgame'];

$high_score = $_POST['high_score'];

$firstname = $_POST['firstname'];

$surname = $_POST['surname'];

$MemberID = $_POST['MemberID'];

$sql = "UPDATE scoring SET surname='$surname' WHERE boardgame='$boardgame'";

if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Posted values.

 $boardgame = $_POST['boardgame'];

$high_score = $_POST['high_score'];

$firstname = $_POST['firstname'];

$surname = $_POST['surname'];

$MemberID = $_POST['MemberID'];

$sql = "UPDATE scoring SET MemberID='$MemberID' WHERE boardgame='$boardgame'";

if(mysqli_query($link, $sql)){
    echo "Scoring was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);


?>