 
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'db/database.php';

$username = $_SESSION['username'];
echo "<h1> Welcome, $username </h1>";

$sql = "SELECT * FROM usertbl";
$query = $conn->query($sql);
echo "<a href='add.php'> ADD DATA</a>";
echo "<table border='1'>    
    <thead> 
        <tr>
             <th> ID </th>
             <th> USERNAME </th>
             <th> PASSWORD </th>
             <th> NAME </th>
             <th> ACTION </th>
         </tr>
    </thead>
    <tbody>";
while($row = $query->fetch_assoc()){
    $id = $row['id'];
    $username = $row['username'];
    $password = $row['password'];
    $name = $row['name'];

    echo "<tr>
        <td> $id </td>
        <td> $username </td>
        <td> $password </td>
        <td> $name </td>
        <td> 
        <a href='edit.php?id=$id&username=$username&password=$password&name=$name'> EDIT </a> &nbsp;
        <a href='php_operation/delete.php?id=$id'> DELETE </a> 
        </td>
    ";
}
echo "</tbody></table>";
echo "<a href='logout.php'> EXIT </a>"
?>