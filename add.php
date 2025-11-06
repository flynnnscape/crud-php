<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page</title>
</head>
<body>
    <h1>Add Data</h1>
    <form action="php_operation/save.php" method="post">
        <label> Enter Username</label>
        <input type="text" name="username" required><br>
        <label> Enter Password</label>
        <input type="password" name="password" required><br>
        <label> Enter Name</label>
        <input type="text" name="name" required><br>
        <input type="submit" value="SAVE">
    </form>

</body>
</html>