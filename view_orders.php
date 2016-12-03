<?php
	require_once("sessions.php") ;
	include_once('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="images/favicon.ico">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Place Order || Online Food Ordering</title>
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
		</br>
		</br>
		</br>
    	<table>
                        <col width="300px">
                        <col width="200px">
                        <col width="200px">
                        <col width="180px">
                        <col width="150px">
						<col width="200px">
                        <tr>
                            <td width="128" height="57"><h2>Order ID</h2></td>
                          <td width="156"><h2>Time</h2></td>
                            <td width="160"><h2>Status</h2></td>
                        </tr>
                        <!-- Now connect to DB and show the orders -->
                         <form method ="POST" action="processorder.php" class="registration">
						<?php
							$db = oci_connect(ORAUSER,ORAPASS,ORADB);
							$table_name =  "ORDER_TABLE" ;
							$query = "select * from {$table_name} ORDER BY ORDER_ID ASC";
							$result = oci_parse($db,$query);
							oci_execute($result);
							while($row = oci_fetch_array($result))
							{
								//<a href="user_register.php">Need an account?</a>
								//<a href="user_register.php">	
								echo "<tr>";
								echo "<td> <a href='orders/".$row['ORDER_ID'].".php'>".$row['ORDER_ID']."</a></td>";				
								echo "<td>".$row['TIME']."</td>";
								echo "<td>".$row['STATUS']."</td>";
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
	<span class="bodyText">	
	</form>
	</div>
 </body>
</html>
