<?php
	session_start() ;
	
	
	function show_username(){
		if(isset($_SESSION['username'])){
			$output = $_SESSION['username'] ;
			return $output ;
		}
	}
	
	function showmsg($mesage){
		if(isset($_SESSION[$mesage])){
			$output = $_SESSION[$mesage] ;
			return $output ;
		}
	}
?>