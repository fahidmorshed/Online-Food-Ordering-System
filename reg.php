<?php
	require_once("sessions.php") ;
	require_once("included functions.php") ;
	include_once('config.php');
?>


<!DOCTYPE html public "-//W3C/DTD HTML 4.01 Transitional//EN"
	|http://www.w3.org/TR/html4/losse.dtd">
	
<html lang="en">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="images/favicon.ico">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Registration</title>
    </head>	
	
	<body>
	<div id="body">
            <img src="images/logo.gif" alt="Online Food Ordering" width="309" height="47" border="0" class="logo" />

            <div class='bodyText'>
			 <br>
             <br>
			 <br>
	<?php 
		$usertype = $_POST['regusertype'] ;
		$username = $_POST['name'] ;
		$password = $_POST['password'] ;
		$password = md5($password) ;
		$email = $_POST['email'] ;
		$db = oci_connect(ORAUSER,ORAPASS,ORADB);
		if($usertype=="user"){
		//connecting to DB
			$insertquery = "insert into customer (name,password,email) values ('{$username}','{$password}','{$email}')" ;	
		}
		else{
			$verfication_number = generateRandomString() ;
			//echo $verfication_number ;	
			$insertquery = "insert into MANAGER (NAME,PASSWORD,EMAIL,STATUS,VERIFICATION_KEY) values ('{$username}','{$password}','{$email}','waiting','{$verfication_number}')" ;
			sendGMail("{$verfication_number}'  ' {$username}") ;
		}
		$insertresult=oci_parse($db,$insertquery);
		oci_execute($insertresult);
		oci_free_statement($insertresult);
		oci_close($db) ;
		
		
		if($usertype=='user'){
			echo '<h4>Your Account has been successfully created.<a href="welcome.php">CLICK_HERE</a></h4>' ;
		}
		else{
			echo '<h4>Your Account has been successfully created.<br>Get Your Verification Key from the Authority.<a href="index.php">CLICK_HERE_TO_LOGIN</a></h4>';
		}
		
	?>
		</div>
	</div>
	</body>
</html>