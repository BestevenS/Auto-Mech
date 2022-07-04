<?php

function strip_post($field)
{
	if(!isset($_POST[field])) $_POST[$field] = '';
	return htmlspecialchars(stripslashes($_POST[$field]));
}
session_start();

$con = mysqli_connect('localhost','root','','drcar');

if(!$con)
{
	die('Please check your connection. mysqli_error($con)');
}
mysqli_select_db($con,'drcar');

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$s = "select * from engineer where email = '$email' && pwd='$pwd'";
$result=mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
		$_SESSION['email'] = $email;
		header('location:logindex.php');
}
else{
	header("location:logine.php?invalid= <br><h2 style='color:red;'>Παρακαλώ δώστε σωστά στοιχεία</h2>");
}

?>