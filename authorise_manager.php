<?php
	require_once("sessions.php") ;
	require_once("included functions.php") ;
	include_once('config.php');
	print_r ($_POST) ;
	$key1 = $_POST['key'] ;
	$manager_id = $_SESSION['MANAGER_ID'] ;
	
	$db = oci_connect(ORAUSER,ORAPASS,ORADB);
	$query = "select * from MANAGER where MANAGER_ID = {$manager_id}" ;
	$result = oci_parse($db,$query);
	oci_execute($result);
	$row = oci_fetch_array($result) ;
	oci_free_statement($result);
	$key2 = $row['VERIFICATION_KEY'] ;

	if($key1==$key2){
		//set status to granted
		$update = "UPDATE MANAGER SET STATUS='GRANTED' WHERE MANAGER_ID = {$manager_id}" ;
		$result = oci_parse($db,$update) ;
		echo $update ;
		oci_execute($result);
		oci_free_statement($result);
		oci_close($db);
		redirect_to("welcome_manager.php") ;
	}
	else{
		//echo $key1 ;
		//echo $key2 ;
		redirect_to("wrong_key.php") ;
	}
	oci_close($db);	
?>

