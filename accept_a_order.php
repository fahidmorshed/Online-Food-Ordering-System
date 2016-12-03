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
	<table>
                        <col width="200px">
                        <col width="200px">
                        <col width="200px">
                        <col width="180px">
                        <col width="150px">
						<col width="150px">
                        <col width="150px">
                        <tr>
                            <td width="128" height="57"><h2>Employee Names</h2></td>
                        </tr>
						</br> ;
		<form action="finalstep.php" method="POST" class="registration">
		<?php
			$db = oci_connect(ORAUSER,ORAPASS,ORADB);
			$query = "select * from DELIVERY_EMPLOYEE ORDER BY NAME" ;
			$result = oci_parse($db,$query);
			oci_execute($result);
			while($row = oci_fetch_array($result))
			{
				echo "<tr>" ;
				echo '<td> <input type = "checkbox" name = "delivery_employee" value= "' ;
				echo $row['NAME'] ;
				echo '"> '.$row['NAME'].'</td>' ;
				echo "</br>" ;
			}
		?>
			</br>
			<tr>
                            <td></td>
							<td></td>
                            <td></br></td>
                        </tr>
						</table>
	<td><input type="submit" value="Assign"></td>
	</form>
	</div>
 </body>
</html>