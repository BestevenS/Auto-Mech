<?php


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$address = $_POST['address'];
$afm = $_POST['afm'];
$tel = $_POST['tel'];

if(!empty($fname) || !empty($lname) || !empty($email) || !empty($pwd) || !empty($address) || !empty($afm) || !empty($tel))
{
	$host = "localhost";
	$db = "root";
	$dbpwd = "";
	$dbname = "drcar";

	$conn = new mysqli($host,$db,$dbpwd,$dbname);

	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$SELECT = "SELECT email From engineer where email = ? Limit 1";
		$INSERT = "INSERT Into engineer(fname,lname,email,pwd,address,afm,tel)
		values(?,?,?,?,?,?,?)";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if($rnum==0){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssss",$fname,$lname,$email,$pwd,$address,$afm,$tel);
			$stmt->execute();
			echo "New record inserted sucessfully";
		}else{
			echo "Someone already user using this email";
		}
		$stmt->close();
		$conn->close();
	}
}
else {
	die();
	}

header("refresh: 2; url=index.php");


?>