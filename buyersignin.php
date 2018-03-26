<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#click
		{
			cursor: pointer;
			background-color: gray;
			padding: 10px 15px;
			border:solid 2px black;
		}
		#modal
		{
			margin-top: 30px;
			background-color: black;
			color: white;
			height: 300px;
			width: 300px;
			margin: 0px 0px 10000px 0px;	
		}
		#close
		{
			float: right;
			margin-right: 30px;
			cursor: pointer;
		}
		#in{
			color: green;
		}
		#scrool{
			color: blue;
		}
	</style>
	<script>
		function clos(){
		document.getElementById('modal').style.display="none";
		}
	</script>
</head>
<body>
	<center>
	<div id="modal"><span id="close" onclick="clos()">X</span><br>
		<form action="<?php echo base_url();?>index.php/AuctionController/buyersigninsuccess" method="POST">
			<center><h3 id="in">Buyer Log IN</h3></center><hr><br>
			Email:<br>
			<input type="text" name="buyeremail" placeholder="Your Email"><br>
			Password:<br>
			<input type="text" name="buyerpass" placeholder="Password"><br>
			<input type="submit" name="login" value="login">
			<?php
			if(isset($msg))
			{
				echo "<center>".$msg."</center>";
			}
			?>
		</form>
	</div>
	</center>
</body>
</html>
