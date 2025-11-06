 
<?php
include '../db/database.php';
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];

$sql ="INSERT INTO usertbl(username,password,name)
        VALUES('$username','$password','$name')";
$query = $conn->query($sql);
header("location: ../index.php");
?>