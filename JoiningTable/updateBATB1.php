<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $MemberID2 = $_POST['MemberID2'];

$date1 = $_POST['date1'];

$boardgame1 = $_POST['boardgame1'];



// Attempt update query execution

$sql = "UPDATE board_games SET boardgame1='$boardgame1' WHERE MemberID='$MemberID2'";


if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Posted values.

 $MemberID2 = $_POST['MemberID2'];

$date1 = $_POST['date1'];

$boardgame1 = $_POST['boardgame1'];

echo "$date1";

// Attempt update query execution

$sql = "UPDATE board_games SET date1='$date1' WHERE MemberID='$MemberID2'";


if(mysqli_query($link, $sql)){
    echo "Success";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>