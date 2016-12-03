<?php
	require_once("../sessions.php") ;
	include_once("../config.php") ;
	require_once("../included functions.php") ;
?>
<!DOCTYPE html public "-//W3C/DTD HTML 4.01 Transitional//EN"
	|http://www.w3.org/TR/html4/losse.dtd">
	
<html lang="en">
	<head>
		<title>Registration</title>
	</head>	
		
	<body>
	<?php
		
		$_SESSION['orderid'] =  basename($_SERVER['PHP_SELF']);
		redirect_to("confirmOrder.php") ;
	?>
	
</select> 
	</body>
	
</html>