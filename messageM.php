<?php
	require_once("sessions.php") ;
	require_once("included functions.php") ;
	include_once('config.php');
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
                <li><a href="welcome.php" title="Home" class="hover">Home</a></li>
				<li><a href="view_orders.php" title="orders">View Orders</a> </li>
				<li><a href="messageM.php" title="sendmessages">Send Message</a></li>
                <li><a href="about.php" title="about">About</a></li>
                <li><a href="logout.php" title="Logout">Logout </a></li>
            </ul>
        </div>
		<div id="body">
            <img src="images/logo.gif" alt="OnlineJudge" width="309" height="47" border="0" class="logo" />

            <div class='bodyText'>
                <br>
                <br>
                <h2> MESSAGE </h2>
                <p> <strong>Online Food Ordering </strong> 
                    <br>
                    <br> Send a message to <strong>Client</strong>:
					<div style='position:float-left; top:310px; right:300px;'> 
						<form action="sndMsgM.php" method="post">
						DUMMY ID: <textarea name="id" cols="10" rows="1" placeholder="ID" style="resize:none;"></textarea>
						<br><b>Send To:</b></br> <textarea name="to" cols="30" rows="1" placeholder="Client ID" style="resize:none;"></textarea>
						<br><b>Message:</b></br> <textarea name="msg" cols="40" rows="5" placeholder="Your message..." style="resize:none;"></textarea>
							<input type="submit" value="Submit">
						</form>
					</div>
                </p>
            </div>
		</div>
	</body>
</html>