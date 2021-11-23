<?php
include("connection.php");

$imgpath = $_GET['pre'];

$query ="SELECT `item`, `imgsource` FROM `itemdetails` WHERE imgsource ='$imgpath'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
//$inam = $result['item'];
$path = $result['imgsource'];
echo $path;

$query ="DELETE FROM itemdetails WHERE imgsource ='$path'";
$data = mysqli_query($conn,$query);

header('location:ownerprofile.php');

?> 