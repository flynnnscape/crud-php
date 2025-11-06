 
<?php
session_start();

include '../db/database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['username'];
$password = $_POST['password'];
$sql ="SELECT * FROM usertbl 
       WHERE username='$username' 
       AND password='$password' ";
$query = $conn->query($sql);

if($query->num_rows>0){
    $row = $query->fetch_assoc();
    $_SESSION['username'] = $row['name'];
    header("location: ../index.php");
    exit();
}else{
    $error ="Invalid Account!";
    header("location: ../login.php?error=$error");
    exit();
}
} else {
    header("location: ../login.php");
    exit();
}

?>