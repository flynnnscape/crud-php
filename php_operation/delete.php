 
<?php
include '../db/database.php';
$id = $_GET['id'];
$sql = "DELETE FROM usertbl WHERE id='$id' ";
$query = $conn->query($sql);
 header("location: ../index.php");
?> 