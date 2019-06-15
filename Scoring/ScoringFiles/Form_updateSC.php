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

        <form id="join_us" method="POST" enctype="application/x-www-form-urlencoded" action="updateSC.php">
  
            <fieldset class="textInputs">
                <legend>Update Scoring.</legend>
                <p><span>Please update the scoring below.</p></span>
                <ul>
				    <li>
                        <label for="boardgame">boardgame:</label>
                        <input name="boardgame" type="text"  tabindex="3" title="boardgame" required pattern=[a-z A-Z]+ placeholder="Boardgame">
                    </li>
					<li>
                        <label for="high_score">High score:</label>
                        <input name="high_score" type="text"  tabindex="4" title="high_score" required pattern="[a-z A-Z 0-9]+" placeholder="high score." >
                    </li>
					<li>
                        <label for="firstname">firstname:</label>
                        <input name="firstname" type="text"  tabindex="4" title="firstname" required pattern="[a-z A-Z]+" placeholder="firstname." >
                    </li>
                    <li>
                        <label for="surname">Surname:</label>
                        <input name="surname" type="text"  tabindex="2" title="surname" required pattern="[a-z A-Z]+" placeholder="Surname.">
                    </li>
					 <li>
                        <label for="MemberID">Member ID:</label>
                        <input name="MemberID" type="text"  tabindex="2" title="MemberID" required pattern="[a-z A-Z 0-9]+" placeholder="Surname.">
                    </li>
                  
                  
					
                   
               
                </ul>
                <input type="submit" value="update">
            </fieldset>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>