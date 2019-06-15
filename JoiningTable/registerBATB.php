<?php

/* Attempt MySQL server connection.*/
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/*Form validation. */
if(isset($_POST['MemberID1'])){
$MemberID = $_POST['MemberID1'];
}else{
	echo "Member ID field is missing";
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
// Set the rest of the table to empty string.
$boardgame1 = '';
$boardgame2 = '';
$boardgame3 = '';
$boardgame4 = '';
$boardgame5 = '';
$boardgame6 = '';
$boardgame7 = '';

$date1 = '';
$date2 = '';
$date3 = '';
$date4 = '';
$date5 = '';
$date6 = '';
$date7 = '';


// Attempt insert query execution
$sql = "INSERT INTO board_games ( MemberID, firstname, surname, boardgame1, boardgame2, boardgame3, boardgame4, boardgame5, 
boardgame6, boardgame7, date1, date2, date3, date4, date5, date6, date7) VALUES ('$MemberID','$firstname', '$surname', '$boardgame1',
'$boardgame2', '$boardgame3', '$boardgame4', '$boardgame5', '$boardgame6', '$boardgame7', '$date1', '$date2', '$date3',
'$date4', '$date5', '$date6', '$date7')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);



?>