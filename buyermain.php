

<!DOCTYPE html>
<html>
<head>
<title><?php echo $this->session->userdata('buyername');?></title>
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
  <img src="/w3images/team2.jpg" alt="Welcome Buyer" style="width:100%">
  <h1><?php echo $this->session->userdata('buyername');?></h1>
  <div style="margin: 24px 0;">
    <a href="<?php echo base_url();?>index.php/AuctionController/editbuyer">Edit Profile</a><br> 
    <a href="<?php echo base_url();?>index.php/AuctionController/startauction">Start Auction</a><br>  
    <a href="<?php echo base_url();?>index.php/AuctionController/getcart">View Cart</a> 
 </div>
 <div id="log"><a href="<?php echo base_url();?>index.php/AuctionController/buyerlogout">Logout</a></div>
</div>
<?php
	if (isset($msg)) {
		echo "<center>".$msg."</center>";
	}
	if (isset($msg1)) {?>
		<form action="<?php echo base_url();?>index.php/AuctionController/makebid" method="POST">
    	<?php foreach ($msg1 as $key) {
        ?>
        <div style="height:30% ; width:25%; float: left; display: inline; padding-left: 15px">
          
            <img src="<?php echo base_url();?>uploads/<?php echo $key['image'];?>" style="height:220px; width:250px; border-radius: 10px; box-shadow: 8px 8px 5px black; border-style: groove;"><br><br>
            <span style="font-size:13px;">Product Name: <?php echo $key['product_name'];?><br>
            Base Price: <?php echo $key['initprice'];?><br>
            Last Bid: <?php echo $key['lastbid'];?><br>
            Select Price: <input type="radio" name="addprice" value="1000">1000<input type="radio" name="addprice" value="2000">2000<input type="radio" name="addprice" value="5000">5000<input type="radio" name="addprice" value="10000">10000<br></span><br>
            
            <button type="submit" name="bid" value="<?php echo $key['product_id']; ?>">Make bid</button>
            </div>	
	<?php 
	}
	?>
	</form>
	<?php
	}
	
	if (isset($msg2)) {?>
		<form>
    	<?php foreach ($msg2 as $key) {
        ?>
        <div style="height:30% ; width:25%; float: left; display: inline; padding-left: 15px">
          
            <img src="<?php echo base_url();?>uploads/<?php echo $key['image']; ?>" style="height:220px; width:250px; border-radius: 10px; box-shadow: 8px 8px 5px black; border-style: groove;"><br>
            <span style="font-size:13px;">Product Name: <?php echo $key['product_name'];?><br>
            Base Price: <?php echo $key['initprice'];?><br>
            Last Bid: <?php echo $key['lastbid'];?><br>
            Sold To: <?php echo $this->session->userdata('buyername');?>
            </span><br>
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