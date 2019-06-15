<!-- BIT695 Web Technologies -->

<!DOCTYPE html>
<html lang=�en-GB�>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Board Game Aficianados</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="FormStyleBATB.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <main>
        <!-- An unseen HTML comment -->
		
<div id="container">
        <form id="join_us" method="POST" enctype="application/x-www-form-urlencoded" action="registerBATB.php">
  
            <fieldset class="textInputs">
                <legend>Join a Boardgame.</legend>
                <p><span>Please enter your details first then select the game to join below.</p></span>
                <ul>
				<li>
                        <label for="MemberID">Member ID:</label>
                        <input name="MemberID1" type="int"  tabindex="1" title="MemberID1" placeholder="Please enter Member ID">
                    </li>
                    <li>
                        <label for="firstname">Firstname:</label>
                        <input name="firstname" type="text"  tabindex="1" title="First and middle name" required pattern="[a-z A-Z]+" placeholder="Please enter first name">
                    </li>
                    <li>
                        <label for="surname">Surname:</label>
                        <input name="surname" type="text"  tabindex="2" title="Last name" required pattern="[a-z A-Z]+" placeholder="Please enter last name">
                    </li>
                    
                </ul>
                <input type="submit" value="Insert">

				<fieldset>

				<legend>Monday</legend>
				<p><span>Please enter your Member ID and date of game to join a game.</p></span>
				<p><span>Game: MONOPOLY. Venue: Club house.</p></span>
				<li>
                        <label for="MemberID2">Member ID:</label>
                        <input name="MemberID2" type="int"  tabindex="1" title="MemberID2" placeholder="Please enter Member ID">
                </li>

				<li>
                        <label for="Date">Date:</label>
                        <input name="date1" type="text"  tabindex="1" title="date1" placeholder="Please enter date of event">
                </li>

				<li>
                        <label for="Game">Game:</label>
                        <input name="boardgame1" type="text"  tabindex="1" title="boardgame1" placeholder="Please enter boardgame">
                </li>
                   
                </ul>
                <input type="submit"  value="Join" method="POST" formaction="updateBATB1.php">
				</fieldset>

				<fieldset>
				<legend>Tuesday</legend>
				<p><span>Please enter your Member ID and date of game to join a game.</p></span>
				<p><span>Game: No Game. Venue:</p></span>
				<li>
                        <label for="MemberID">Member ID:</label>
                        <input name="MemberID3" type="int"  tabindex="1" title="MemberID" placeholder="Please enter Member ID">
                </li>

				<li>
                        <label for="Date">Date:</label>
                        <input name="date2" type="int"  tabindex="1" title="date2" placeholder="Please enter date of event">
                </li>

				<li>
                        <label for="Game">Game:</label>
                        <input name="boardgame2" type="text"  tabindex="1" title="boardgame2" placeholder="Please enter boardgame">
                </li>
                   
                </ul>
                <input type="submit" value="Join" method="POST" formaction="updateBATB2.php" >
				</fieldset>

				<fieldset>
				<legend>Wednesday</legend>
				<p><span>Please enter your Member ID and date of game to join a game.</p></span>
				<p><span>Game: AC/DC. Venue: Susan's House.</p></span>
				<li>
                        <label for="MemberID">Member ID:</label>
                        <input name="MemberID4" type="int"  tabindex="1" title="MemberID" placeholder="Please enter Member ID">
                </li>

				<li>
                        <label for="Date">Date:</label>
                        <input name="date3" type="int"  tabindex="1" title="Date3" placeholder="Please enter date of event">
                </li>

				<li>
                        <label for="Game">Game:</label>
                        <input name="boardgame3" type="text"  tabindex="1" title="boardgame3" placeholder="Please enter boardgame">
                </li>
                   
                </ul>
                <input type="submit" value="Join" method="POST" formaction="updateBATB3.php" >
				</fieldset>

				<fieldset>
				<legend>Thursday</legend>
				<p><span>Please enter your Member ID and date of game to join a game.</p></span>
				<p><span>Game: Battleships. Venue: Club house.</p></span>
				<li>
                        <label for="MemberID">Member ID:</label>
                        <input name="MemberID5" type="int"  tabindex="1" title="MemberID5" placeholder="Please enter Member ID">
                </li>

				<li>
                        <label for="Date">Date:</label>
                        <input name="date4" type="int"  tabindex="1" title="date4" placeholder="Please enter date of event">
                </li>

				<li>
                        <label for="Game">Game:</label>
                        <input name="boardgame4" type="text"  tabindex="1" title="boardgame4" placeholder="Please enter boardgame">
                </li>
                   

                </ul>
                <input type="submit" value="Join" method="POST" formaction="updateBATB4.php">
				</fieldset>

				<fieldset>
				<legend>Friday</legend>
				<p><span>Please enter your Member ID and date of game to join a game.</p></span>
				<p><span>Game: MONOPOLY. Venue: Sam's House.</p></span>
				<li>
                        <label for="MemberID">Member ID:</label>
                        <input name="MemberID6" type="int"  tabindex="1" title="MemberID6" placeholder="Please enter Member ID">
                </li>

				<li>
                        <label for="Date">Date:</label>
                        <input name="date5" type="int"  tabindex="1" title="date5" placeholder="Please enter date of event">
                </li>

				<li>
                        <label for="Game">Game:</label>
                        <input name="boardgame5" type="text"  tabindex="1" title="boardgame5" placeholder="Please enter boardgame">
                </li>
                   
                </ul>
                <input type="submit" value="Join" method="POST" formaction="updateBATB5.php">
				</fieldset>

				<fieldset>
				<legend>Saturday</legend>
				<p><span>Please enter your Member ID and date of game to join a game.</p></span>
				<p><span>Game: No Game. Venue:</p></span>
				<li>
                        <label for="MemberID">Member ID:</label>
                        <input name="MemberID7" type="int"  tabindex="1" title="MemberID" placeholder="Please enter Member ID">
                </li>

				<li>
                        <label for="Date">Date:</label>
                        <input name="date6" type="int"  tabindex="1" title="date6" placeholder="Please enter date of event">
                </li>


				<li>
                        <label for="Game">Game:</label>
                        <input name="boardgame6" type="text"  tabindex="1" title="boardgame6" placeholder="Please enter boardgame">
                </li>
                   
                </ul>

				
                <input type="submit"  value="Join" method="POST" formaction="updateBATB6.php">
				
            </fieldset>
			
			<fieldset>
				<legend>Sunday</legend>
				<p><span>Please enter your Member ID and date of game to join a game.</p></span>
				<p><span>Game: Risk. Venue: Club house.</p></span>
				<li>
                        <label for="MemberID">Member ID:</label>
                        <input name="MemberID8" type="int"  tabindex="1" title="MemberID" placeholder="Please enter Member ID">
                </li>

				<li>
                        <label for="Date">Date:</label>
                        <input name="date7" type="int"  tabindex="1" title="date7" placeholder="Please enter date of event">
                </li>

				<li>
                        <label for="Game">Game:</label>
                        <input name="boardgame7" type="text"  tabindex="1" title="boardgame7" placeholder="Please enter boardgame">
                </li>
                   
                </ul>
                <input type="submit" value="Join" method="POST" formaction="updateBATB7.php">
				</fieldset>
		</form>

	

		  
 
    </main>
    <footer>

    </footer>
	
</body>
</html>