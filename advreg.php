<?php
	include_once("advins.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Welcome to Advertisement and Lottery</title>

<head>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no"/>


    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Links -->
	<link href="css/sty.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/camera.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src='js/device.min.js'></script>
	 <script src="js/prefixfree.min.js"></script>

	 </head>
<html>
<body>
<div class="login-head">
					    <font face="Gabriola" size="7">Registration Form for Advertiser</font>
					</div>
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span>        Create Account</h2>
						 	 </div>
						  	<form action="advins.php" method="post">
								<input type="text" name="id" value="Company ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Com ID';}" >
						  		<input type="text" name="comname" value="Enter Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}" >
						  		<input type="text" name="loc" value="Enter Company Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Com Location';}" >
						  		<input type="text" name="mob" value="Enter Mobile No" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" >
									<input type="text" name="email" value="Enter Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" >
								<input type="password" name="pass" value="Enter Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >

								<input type="text" name="prod" value="Enter Product Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product';}" >

								<input type="text" name="pdet"  placeholder="Enter Product Details" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Specification';}">

		<input type="text" name="price" value="Enter Product Price " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Price';}" > <br /><br />

		<center><p align="center"><input type="file" name="image"></p></center>


								<div class="p-container">

								<div class ="clear"></div>
							</div>

								<div class="submit">
									<input type="submit"  value="Register Now" name="submit">
								</div>
									<div class="clear"> </div>
								</div>

						  </form>
					</div>

						<div class ="copy-right">
							<p><font face="Gabriola" size="5">Krishna Kulkarni</font></p>
						</div>
</div>

</body>
</html>
adver
