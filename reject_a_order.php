<?php
	require_once("sessions.php") ;
	include_once('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="../images/favicon.ico">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Accept Order</title>
    </head>
<link 

</head>

<body>
	<div id="topNav">	
            <ul>
                <li><a href="welcome.php" title="Home" class="hover">Home</a></li>
				<li><a href="view_orders.php" title="orders">View Orders</a> </li>
				<li><a href="sendmessages.php" title="sendmessages">Send Message</a></li>
                <li><a href="about.php" title="about">About</a></li>
                <li><a href="logout.php" title="Logout">Logout </a></li>	
            </ul>
	</div>
	<div id="body">
            <img src="images/logo.gif" alt="Online Food Ordering" width="309" height="47" border="0" class="logo" />
	
	<div class='bodyText'>
				
            <br>
            <br>
            <h2> Send Message To The Customer </h2>
                <br>
                <form action="rejectorderfinalstep.php" method="post" class="registration">
                    <table>
                        <col width="100px">
                        <col width="400px">
                        <tr>
                            <td><label for="code">Why Rejected?:</label></td>                            
                            <td><textarea rows="10" cols="40" name="code"></textarea></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="send" />
                                <input type="reset" value ="reset" />
                            </td>
                        </tr>

                    </table>                                                        
                </form>
            </div>
	</div>
 </body>
</html>