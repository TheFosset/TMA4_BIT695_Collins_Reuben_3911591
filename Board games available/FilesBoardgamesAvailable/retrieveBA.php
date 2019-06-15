<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $ID = $_POST['MemberID'];

// Attempt select query execution

$sql = "SELECT * FROM boardgames WHERE MemberID='$ID'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>firstname</th>";
                echo "<th>surname</th>";
                echo "<th>boardgame</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "<td>" . $row['boardgame'] . "</td>";
               
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>