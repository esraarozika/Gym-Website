<!DOCTYPE html>
<html>
<head>
    <title> SignUp client</title>
    <link rel="icon" href="Images/ballon.png" type="image/icon type">
    <link rel="stylesheet"  href="stylesheet.css">
</head>
<body>
<?php
  if(isset($_POST['submit']))
   
{
$uname=$_POST["username"];
$firstname=$_POST["firstName"]; 
$lastname=$_POST["lastName"]; 
$password2=$_POST["password"]; 
$conpassword=$_POST["conpassword"]; 
$email1=$_POST["email"]; 



$servername="localhost";
$username="root";
$password="";
$db="TheHit";
$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
	die("connaction die".mysql_error());
}
 
echo "connection sucessfull<br>";
$sql = "select username from user where username='$uname' "; 
$result = $con->query($sql);
if($result->num_rows > 0) {echo "UserName already exists"."<br>";	header( "refresh:3;url=register.html" );}

else {
$sql2 = "insert into user(username,password,firstname,lastname,email)  VALUES('$uname','$password2','$firstname','$email1','$lastname') ";

if ($con->query($sql2) === TRUE) {
    echo "New user Added successfully";
      	header('location: login.html');
} else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
}

}

mysqli_close($con);

}

else {
echo "created successfully";
	}
	


 ?>
</body>
</html>
