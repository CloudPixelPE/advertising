<html>
<font face="Gabriola" size="5">
</font>
</html>
<?php




$con=new mysqli("localhost","root","","dashboard");

if($con->connect_error){

die ("error in connection");

}



if(isset($_POST['submit'])){

$id = $_POST['id'];
$cn = $_POST['comname'];
$loc = $_POST['loc'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pdet = $_POST['pdet'];
$price= $_POST['price'];
if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
{
  echo "Please select image";
}
else {
  $image = addslashes($_FILES['image']['tmp_name']);
  $name = addslashes($_FILES['image']['name']);
  $image = file_get_contents($image);
  $image= base64_encode($image);
}

$sql = "insert into advertise (id,cn,loc,mob,email,pass,pdet,price,image) values('$id','$cn','$loc','$mob','$email','$pass','$pdet','$price','$image')";
if ($con->query($sql) === TRUE) {

echo "<br><h2>Record Inserted successfully</h3>"."<br>";

echo "<h1>Welcome </h1>"."<br>";
echo "<h2>$cn</h2>"."<br>";
echo "<h1>Thank You.</h1>"."<br>";

}
else {

echo "Error: " . $sql . "<br>" . $con->error;

}

}


?>
