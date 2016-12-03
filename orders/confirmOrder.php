<?php
	require_once("../sessions.php") ;
	include_once('../config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="../images/favicon.ico">
        <link href="../style.css" rel="stylesheet" type="text/css" />
        <title>Confirm Order</title>
    </head>
<link 

</head>
		
	<body>
	<div id="topNav">	
            <ul>
                <li><a href="../welcome.php" title="Home" class="hover">Home</a></li>
				<li><a href="../view_orders.php" title="orders">View Orders</a> </li>
				<li><a href="../sendmessages.php" title="sendmessages">Send Message</a></li>
                <li><a href="../about.php" title="about">About</a></li>
                <li><a href="../logout.php" title="Logout">Logout </a></li>
            </ul>
	</div>
	<div id="body">
            <img src="../images/logo.gif" alt="Online Food Ordering" width="309" height="47" border="0" class="logo" />
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
                            <td width="128" height="57"><h2>Order ID: <?php echo substr($_SESSION['orderid'],0,-4) ?></h2></td>

                        </tr>
						<tr>
                            <td width="128" height="57"><h4>FOOD NAME</h4></td>
                          <td width="156"><h4>PRICE</h4></td>
                            <td width="160"><h4>AMOUNT</h4></td>
                        </tr>
                        <!-- Now connect to DB and show the orders -->
                         <form method ="POST" action="../notifyuser.php" class="registration">
						<?php
						$total_price = 0 ;
						$orderID = (int)substr($_SESSION['orderid'],0,-4) ;
						//echo "".$orderID."</br>" ;
						$db = oci_connect(ORAUSER,ORAPASS,ORADB) ;
						$query = "select FOOD_ID , AMOUNT from ORDER_FOOD_TABLE where ORDER_ID = ".$orderID."";
						//echo $query ;
						$result = oci_parse($db,$query);
						oci_execute($result);
						while($row = oci_fetch_array($result))
						{	
						$query = "select NAME ,PRICE from FOOD where FOOD_ID=".$row['FOOD_ID']."" ;
						$result1 = oci_parse($db,$query) ;
						oci_execute($result1) ;
						$row1 = oci_fetch_array($result1) ;
						echo "<tr>";
						echo "<td>".$row1['NAME']."</td>" ;
						echo "<td>".$row1['PRICE']."</td>" ;
						echo "<td>".$row['AMOUNT']."</td>" ;
						echo "</tr>" ;
						$total_price = $total_price + $row1['PRICE']*$row['AMOUNT'] ;
						oci_free_statement($result1);
						}
						oci_free_statement($result);
						oci_close($db);
						echo "<td></td>" ;
						echo "<td><h4> TOTAL_BILL </h4></td>" ;
						echo "<td><h4>".$total_price."</h4></td>" ;
						?>
		</table>
	<input type ="submit" name = "accept" value = "ACCEPT"/> 
	<input type ="submit" name = "reject" value = "REJECT"/>
	</form>
	</div>
		
</select> 
	</body>
</html>