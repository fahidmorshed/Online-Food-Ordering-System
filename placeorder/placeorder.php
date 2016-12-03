
<?php
	require_once("..\sessions.php") ;
	include_once('..\config.php');
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
                <li><a href="../welcome.php" title="Home" class="hover">home</a></li>
                <li><a href="../about.php" title="about">About</a></li>
                <li><a href="../logout.php" title="Logout">logout </a></li>
            </ul>
	</div>

	<div id="body">
            <img src="../images/logo.gif" alt="Online Food Ordering" width="309" height="47" border="0" class="logo" />
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
                            <td width="128" height="57"><h2>Food Items</h2></td>
                          <td width="156"><h2>Price|Per Item</h2></td>
                            <td width="160"><h2>Quantity</h2></td>
                        </tr>
                        <!-- Now connect to DB and show the food -->
						
                         <form method ="POST" action="processorder.php" class="registration">
                         
                        <?php
						
                        	$db = oci_connect(ORAUSER,ORAPASS,ORADB) ;
                        	$query = "select * from FOOD order by NAME";
                        	$result = oci_parse($db,$query);
                        	oci_execute($result);
                        	while($row = oci_fetch_array($result))
                        	{	
								echo "<tr>";
								echo "<td>".$row['NAME']."</td>";				
								echo "<td>".$row['PRICE']."</td>";
								echo "<td><input type="."text name=".$row['NAME']." ></td>" ;
								echo "</tr>";
							}
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
	<input type ="reset" class="line" value="Reset"/>
	</span>
	<input type ="submit" value = "Order Now!!"/>
	</form>
	</div>
 </body>
</html>
