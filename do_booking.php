<?php


session_start();
$emailu = $_SESSION['email'];
$emaile = $_POST['emaile'];
$bdate = $_POST['bdate'];
$con = mysqli_connect('localhost','root','','drcar');
if(!$con)
{
	die('Please check your connection. mysqli_error($con)');
}
$INSERT = "INSERT Into booking(bdate,emaile,emailu)
		values('$bdate','$emaile','$emailu')";
if($con -> query($INSERT)===TRUE){
	echo "Η κράτηση έγινε επιτυχώς <br>";
}
else{
	echo "Error: ".$INSERT."<br>".$con->error;
}
$con->close();
$con = mysqli_connect('localhost','root','','drcar');
if(!$con)
{
	die('Please check your connection. mysqli_error($con)');
}
$SELECT = "SELECT * From booking";
$results = $con -> query($INSERT);
echo "<ol>";
while($row = $results->fetch_assoc()){
	echo "<li>" . $row['emaile'] . $row['bdate'] ."</li><br>";
}
echo "</ol>";
$con->close();
header('location:booking.php');


?>