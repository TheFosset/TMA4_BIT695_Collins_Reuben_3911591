<?php

/* Attempt MySQL server connection.*/
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/*Form validation. */
if(isset($_POST['boardgame'])){
$boardgame = $_POST['boardgame'];
}else{
	echo "boardgame field is missing";
}
if(isset($_POST['high_score'])){
$high_score = $_POST['high_score'];
}else{
	echo "high_score field is missing";
}
if(isset($_POST['firstname'])){
$firstname = $_POST['firstname'];
}else{
    echo "firstname field is missing";
}
if(isset($_POST['surname'])){
$surname = $_POST['surname'];
}else{
   echo "surname field is missing";
}
if(isset($_POST['MemberID'])){
$MemberID = $_POST['MemberID'];
}else{
   echo "MemberID field is missing";
}

// Attempt insert query execution
$sql = "INSERT INTO scoring ( boardgame, high_score, firstname, surname, MemberID) VALUES ('$boardgame','$high_score', '$firstname', '$surname', '$MemberID')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);



?>