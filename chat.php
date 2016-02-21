

<?php 
	include 'db.php';
	$query="Select * from chat order by id DESC";
					$run=$con->query($query);
				while($row=$run->fetch_array()):?>
				<div id="chat_data">
					<span style="color:green;"><?php echo $row['Name'];?></span>:
					<span style="color:red;"><?php echo $row['Message'];?></span>
					<span style="float:right;"><?php echo formatDate($row['Date']);?></span>
				</div>
				<?php endwhile;?>