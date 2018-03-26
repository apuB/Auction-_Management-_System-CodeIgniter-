<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  * {box-sizing: border-box;}

  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

  .topnav {
    overflow: hidden;
    background-color: #ef6e23;
  }

  .topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  .topnav a.active {
    background-color: #2196F3;
    color: white;
  }

  .topnav .search-container {
    float: right;
  }

  .topnav input[type=text] {
    padding: 6px;
    margin-top: 8px;
    font-size: 17px;
    border: none;
  }

  .topnav .search-container button {
    float: right;
    padding: 6px 10px;
    margin-top: 8px;
    margin-right: 16px;
    background: #ddd;
    font-size: 17px;
    border: none;
    cursor: pointer;
  }

  .topnav .search-container button:hover {
    background: #ccc;
  }

  @media screen and (max-width: 600px) {
    .topnav .search-container {
      float: none;
    }
    .topnav a, .topnav input[type=text], .topnav .search-container button {
      float: none;
      display: block;
      text-align: left;
      width: 100%;
      margin: 0;
      padding: 14px;
    }
    .topnav input[type=text] {
      border: 1px solid #ccc;  
    }
  }
  * {
      box-sizing: border-box;
  }

  body {
      background-color: #f1f1f1;
      padding: 20px;
      font-family: Arial;
  }

  .main {
      max-width: 1000px;
      margin: auto;
  }

  h1 {
      font-size: 50px;
      word-break: break-all;
  }

  .row {
      margin: 10px -16px;
  }

  .row,
  .row > .column {
      padding: 8px;
  }

  .column {
      float: left;
      width: 33.33%;
      display: none;
  }

  .row:after {
      content: "";
      display: table;
      clear: both;
  }

  .content {
      background-color: white;
      padding: 10px;
  }

  .show {
    display: block;
  }
  .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
  }

  .pagination a.active {
      background-color: dodgerblue;
      color: white;
  }

  .pagination a:hover:not(.active) {background-color: #ddd;}

  #mySidenav a {
	    position: absolute;
	    left: -80px;
	    transition: 0.3s;
	    padding: 15px;
	    width: 144px;
	    text-decoration: none;
	    font-size: 20px;
	    color: white;
	    border-radius: 0 5px 5px 0;
	}
	#mySidenav a:hover {
	    left: 0;
	}

	#about {
	    top: 160px;
	    background-color: #4CAF50;
	}

	#blog {
	    top: 220px;
	    background-color: #2196F3;
	}

	#projects {
	    top: 280px;
	    background-color: #f44336;
	}
	* {
    box-sizing: border-box;
}

body {
    background-color: #474e5d;
    font-family: Helvetica, sans-serif;
}
.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}
.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}
.container {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}
.container::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}
.left {
    left: 0;
}
.right {
    left: 50%;
}
.left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}
.right::after {
    left: -16px;
}
.content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}
@media screen and (max-width: 600px) {
  .timeline::after {
    left: 31px;
  }
  .container {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }
  .container::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }
  .left::after, .right::after {
    left: 15px;
  }
  .right {
    left: 0%;
  }
}
  </style>
</head>
<body>
  <div class="topnav">
    <a class="active" href="<?php echo base_url();?>index.php/AuctionController/index">Home</a>
    <a href="<?php echo base_url();?>index.php/AuctionController/">AboutUs</a>
    <a href="<?php echo base_url();?>index.php/AuctionController/contact">ContactUs</a>
    <!--<a href="<?php echo base_url();?>index.php/AuctionController/signupform">SignUp</a>
   	<a href="<?php echo base_url();?>index.php/AuctionController/sellersignin">Seller SignIn</a>
	<a href="<?php echo base_url();?>index.php/AuctionController/buyersignin">Buyer SignIn</a>-->
    <div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
    <center><h2><b><i>Welcome To Auction Management System</i></b></h2></center>
    <hr>
    <div id="mySidenav" class="sidenav">
		<a href="<?php echo base_url();?>index.php/AuctionController/signupform" id="about">SignUp</a>
		<a href="<?php echo base_url();?>index.php/AuctionController/sellersignin" id="blog">Seller SignIn</a>
		<a href="<?php echo base_url();?>index.php/AuctionController/buyersignin" id="projects">Buyer SignIn</a>
	</div>
	<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>2017</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2016</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
</div><hr>
</body>
</html>
 <?php
        if(isset($msg)){
            echo $msg;
        }
    ?>
