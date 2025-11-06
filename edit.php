 
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $name = $_GET['name'];
}else{
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="php_operation/update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Enter username</label>
        <input type="text" name="username" required value="<?php echo $username ?>"><br>
        <label>Enter password</label>
        <input type="password" name="password" required value="<?php echo $password ?>"><br>
        <label>Enter name</label>
        <input type="text" name="name" required value="<?php echo $name ?>"><br>
        <input type="submit" value="UPDATE">
    </form>  
    
</body>
</html>