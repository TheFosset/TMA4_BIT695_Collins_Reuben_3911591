<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $firstname = $_POST['firstname'];

$surname = $_POST['surname'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$ID = $_POST['MemberID'];


// Attempt update query execution

$sql = "UPDATE players SET phone='$phone' WHERE MemberId=$ID";


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

 $firstname = $_POST['firstname'];

$surname = $_POST['surname'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$ID = $_POST['MemberID'];


$sql = "UPDATE players SET email='$email' WHERE MemberId=$ID";


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

 $firstname = $_POST['firstname'];

$surname = $_POST['surname'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$ID = $_POST['MemberID'];


$sql = "UPDATE players SET surname='$surname' WHERE MemberId=$ID";

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

 $firstname = $_POST['firstname'];

$surname = $_POST['surname'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$ID = $_POST['MemberID'];


$sql = "UPDATE players SET firstname='$firstname' WHERE MemberId=$ID";

if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);



?>