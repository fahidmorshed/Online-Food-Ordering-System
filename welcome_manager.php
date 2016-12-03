<?php
	require_once("sessions.php") ;
	include_once("config.php") ;
?>
<!DOCTYPE html>
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
                <li><a href="welcome.php" title="home" class="hover">Home</a></li>
                <li><a href="view_orders.php" title="orders">View Orders</a> </li>
				<li><a href="editfoods.php" title="editfoods">Foods</a></li>
				<li><a href="sendmessages.php" title="sendmessages">Send Messages</a></li>
                <li><a href="logout.php" title="Logout">logout</a></li>				
            </ul>
        </div>

        <div id="body">
            <img src="images/logo.gif" alt="OnlineJudge" width="309" height="47" border="0" class="logo" />
            <div class='bodyText'>
                <br>
                <br>
                <h2> welcome <?php echo show_username() ; ?></h2>                
        </div>
        <br class="spacer" />	
        <div id="footer">
            <div class="footer">
                <ul>
                    <li><a href="welcome.php" title="Home">Home</a>|</li>
                    <li><a href="logout.php" title="Logout">Logout</a></li>
                </ul>
                <p align='center'>&copy;Online Food Ordering</p>
                <p align='center'> All rights reserved. </p>
                <br class="spacer" />
            </div>
        </div>
    </body>

</html>