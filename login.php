 
<?php
    session_start();
    include 'db/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login your Account</h1>
    <form action="php_operation/checklogin.php" method="post">
        <label>Enter username</label>
        <input type="text" name="username" required><br>
        <label>Enter password</label>
        <input type="password" name="password" required><br>
      
        <input type="submit" value="LOGIN">
    </form>  
    <?php
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        echo "<p style='color:red'> $error </p>";
    }

    ?>
</body>
</html>