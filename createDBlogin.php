<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="icon" href="Images/ballon.png" type="image/icon type">
    <link rel="stylesheet"  href="stylesheet.css">
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$db="TheHit";
$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
	die("connaction die".mysql_error());
}
echo "connaction sucessfully<br>";
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)NOT NULL,


reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if ($con->query($sql) === TRUE) {
    echo "Table user created successfully";
} else {
    echo "Error creating table: " . $con->error;
}

mysqli_close($con);
  ?>
</body>
</html>
