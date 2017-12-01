<?php
	include_once("il.php");
?>
<!DOCTYPE html>
<html lang="en">


<head>
<title>Login for Lottery User </title>
		<link href="css/sty.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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

 <body>



	<div id="middle">
	<center>
<div class="login-head">
					    <font face="Gabriola" size="7">Login for Lottery User</font>
					</div>
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span>        Login</h2>
						 	 </div>
						  	<form action="il.php" method="post">


						  		<input type="text" name="em" value="Enter Email/Mobile/First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email/Mobile/First';}" >

								<input type="password" name="pass" value="Enter Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >


								<div class="p-container">


							</div>

								<div class="submit">
									<input type="submit"  value="Login" name="submit">
								</div>

								</div>

						  </form>
					</div>

						<div class ="copy-right">
							<p><font face="Gabriola" size="5">Krishna Kulkarni</font></p>
						</div>

						</center>
</div>


</body>
</html>
