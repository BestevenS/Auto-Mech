<?php

$username = 'root';
$pwd = '';
$dbname = 'drcar';
$dbhost = 'localhost';

$con = new mysqli($dbhost,$username,$pwd,$dbname);
if($con->connect_errno){
    die("Connection error");
}

$result = $con->query("SELECT * FROM user");
if($result === false){
    die("Query error");
}

echo "<h1>USERS</h1><ul>";
while($row = $result->fetch_assoc()){
    echo "<li> {$row['id']} : {$row['email']} </li>";
}
echo "</ul>";

$result = $con->query("SELECT * FROM engineer");
if($result === false){
    die("Query error");
}
echo "<h1>ENGINEERS</h1><ul>";
while($row = $result->fetch_assoc()){
    echo "<li> {$row['id']} : {$row['email']}  </li>";
}
echo "</ul>";

?>