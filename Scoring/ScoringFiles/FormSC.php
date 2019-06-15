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

        <form id="join_us" method="POST" enctype="application/x-www-form-urlencoded" action="registerSC.php">
  
            <fieldset class="textInputs">
                <legend>Scoring</legend>
                <p><span>Please enter boardgame highest score details below:</p></span>
                <ul>
				 <li>
                        <label for="Boardgame">Boardgame:</label>
                        <input name="boardgame" type="text"  tabindex="3" title="Boardgame"  placeholder="Boardgame" required pattern="[a-z A-Z]+">
                    </li>
				    <li>
                        <label for="High Score">Highest score:</label>
                        <input name="high_score" type="text"  tabindex="1" title="high_score" placeholder="Highest score." required pattern="[a-z A-Z 0-9]+">
                    </li>
                    <li>
                        <label for="firstname">firstname:</label>
                        <input name="firstname" type="text"  tabindex="2" title="firstname" required pattern="[a-z A-Z]+" placeholder="Please enter your name">
                    </li>
					<li>
                        <label for="surname">surname:</label>
                        <input name="surname" type="text"  tabindex="2" title="surname" required pattern="[a-z A-Z]+" placeholder="Please enter your surname">
                    </li>
					<li>
                        <label for="MemberID">Member ID:</label>
                        <input name="MemberID" type="int"  tabindex="2" title="MemberID" required pattern="[0-9]+" placeholder="Please enter your Member ID">
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