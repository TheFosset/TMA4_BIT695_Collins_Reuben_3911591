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

        <form id="join_us" method="POST" enctype="application/x-www-form-urlencoded" action="deleteS.php">
  
            <fieldset class="textInputs">
                <legend>Delete your event</legend>
                <p><span>Please enter the date below.</p></span>
                <ul>
                   
					<li>
                        <label for="date">Date:</label>
                        <input name="date" type="text"  tabindex="1" title="date" placeholder="dd.mm.yyyy"
					  pattern="(?:(?:0[1-9]|1[0-9]|2[0-9])\.(?:0[1-9]|1[0-2])|(?:30)\.(?:(?!02)(?:0[1-9]|1[0-2]))|(?:31)\.(?:0[13578]|1[02]))\.(?:19|20)[0-9]{2}">
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