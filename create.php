<?php
	include_once("ins.php");
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
					    <font face="Gabriola" size="7">Registration Form for New Lottery User</font>
					</div>
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span>        Create Account</h2>
						 	 </div>
						  	<form action="ins.php" method="post">
								<input type="text" name="id" value="Your ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'ID';}" >
						  		<input type="text" name="fn" value="Enter First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" >
						  		<input type="text" name="ln" value="Enter Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" >
						  		<input type="text" name="email" value="Enter Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >

								<input type="password" name="pass" value="Enter Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >

								<input type="text" name="city" value="Enter City" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'City';}" >




		<input type="text" name="pin" id="pincode" placeholder="Pin Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Postal PIN';}">

		<input type="text" name="state" value="Enter State" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'State';}" >

		<input type="text" name="mobile" id="mobileno" placeholder="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile';}">


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
