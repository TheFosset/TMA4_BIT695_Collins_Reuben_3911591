<?php

/* Attempt MySQL server connection.*/
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/*Form validation. */
if(isset($_POST['day'])){
$day = $_POST['day'];
}else{
	echo "day field is missing";
}
if(isset($_POST['date'])){
$date = $_POST['date'];
}else{
	echo "date field is missing";
}
if(isset($_POST['venue'])){
$venue = $_POST['venue'];
}else{
    echo "Venue field is missing";
}
if(isset($_POST['boardgame'])){
$boardgame = $_POST['boardgame'];
}else{
   echo "Boardgame field is missing";
}

// Attempt insert query execution
$sql = "INSERT INTO schedule ( day, date, venue, boardgame) VALUES ('$day','$date', '$venue', '$boardgame')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);



?>