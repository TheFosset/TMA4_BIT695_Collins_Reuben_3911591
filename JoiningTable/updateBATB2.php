<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $MemberID3 = $_POST['MemberID3'];

$date2 = $_POST['date2'];

$boardgame2 = $_POST['boardgame2'];



// Attempt update query execution

$sql = "UPDATE board_games SET boardgame2='$boardgame2' WHERE MemberID='$MemberID3'";


if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Posted values.

 $MemberID3 = $_POST['MemberID3'];

$date2 = $_POST['date2'];

$boardgame2 = $_POST['boardgame2'];


// Attempt update query execution

$sql = "UPDATE board_games SET date2='$date2' WHERE MemberID='$MemberID3'";


if(mysqli_query($link, $sql)){
    echo "Success";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>