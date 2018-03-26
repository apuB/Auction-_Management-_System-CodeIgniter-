

<!DOCTYPE html>
<html>
<head>
<title>Welcome <?php echo $this->session->userdata('sellername');?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  height: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin: 0px 700px 0px 0px;
  background-color: skyblue;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
#log{
	border: 2px solid black;
	height: 30px;
	width: 100px;
	margin: 170px 0px 0px 120px;
	border-radius: 7px;
}
</style>
</head>
<body>
<div class="card">
  <img src="/w3images/team2.jpg" alt="Welcome Seller" style="width:100%">
  <h1><?php echo $this->session->userdata('sellername');?></h1>
  <div style="margin: 24px 0;">
   <a href="<?php echo base_url();?>index.php/AuctionController/editseller">Edit Profile</a><br>
	<a href="<?php echo base_url();?>index.php/AuctionController/productupload">Upload Product</a><br>
	<a href="<?php echo base_url();?>index.php/AuctionController/auctionstatus">View Auction Status</a><br> 
 </div>
 	<div id="log"><a href="<?php echo base_url();?>index.php/AuctionController/sellerlogout">Logout</a></div>
</div>
<?php
	if(isset($msg1))
	{?>
		<form>
    	<?php foreach ($msg1 as $key) {
        ?>
        <div style="height:30% ; width:25%; float: left; display: inline; padding-left: 15px">
          
            <img src="<?php echo base_url();?>uploads/<?php echo $key['image'];?>" style="height:220px; width:250px; border-radius: 10px; box-shadow: 8px 8px 5px black; border-style: groove;"><br><br>
            <span style="font-size:13px;">Product Name: <?php echo $key['product_name'];?><br>
            Base Price: <?php echo $key['initprice'];?><br>
            Last Bid: <?php echo $key['lastbid'];?><br>
        </div>	
	<?php 
	}
	?>
	</form>
	<?php
	}
	?>
</body>
</html
