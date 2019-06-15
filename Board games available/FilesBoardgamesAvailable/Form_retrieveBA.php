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

        <form id="join_us" method="POST" enctype="application/x-www-form-urlencoded" action="retrieveBA.php">
  
            <fieldset class="textInputs">
                <legend>Retrieve your details</legend>
                <p><span>Please enter your Member ID below.</p></span>
                <ul>
                    
                    <li>
                        <label for="Member ID">Member ID:</label>
                        <input name="MemberID" type="tel"  tabindex="4" title="MemberID" required pattern="[0-9 -()]+" >
                    </li>
               
                </ul>
                <input type="submit" value="Retrieve">
            </fieldset>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>