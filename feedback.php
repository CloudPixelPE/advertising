<?php
	include_once("insfed.php");
?>


<head>
<link href="css/sty.css" rel='stylesheet' type='text/css' />
</head>
<br>
<title>Contact and Feddback Form</title>
<center><font face="Gabriola" size="7" color="orange">Lottery & Advertisements</font></center>


              <div class="main">
			    	<div class="login-head">
					  <p align="center"> <h2><font face="Gabriola" size="6.5" color="gold">Contact & Feedback Form</h2></font></p>
					</div>
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span> <font color="silver">       Input Response</font></h2>
						 	 </div>
						  	<form action="insfed.php" method="post">
								  <input type="text" name="id" value="Your ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'IDentificationd';}" >
						  		<input type="text" name="fn" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" >
						  		<input type="text" name="ln" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" >
						  		<input type="text" name="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >

		<input type="text" name="mobile" id="mobileno" placeholder="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile';}">
<input type="text" name="msg" value="Enter Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" >
<br><br>


								<div class="submit">
									<input type="submit"  value="Submit" name="submit">



								</div>

								</div>

						  </form>
					</div>

						<div class ="copy-right">
							<p><font face="Gabriola" size="5">Krishna Kulkarni</font></p>
						</div>
			  </div>


                    </fieldset>
</font>
                </form>
            </div>
