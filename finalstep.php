<?php
	require_once("sessions.php") ;
	include_once('config.php');
?>
<!DOCTYPE html public "-//W3C/DTD HTML 4.01 Transitional//EN"
	|http://www.w3.org/TR/html4/losse.dtd">
	
<html lang="en">
	<head>
		<title>Registration</title>
	</head>	
		
	<body>
	<?php
	$deliver_employee =  $_POST['delivery_employee'] ;
	$orderID = (int)substr($_SESSION['orderid'],0,-4) ;
	//echo  $orderID ;
	//connect to db and set the deliver_employee field; 
	$db = oci_connect(ORAUSER,ORAPASS,ORADB);
	
	$updatequery = "UPDATE ORDER_TABLE SET DELIVERY_EMPLOYEE = '{$deliver_employee}' where ORDER_ID = {$orderID}" ; 
	echo $updatequery ;
	$result = oci_parse($db,$updatequery);
	oci_execute($result) ;
	if($row=oci_fetch_array($result)){
		//echo "Order Has been succefully assigned to be Delivered" ;
	}
	else {
		//echo "Some thing went wrong" ;
	}
	oci_free_statement($result);
	
	$updatequery = "UPDATE ORDER_TABLE SET STATUS = 'Accepted' where ORDER_ID = {$orderID}" ; 
	echo $updatequery ;
	$result = oci_parse($db,$updatequery);
	oci_execute($result) ;
	if($row=oci_fetch_array($result)){
		//echo "Order Has been succefully assigned to be Delivered" ;
	}
	else {
		//echo "Some thing went wrong" ;
	}
	oci_free_statement($result);
	
	oci_close($db);	
	?>
	</body>
</html>