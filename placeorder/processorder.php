<?php
	require_once("..\sessions.php") ;
	include_once('..\config.php');
	require_once("..\included functions.php") ;
?>
<!DOCTYPE html public "-//W3C/DTD HTML 4.01 Transitional//EN"
	|http://www.w3.org/TR/html4/losse.dtd">
	
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="images/favicon.ico">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Confirm Order || Online Food Ordering</title>
	</head>	
	<body>
		<?php
			//insert in the order_table tables
			
			$time = (string) (date("h:m:s")) ;
			$status = "Pending" ;
			$comments = "NoComments" ;
			//connecting to DB
			
			$db = oci_connect(ORAUSER,ORAPASS,ORADB);
			$insertquery = "insert into ORDER_TABLE(TIME,STATUS,COMMENTS) values('".$time."','".$status."','".$comments."')";
			//echo "".$insertquery." </br>" ;
			$insertresult=oci_parse($db,$insertquery);
			oci_execute($insertresult);
			oci_free_statement($insertresult);
			//oci_close($db);
			//insert into oderFood table 
			//get the order id from order_table 
			
			//$db = oci_connect(ORAUSER,ORAPASS,ORADB);
			$query = "select ORDER_ID from ORDER_TABLE where '".$time."'=ORDER_TABLE.time and '".$status."'=ORDER_TABLE.status and '".$comments."'=ORDER_TABLE.comments" ;
			//echo "".$query."</br>" ;	                             		                              
			$result = oci_parse($db,$query);			                             		                              
			oci_execute($result);
			$row = oci_fetch_array($result) ;
			$orderID = $row['ORDER_ID'] ;
		//	echo "<td>".$row['ORDER_ID']."</td>";
			oci_free_statement($result);
			foreach($_POST as $x => $x_value){
				if($x_value!=""){
					//Find food id
					$query = "select FOOD_ID from FOOD where '".$x."'=FOOD.NAME" ;
					//	echo "".$query."</br>" ;
					$result = oci_parse($db,$query) ;
					oci_execute($result);
					$row = oci_fetch_array($result) ;
					oci_free_statement($result) ;
					$food_id = $row['FOOD_ID'] ;
					$insertquery = "insert into ORDER_FOOD_TABLE ( ORDER_ID , FOOD_ID , AMOUNT ) values(".$orderID.",".$food_id.",".$x_value.")" ; 
					//echo "".$insertquery."</br>" ;
					$result = oci_parse($db,$insertquery);			                             		                              
					oci_execute($result);
					//if($x_value!=""){
					//echo "<td> Iteam Name ".$x." </td>" ;
					//echo "<td> Quantity ".$x_value." </td>" ;
					//echo "</br>"	;
					oci_free_statement($result) ;
				}
			}
			
			//create the order file
			$orderFile = fopen("../orders/".$orderID.".php", "w") ; 
			fclose($orderFile) ;
			$newfile = "../orders/".$orderID.".php" ;
			$file = 'copy.php';
			if (!copy($file, $newfile)) {
				echo "Some thing went Wrong\n";
				//exit(1) ;
			}
			echo "<h3>Your Order Has been send to be procssed" ;
			oci_close($db);
		?>
		
	</body>
</html>