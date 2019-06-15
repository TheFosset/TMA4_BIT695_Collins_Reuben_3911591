<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $MemberID8 = $_POST['MemberID8'];

$date7 = $_POST['date7'];

$boardgame7 = $_POST['boardgame7'];



// Attempt update query execution

$sql = "UPDATE board_games SET boardgame7='$boardgame7' WHERE MemberID='$MemberID8'";


if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Posted values.

 $MemberID8 = $_POST['MemberID8'];

$date7 = $_POST['date7'];

$boardgame7 = $_POST['boardgame7'];


// Attempt update query execution

$sql = "UPDATE board_games SET date7='$date7' WHERE MemberID='$MemberID8'";


if(mysqli_query($link, $sql)){
    echo "Success";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>