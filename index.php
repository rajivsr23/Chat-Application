<?php 
	include 'db.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Chat System in PHP</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="all"/>
		<script>
			function ajax(){
				var req=new XMLHttpRequest();
				req.onreadystatechange=function(){
					if(req.readyState==4 && req.status ==200){
						document.getElementById('chat').innerHTML=req.responseText;
					}
				}
				req.open('GET','chat.php',true);
				req.send();
				}
			setInterval(function(){ajax()},1000);
			</script>
	</head>
	
	<body onload="ajax();">
		<div id="container">
			<div id="chat_box">
			<div id="chat"></div>
			</div>
			<form method="post" action="index.php">
				<input type="text" name="name" placeholder="Enter Name">
				<textarea name="message" placeholder="Enter Message"></textarea>
				<input type="submit" name="submit" value="Send it">
				
			</div>
			
			<?php
				if (isset($_POST['submit'])){
					$name=$_POST['name'];
					$message=$_POST['message'];
					$query="Insert into chat(Name,Message) values('$name','$message')";
					$run=$con->query($query);
					if ($run){
					echo "<embed loop='false' src='sound.mp3' hidden='true' autoplay='true'>";}
					
				}
			?>
			
		</body>
	</html>					