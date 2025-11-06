<?php
include '../db/database.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$sql = "UPDATE usertbl 
        SET username='$username',
            password='$password',
            name='$name'
        WHERE id='$id'";
$query = $conn->query($sql);
header("location: ../index.php");

?>