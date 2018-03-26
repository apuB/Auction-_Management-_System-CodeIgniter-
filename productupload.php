<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="<?php echo base_url();?>index.php/AuctionController/upload" method="POST" enctype="multipart/form-data">
    <div style="margin: 0 auto">
     <?php
    if (isset($msg)) {
      echo "<center>".$msg."</center></div>";
    }
  ?>
    
        <center><b><h2>Upload a Product</h2></b></center>
        
          <div style="background-color: white; height:60% ;width:40%; border-style: groove; border-radius: 10px; box-shadow: 5px 5px 2px grey; margin: 0 auto">      
              <label for="name">Product Name:</label><br>
            <input type="text" name="name"><br>
            
          
              <label for="desc">Description:</label><br>
            <textarea name="desc"></textarea><br>
          
          
              <label for="initprice">Initial Price:</label><br>
              <input type="number" name="initprice"><br>
          
          
              <label for="image">Image:</label><br>
              <input type="file" name="userfile"><br>
          
          <input type="submit" name="upload" value="upload">
        
      </div>
    </div>
  </form> 
</body>
</html>


 