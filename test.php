	
<!DOCTYPE html public "-//W3C/DTD HTML 4.01 Transitional//EN"
	|http://www.w3.org/TR/html4/losse.dtd">
	
<html lang="en">
	<head>
		<title>Registration</title>
	</head>		
	<?php
		// the message
		$msg = "First line of text\nSecond line of text";
		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);
		// send email
		mail("mazharbuet11@gmail.com","My subject",$msg);
?> 
	</body>
	
</html>