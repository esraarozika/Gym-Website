<!DOCTYPE html>
<html>

<head>
    <title> login</title>
    <link rel="icon" href="hit/hitlogo.jpg" type="image/icon type">
    <link rel="stylesheet"  href="stylesheet.css">
</head>
<body>


<?php
  if(isset($_POST['submit']))
   
{

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 		
     if (!IsSet($_SESSION["username"]))       {
     	$_SESSION["username"]= "Login";}
 

$error="";

if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else {
$username12=$_POST["username"];
$password12=$_POST["password"];
$servername="localhost";
$username="root";
$password="";
$db="TheHit";
$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
	die("connaction die".mysql_error());
}
//echo "connection sucessfull<br>";



$sql = "select * from user where password='$password12' AND username='$username12'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
  //  echo "You Have Logged In successfully";

	$_SESSION["username"] = $username12;
    while($row = $result->fetch_assoc()) {
    	if(!strcmp($row["type"],"1"))
    	{
 	 $_SESSION["users"] = "client";
    			 include( 'prof.php');
		break;	
    	}
    	else 
    	{
		
    		 $_SESSION["users"] = "admin";
    			 include( 'prof.php');
		break;		
    	}
      	
    }
  

	
} else {
 
	echo "wrong";
	header( "refresh:1;url=Login.html" );
}

mysqli_close($con);

}}

else {
echo "created successfully";
	}
	


 ?>

</body>
</html>
