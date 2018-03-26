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
			height: 430px;
			width: 300px;
			margin: 0px 0px 10000px 0px;
		}
		#close
		{
			float: right;
			margin-right: 30px;
			cursor: pointer;
		}
        #up{
            color: green;
        }
	</style>
	<script>
		function clos(){
		document.getElementById('modal').style.display="none";
		}
		function validation(){
			 if(!isNaN(document.f1.snm.value)){
        			alert("Please, enter your name.");
        			document.f1.snm.value="";
        			document.f1.snm.focus();
        			return false;
    			}
    			else if(!/^[a-zA-Z ]*$/g.test(document.f1.snm.value)){
        			alert("Please, enter only alphabet characters.");
        			document.f1.snm.value="";
        			document.f1.snm.focus();
        			return false;
    			}
    			else if(document.f1.semail.value==""){
        			alert("Email not be blank.");
        			document.f1.semail.focus();
        			return false;
    			}
    			else if(!/^([A-Za-z0-9_\-\.])+@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})*$/g.test(document.f1.semail.value)){
        			alert("Invalid characters.");
        			document.f1.semail.focus();
        			return false;
    			}
    			else if(!isNaN(document.f1.spass.value)){
        			alert("Please, enter password.");
        			document.f1.spass.value="";
        			document.f1.spass.focus();
        			return false;
    			}
    			else if(!/^[a-z0-9]*$/g.test(document.f1.spass.value)){
        			alert("Please, enter number & characters.");
        			document.f1.spass.value="";
        			document.f1.spass.focus();
        			return false;
    			}
    			else if(document.f1.spass.value.length!=3){
    				alert("Please, enter 3 digit number & characters.");
    				document.f1.spass.value="";
        			document.f1.spass.focus();
        			return false;
    			}else{
    				return true;
    			}
		}
	</script>
</head>
<body>
	<center>
	<div id="modal"><span id="close" onclick="clos()">X</span><br>
		<form action="<?php echo base_url();?>index.php/AuctionController/register" method="POST" name="f1" onsubmit="return validation();">
            <center><h3 id="up">Seller/Buyer<br>SignUp</h3></center><hr>
			<input type="radio" name="typ" value="Seller">Seller
			<input type="radio" name="typ" value="Buyer">Buyer<br><br>
			Name:<br>
			<input type="text" name="snm" placeholder="Enter Your Name"><br><br>
			Email:<br>
			<input type="email" name="semail" placeholder="Enter Your Email"><br><br>
			Password:<br>
			<input type="text" name="spass" placeholder="Enter New Password"><br><br>
			<input type="submit" name="reg" value="Register">
			<input type="reset" name="res" value="Reset">
		</form>
	</div>
	</center>
</body>
</html>
