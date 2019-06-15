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

        <form id="join_us" method="POST" enctype="application/x-www-form-urlencoded" action="deleteSC.php">
  
            <fieldset class="textInputs">
                <legend>Delete high score</legend>
                <p><span>Please enter the date below.</p></span>
                <ul>
                   
					<li>
                        <label for="boardgame">boardgame:</label>
                        <input name="boardgame" type="text"  tabindex="3" title="boardgame" required pattern=[a-z A-Z]+ placeholder="Boardgame">
                    </li>
                   
                   
               
                </ul>
                <input type="submit" value="Delete">
            </fieldset>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>