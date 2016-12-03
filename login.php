<?php
	require_once("sessions.php") ;
	require_once("included functions.php") ;
	include_once('config.php');
	
	$db = oci_connect(ORAUSER,ORAPASS,ORADB);
	$username = $_POST['name'] ;
	$password = $_POST['password'] ;
	$usertype = $_POST['usertype'] ;
	$password = md5($password) ;
	//echo "".$_POST['usertype']."</br>" ;
	if($_POST['usertype']=='user'){
		
		$query = "select * from CUSTOMER where NAME = '{$username}' and  PASSWORD = '{$password}' ";
		//echo 	"".$query."</br>" ;
		$result = oci_parse($db,$query);
		oci_execute($result);
		if(!oci_fetch_array($result)) {
			oci_free_statement($result);
			$_SESSION['invalidlogin'] = "Invalid Log In" ;
			redirect_to("index.php") ;
		}
		else{
			//suceesful login 
			//echo "<h3>Success Log In</h3>";
			oci_free_statement($result);
			//redirect to page
			$_SESSION['username'] = $username ;
			$_SESSION['invalidlogin'] = "" ;
			redirect_to("welcome.php") ;
		}
	}
	else{
	
		$query = "select * from MANAGER where NAME = '{$username}' and  PASSWORD = '{$password}' " ;
		$result = oci_parse($db,$query);
		oci_execute($result);
		$row = oci_fetch_array($result) ;
		$status = $row['STATUS'] ;
		if($status=="waiting"){
				//get the verfication key
				$_SESSION['MANAGER_ID'] = $row['MANAGER_ID'] ;
				redirect_to("match_verfication_key.php") ;
		}
		else{
			redirect_to("welcome_manager.php") ;
		}
	}
?>




<!DOCTYPE html public "-//W3C/DTD HTML 4.01 Transitional//EN"
	|http://www.w3.org/TR/html4/losse.dtd">
	
<html lang="en">
	<head>
		<title>Sign In</title>
	</head>	
	
	<body>
		<pre>
			<?php
				print_r($_POST) ;
			?>
			
		</pre>
	</body>
	
</html>