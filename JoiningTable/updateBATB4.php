<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $MemberID5 = $_POST['MemberID5'];

$date4 = $_POST['date4'];

$boardgame4 = $_POST['boardgame4'];



// Attempt update query execution

$sql = "UPDATE board_games SET boardgame4='$boardgame4' WHERE MemberID='$MemberID5'";


if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Posted values.

 $MemberID5 = $_POST['MemberID5'];

$date4 = $_POST['date4'];

$boardgame4 = $_POST['boardgame4'];


// Attempt update query execution

$sql = "UPDATE board_games SET date4='$date4' WHERE MemberID='$MemberID5'";


if(mysqli_query($link, $sql)){
    echo "Success";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>