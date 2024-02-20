<html>
<title>Main DataBase</title>
<link rel="icon" href="Images/ballon.png" type="image/icon type">
<link rel="stylesheet"  href="stylesheet.css">
<body>


<?php 
$severname="localhost";
$username="root";
$password="";

//create connection
$conn=mysqli_connect($severname,$username,$password);
if(!$conn){
die("connection failed ".mysqli_connect_error());

}

echo "connected successfully ";
echo "</br>";


$sql = "CREATE DATABASE TheHit";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
mysqli_close($conn);
 ?>


</body>
</html>
