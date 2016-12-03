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
                <li><a href="index.php" title="home">Home</a></li>
                <li><a href="about.php" title="about" class="hover">About</a></li>
            </ul>
        </div>
        <div id="body">
            <img src="images/logo.gif" alt="OnlineJudge" width="309" height="47" border="0" class="logo" />
            
            <div class='bodyText'>
                <br>
                <br>
                <h2> About </h2>
                <p> <strong>Online Food Ordering </strong> is a Database project using Oracle and PHP under the supervision of Fatema Tuz Zohra.
                    <br>
                    <br>This project is done by:
                    <br>
                    
                    <br> <strong> Fahid Morshed</strong>
                    <br> Student ID: 1105021
                    <br> Department of Computer Science & Engineering,
                    <br> Bangladesh University of Engineering & Technology, BUET.
                    <br> 
                    
                    <br> <strong> Mazharul Islam</strong>
                    <br> Student ID: 1105013
                    <br> Department of Computer Science & Engineering,
                    <br> Bangladesh University of Engineering & Technology, BUET.
                    <br>
				
                </p>
            </div>

		if the user is logged in don't show this 	
          <div style='position:absolute; top:400px; right:300px;'> 
                <form method="post" action="login.php" name="login" class="login">
                    <h2>Members login</h2>
                    <label>Username</label> <input name="name" type="text" tabindex="1" id="name"/><br class="spacer"  />
                    <label>Password</label>
                    <input name="password" type="password" tabindex="2" id="password" />
                    <td><label for="usertype">Log In As:</label></td>
                            <td>
                                <select name="usertype">
                                    <option value="user">user</option>
                                    <option value="manager">manager</option>
                                </select>
                            </td>                        
                    <br class="spacer" />
                    <input name="" type="image" src="images/login_btn.gif" tabindex="3" title="Login" class="loginBtn" />
                </form>
                
				<a href="user_register.php">Need an account?</a>
				</br>
				<font color="red">
				<h3>
				<?php
					//echo showmsg("invalidlogin") ;
					//$_SESSION['invalidlogin'] = "" ;
				?>
				</h3>
				<font>
            </div>
        </div>
        <br class="spacer" />	
        <div id="footer">
            <div class="footer">
                <ul>
                    <li><a href="index.php" title="home">Home</a>|</li>
                    <li><a href="about.php" title="about">About</a></li>
                </ul>
                <p align='center'>&copy;Online Food Ordering</p>
                <p align='center'> All rights reserved. </p>
                <br class="spacer" />
            </div>
        </div>
    </body>
</html>