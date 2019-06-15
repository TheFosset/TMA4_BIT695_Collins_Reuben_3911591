<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $MemberID6 = $_POST['MemberID6'];

$date5 = $_POST['date5'];

$boardgame5 = $_POST['boardgame5'];



// Attempt update query execution

$sql = "UPDATE board_games SET boardgame5='$boardgame5' WHERE MemberID='$MemberID6'";


if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Posted values.

 $MemberID6 = $_POST['MemberID6'];

$date5 = $_POST['date5'];

$boardgame5 = $_POST['boardgame5'];


// Attempt update query execution

$sql = "UPDATE board_games SET date5='$date5' WHERE MemberID='$MemberID6'";


if(mysqli_query($link, $sql)){
    echo "Success";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>