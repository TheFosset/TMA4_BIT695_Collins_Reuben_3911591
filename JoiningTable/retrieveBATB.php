<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "123", "tma2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $ID = $_POST['MemberID'];

// Attempt select query execution

$sql = "SELECT * FROM board_games WHERE MemberID='$ID'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>firstname</th>";
                echo "<th>surname</th>";
                echo "<th>boardgame1</th>";
                echo "<th>boardgame2</th>";
				echo "<th>boardgame3</th>";
				echo "<th>boardgame4</th>";
				echo "<th>boardgame5</th>";
				echo "<th>boardgame6</th>";
				echo "<th>boardgame7</th>";
				echo "<th>date1</th>";
				echo "<th>date2</th>";
				echo "<th>date3</th>";
				echo "<th>date4</th>";
				echo "<th>date5</th>";
				echo "<th>date6</th>";
				echo "<th>date7</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "<td>" . $row['boardgame'] . "</td>";
				 echo "<td>" . $row['boardgame1'] . "</td>";
				  echo "<td>" . $row['boardgame2'] . "</td>";
				   echo "<td>" . $row['boardgame3'] . "</td>";
				    echo "<td>" . $row['boardgame4'] . "</td>";
					 echo "<td>" . $row['boardgame5'] . "</td>";
					  echo "<td>" . $row['boardgame6'] . "</td>";
					   echo "<td>" . $row['boardgame7'] . "</td>";
					    echo "<td>" . $row['date1'] . "</td>";
						echo "<td>" . $row['date2'] . "</td>";
						echo "<td>" . $row['date3'] . "</td>";
						echo "<td>" . $row['date4'] . "</td>";
						echo "<td>" . $row['date5'] . "</td>";
						echo "<td>" . $row['date6'] . "</td>";
						echo "<td>" . $row['date7'] . "</td>";
               
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