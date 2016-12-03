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
		<br>
		<br>
        <div id="body">
            <img src="images/logo.gif" alt="Online Food Ordering" width="309" height="47" border="0" class="logo" />
            <div class='bodyText'>
                <br>
                <br>
                <form method ="POST" action="authorise_manager.php" class="registration">
					<br>
                    <table border="1">
                        <tr>
                            <td>Enter Your Verfication Key* </td>
                            <td><input type="text" name="key"/></td>
                        </tr>
						<tr>
                            <td><input type ="submit" value = "Submit"/>    
                                <input type ="reset" value="Reset"/></td>

                        </tr>
                    </table>
                </form>
            </div>	
    </body>
</html>