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
				<table>
                        <col width="300px">
                        <col width="200px">
                        <col width="200px">
                        <col width="180px">
                        <col width="150px">
						<col width="200px">
                        <tr>
                            <td width="128" height="57"><h2>FOOD ID</h2></td>
                          <td width="156"><h2>Name</h2></td>
                            <td width="160"><h2>PRICE</h2></td>
                        </tr>
                        <!-- Now connect to DB and show the orders -->
                         <form method ="POST" action="processorder.php" class="registration">
						<?php
							$db = oci_connect(ORAUSER,ORAPASS,ORADB);
							$table_name =  "FOOD" ;
							$query = "select * from {$table_name} ORDER BY ORDER_ID ASC";
							$result = oci_parse($db,$query);
							oci_execute($result);
							while($row = oci_fetch_array($result))
							{
								//<a href="user_register.php">Need an account?</a>
								//<a href="user_register.php">	
								echo "<tr>";
								echo "<td> <a href='orders/".$row['FOOD_ID'].".php'>".$row['FOOD_ID']."</a></td>";				
								echo "<td>".$row['NAME']."</td>";
								echo "<td>".$row['PRICE']."</td>";
								echo "</tr>";
							}
							echo "</table></p>";
							oci_free_statement($result);
							oci_close($db);	
						?>
							<!-- add an comment -->
                        <tr>
                            <td></td>
							<td></td>
                            <td></br></td>
                        </tr>
			</table>                
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