<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userlogin"; 


$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else
{
	echo "fail";
}

?>