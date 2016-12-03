<?php
	require_once("sessions.php") ;
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="images/favicon.ico">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Online Food Ordering</title>
    </head>
    <body>

        <div id="topNav">	
            <ul>
                <li><a href="index.php" title="Home" class="hover">home</a></li>
                <li><a href="Contact.php" title="Contact">contact</a></li>

            </ul>
        </div>

        <div id="body">
            <img src="images/logo.gif" alt="Online Food Ordering" width="309" height="47" border="0" class="logo" />
            <div class='bodyText'>
                <br>
                <br>
				<?php 
					echo $_SESSION['MANAGER_ID'] ;
				?>
                <h4>Verfication Key Does not match</h4>
				<br>
				<a href="match_verfication_key.php">Try Again</a>
				<br>
				<a href="index.php">Go Back</a>
                <p>
                </p>
            </div>
    </body>
</html>