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
                <li><a href="index.jsp" title="Home" class="hover">home</a></li>
                <li><a href="Contact.jsp" title="Contact">contact</a></li>

            </ul>
        </div>

        <div id="body">
            <img src="images/logo.gif" alt="Online Food Ordering" width="309" height="47" border="0" class="logo" />
            <div class='bodyText'>
                <br>
                <br>
                <h2> Registration Form </h2>
                <h5>Item marked with an asterisk(*) is compulsory</h5>
                <p>
                </p>

                <form method ="POST" action="reg.php" class="registration">
                    <table border="1">
                        <tr>
                            <td>Enter Your Name* :</td>
                            <td><input type="text" name="name"/></td>
                        </tr>
                        <tr>
                            <td>Enter Your Password *:</td>
                            <td><input type="password" name="password"/></td>
                        </tr>
                        <tr>
                            <td>Enter Your Mail* :</td>
                            <td><input type ="text" name="email"> </td>
                        </tr>
						<tr>
							<td><label for="registeras">Register As:</label></td>
							<td>
                                <select name="regusertype">
                                    <option value="user">user</option>
                                    <option value="manager">manager</option>
                                </select>
                            </td>
                        <tr>
                            <td></td>
                            <td><input type ="submit" value = "Register"/>
                                
                                <input type ="reset" value="Reset"/></td>

                        </tr>
                    </table>
                </form>
            </div>




            <div style='position:absolute; top:350px; right:300px;'> 
                <form method="post" action="login.php" name="login" class="login">
                    <h2>Members login</h2>
                    <label>Username</label><input name="name" type="text" tabindex="1" id="name" /><br class="spacer" />
                    <label>Password</label>
                    <input name="password" type="password" tabindex="2" id="password" />
                    <br class="spacer" />
                    <input name="" type="image" src="images/login_btn.gif" tabindex="3" title="Login" class="loginBtn" />
                </form>
            </div>
        </div>
        <br class="spacer" />	
        <div id="footer">
            <div class="footer">
                <ul>
                    <li><a href="index.jsp" title="Home">home</a>|</li>
                    <li><a href="Contact.jsp" title="Contact">contact</a></li>
                </ul>
                <p align='center'>&copy;Online Food Ordering</p>
                <p align='center'> All rights reserved. </p>
                <br class="spacer" />
            </div>
        </div>
    </body>
</html>