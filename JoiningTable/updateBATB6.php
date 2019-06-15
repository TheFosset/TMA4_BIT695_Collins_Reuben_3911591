<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Posted values.

 $MemberID7 = $_POST['MemberID7'];

$date6 = $_POST['date6'];

$boardgame6 = $_POST['boardgame6'];



// Attempt update query execution

$sql = "UPDATE board_games SET boardgame6='$boardgame6' WHERE MemberID='$MemberID7'";


if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Posted values.

 $MemberID7 = $_POST['MemberID7'];

$date6 = $_POST['date6'];

$boardgame6 = $_POST['boardgame6'];


// Attempt update query execution

$sql = "UPDATE board_games SET date6='$date6' WHERE MemberID='$MemberID7'";


if(mysqli_query($link, $sql)){
    echo "Success";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>