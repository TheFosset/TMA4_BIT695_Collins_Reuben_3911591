<!-- BIT695 Web Technologies -->

<!DOCTYPE html>
<html lang=�en-GB�>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Board Game Aficianados</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="FormStyle.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <main>
        <!-- An unseen HTML comment -->

        <form id="join_us" method="POST" enctype="application/x-www-form-urlencoded" action="registerS.php">
  
            <fieldset class="textInputs">
                <legend>Schedule</legend>
                <p><span>Please enter boardgame details below:</p></span>
                <ul>
				<li>
                        <label for="day">Day:</label>
                        <input name="day" type="text"  tabindex="1" title="day" placeholder="Day of event." required pattern="[a-z A-Z]+">
                    </li>
                    <li>
                        <label for="Date">Date:</label>
                        <input name="date" type="text"  tabindex="1" title="day" placeholder="dd.mm.yyyy"
					  pattern="(?:(?:0[1-9]|1[0-9]|2[0-9])\.(?:0[1-9]|1[0-2])|(?:30)\.(?:(?!02)(?:0[1-9]|1[0-2]))|(?:31)\.(?:0[13578]|1[02]))\.(?:19|20)[0-9]{2}">
                    </li>
                    <li>
                        <label for="Venue">venue:</label>
                        <input name="venue" type="text"  tabindex="2" title="venue" required pattern="[a-z A-Z]+" placeholder="Please enter venue">
                    </li>
                    <li>
                        <label for="Boardgame">Boardgame:</label>
                        <input name="boardgame" type="text"  tabindex="3" title="Boardgame"  placeholder="Boardgame" required pattern="[a-z A-Z]+">
                    </li>
                    
                   
               
                </ul>
                <input type="submit" value="Insert">
            </fieldset>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>