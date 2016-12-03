<?php
	require_once("sessions.php") ;
	require_once("included functions.php") ;
//	include_once('config.php');
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
		<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		//something posted
			$db = oci_connect(ORAUSER,ORAPASS,ORADB);
			$orderID = (int)substr($_SESSION['orderid'],0,-4) ;
			$status = "" ;
			//connect to db and set status field
			if (isset($_POST['accept'])) {
				$status = "Granted" ;
			} else {
				$status = "Rejected" ;	
			}
			$insertquery = "UPDATE ORDER_TABLE SET COMMENTS = '".$status."' where ORDER_ID=".$orderID."" ;
			//echo $insertquery ;
			$insertresult=oci_parse($db,$insertquery);
			oci_execute($insertresult);
			oci_free_statement($insertresult);
		}
		// if accpeted then assign delivery employee and expected time and also send message to customer 
		// else in a text box send msg why rejected
		if($status=='Granted'){
			redirect_to("accept_a_order.php") ;
		}
		else{
			redirect_to("reject_a_order.php") ;
		}
		oci_close($db);
		?>
	
	
	</body>
</html>