<?php
	require_once("sessions.php") ;
	require_once("included functions.php") ;
	include_once('config.php');
?>



	
	<?php 
		//$usertype = $_POST['regusertype'] ;
		$id = $_POST['id'] ;
		$message = $_POST['msg'] ;
		$flag = 1;
		$db = oci_connect(ORAUSER,ORAPASS,ORADB);
		//if($usertype=="user"){
		//connecting to DB
			$insertquery = "insert into message (ID,flag,message) values ('{$id}','{$flag}','{$message}')" ;	
		//}
		//else{
		//	$verfication_number = generateRandomString() ;
			//echo $verfication_number ;	
		//	$insertquery = "insert into MANAGER (NAME,PASSWORD,EMAIL,STATUS,VERIFICATION_KEY) values ('{$username}','{$password}','{$email}','waiting','{$verfication_number}')" ;
		//	sendGMail("{$verfication_number}'  ' {$username}") ;
		//}
		$insertresult=oci_parse($db,$insertquery);
		oci_execute($insertresult);
		oci_free_statement($insertresult);
		oci_close($db) ;
		
		//if($usertype=='user'){
			echo '<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="images/favicon.ico">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Online Food Ordering</title>
		<style>
			#toast {
				width:300px;
				height:30px;
				height:auto;
				position:absolute;
				left:50%;
				margin-left:-100px;
				bottom:200px;
				background-color: #003366;
				color: #FFFFFF;
				font-family: Calibri;
				font-size: 20px;
				padding:10px;
				text-align:center;
				border-radius: 2px;
			}
		</style>
    </head>
	
	<body>
        
 
        <div id="topNav">	
            <ul>
                <li><a href="welcome.php" title="Home" class="hover">Home</a></li>
				<li><a href="view_orders.php" title="orders">View Orders</a> </li>
				<li><a href="message.php" title="sendmessages">Send Message</a></li>
                <li><a href="about.php" title="about">About</a></li>
                <li><a href="logout.php" title="Logout">Logout </a></li>
            </ul>
        </div>
		<div id="body">
            <img src="images/logo.gif" alt="OnlineJudge" width="309" height="47" border="0" class="logo" />

            <div class=\'bodyText\'>
                <br>
                <br>
                <h2> MESSAGE </h2>
                <p> <strong>Online Food Ordering </strong> 
                    <br>
					Message Sent
					<br> Send another <a href="message.php">message</a><br>
                </p>
            </div>
		</div>
	</body>
</html>' ;
		//}
		//else{
			//echo '<h4>Your Account has been successfully created.<br>Get Your Verification Key from the Authority.<a href="index.php">CLICK_HERE_TO_LOGIN</a></h4>';
		//}
		
	?>
		</div>
	</div>
	</body>
</html>