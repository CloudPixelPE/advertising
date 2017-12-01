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

$f = $_POST['em'];
$ps = $_POST['pass'];

$sql = "select * from advertise where (cn='$f' or mob='$f' or email='$f') and pass='$ps'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
    {
        echo " Name	:	" . $row["cn"]."<br>" . "Password	:	" . $row["pass"]. "<br>";
    }
}

else {

echo "Error: " . $sql . "<br>" . $con->error;

}

}


?>
