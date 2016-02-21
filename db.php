<?php 
	$host="localhost";
	$usr="root";
	$pass="";
	$db_name="chat";
	
	$con=new mysqli($host,$usr,$pass,$db_name);
	
	function formatDate($date){
	return date('g:i a', strtotime($date));}
	
?>