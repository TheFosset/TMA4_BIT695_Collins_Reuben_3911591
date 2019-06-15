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

        <form id="join_us" method="POST" enctype="application/x-www-form-urlencoded" action="registerBA.php">
  
            <fieldset class="textInputs">
                <legend>Join up today!</legend>
                <p><span>Please enter your details below.</p></span>
                <ul>
				<li>
                        <label for="MemberID">Member ID:</label>
                        <input name="MemberID" type="int"  tabindex="1" title="MemberID" placeholder="Please enter Member ID">
                    </li>
                    <li>
                        <label for="firstname">Firstname:</label>
                        <input name="firstname" type="text"  tabindex="1" title="First and middle name" required pattern="[a-z A-Z]+" placeholder="Please enter first name">
                    </li>
                    <li>
                        <label for="surname">Surname:</label>
                        <input name="surname" type="text"  tabindex="2" title="Last name" required pattern="[a-z A-Z]+" placeholder="Please enter last name">
                    </li>
                    <li>
                        <label for="Boardgame">Boardgame:</label>
                        <input name="boardgame" type="text"  tabindex="3" title="Boardgame"  placeholder="Boardgame">
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