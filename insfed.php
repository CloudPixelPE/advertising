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
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$em = $_POST['email'];
$mo = $_POST['mobile'];
$msg = $_POST['msg'];

$sql = "insert into feed values('$id','$fn','$ln','$em','$mo','$msg')";	
if ($con->query($sql) === TRUE) {

echo "<h1>Welcomes You </h1>"."<br>";
echo "<h2>$fn</h2>"."<br>";
echo "<h3>$ln</h3>"."<br>";

echo "<h2>Thank You for Your Feedback</h3>"."<br>";


}
else {

echo "Error: " . $sql . "<br>" . $con->error;

}

}



?>
