<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $MemberID4 = $_POST['MemberID4'];

$date3 = $_POST['date3'];

$boardgame3 = $_POST['boardgame3'];



// Attempt update query execution

$sql = "UPDATE board_games SET boardgame3='$boardgame3' WHERE MemberID='$MemberID4'";


if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Posted values.

 $MemberID4 = $_POST['MemberID4'];

$date3 = $_POST['date3'];

$boardgame3 = $_POST['boardgame3'];


// Attempt update query execution

$sql = "UPDATE board_games SET date3='$date3' WHERE MemberID='$MemberID4'";


if(mysqli_query($link, $sql)){
    echo "Success";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>