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
$ps = $_POST['pass'];
$ci = $_POST['city'];
$pn = $_POST['pin'];
$st = $_POST['state'];
$mo = $_POST['mobile'];

$sql = "insert into reg values('$id','$fn','$ln','$em','$ps','$ci','$pn','$st','$mo')";
if ($con->query($sql) === TRUE) {

echo "<br><h2>Record Inserted successfully</h3>"."<br>";

echo "<h1>Welcomes You </h1>"."<br>";
echo "<h2>$fn</h2>"."<br>";
echo "<h3>$ln</h3>"."<br>";
echo "<h1>Thank You.</h1>"."<br>";	

}
else {

echo "Error: " . $sql . "<br>" . $con->error;

}

}


?>
