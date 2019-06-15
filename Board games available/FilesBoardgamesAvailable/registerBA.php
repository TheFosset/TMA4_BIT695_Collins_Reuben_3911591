<?php

/* Attempt MySQL server connection.*/
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/*Form validation. */
if(isset($_POST['MemberID'])){
$MemberID = $_POST['MemberID'];
}else{
	echo "Member ID field is missing";
}
if(isset($_POST['firstname'])){
$firstname = $_POST['firstname'];
}else{
	echo "Fistname field is missing";
}
if(isset($_POST['surname'])){
$surname = $_POST['surname'];
}else{
    echo "Surname field is missing";
}
if(isset($_POST['boardgame'])){
$boardgame = $_POST['boardgame'];
}else{
   echo "Boardgame field is missing";
}

// Attempt insert query execution
$sql = "INSERT INTO boardgames ( MemberID, firstname, surname, boardgame) VALUES ('$MemberID','$firstname', '$surname', '$boardgame')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);



?>