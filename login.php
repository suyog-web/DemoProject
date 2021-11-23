<style>
html{
margin:0;
padding:0;
height:100%;
width:100%;
background-image: url('img/lback.jpg');
background-size:cover;
}
.outer{
margin-left:302;
margin-top:80;
height:500;
width:350;	
background-image: url('img/loginback.jpg');	
color:white;
}
h1{
	padding-top:30px;
	text-align:center;
}
.outer img{
	margin-left:32;
	border-top-right-radius:53px;
	border-bottom-left-radius:53px
}
table{
	width:300;
	height:120;
}
table td{
	color:white;
}
a{
	text-decoration:none;
	float:right;
	margin-right:30px;
	background:green;
	color:white;
	padding:2px;
}
form{
	margin-top:50;
}
#login{
	margin-left:20px
}
</style>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body style="padding-left: 12%;">

<div class="loginbody">
	<div class="outer">
		<h1>Login</h1>
			<img src="img/logo.png" height="110" width="280"/>
				<form action="" method="POST" enctype="multipart/form-data">
					<table id="login" width="200">
						<tr> 
							<td>&nbsp&nbsp&nbspEmail :</td> 
							<td><input type="email" name="email"> </input> </td> 

						</tr>
						<tr> 
							<td>&nbsp&nbsp&nbspPassword :</td> 
							<td><input type="password" name="pass"> </input> </td> 
						</tr>
						<tr> 
							<th colspan="2"><input type="submit" name="submit" value="submit"></input></th>  
						</tr>
<!--<tr> 
     <td>forget password </td> 
     <td><a href="registration.php">New Register</a></td> 

</tr> -->
					</table>
						<a href="index.php">HOME</a>
				</form>
	</div>
<?php
include("connection.php");
session_start();
error_reporting(0);

if(isset($_POST['submit']))
{
	$eml = $_POST['email'];
	$pwd = $_POST['pass'];
	
	$query ="SELECT * FROM information WHERE email ='$eml' && password ='$pwd'";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);

	$photo = $result['imgsorce'];
    $name = $result['name'];

   if($total == 1)
   {
	   $_SESSION['el'] = $eml;
	   $_SESSION['pd'] = $pwd;
	   $_SESSION['ph'] = $photo;
       $_SESSION['nm'] = $name;
	   header('location:main.php');
   }
   elseif($total == 0)
   {
	   $query ="SELECT * FROM onrinformation WHERE email ='$eml' && password ='$pwd'";
       $data = mysqli_query($conn,$query);
       $total = mysqli_num_rows($data);
       $result = mysqli_fetch_assoc($data);

	   $photo = $result['imgsorce'];
       $name = $result['name'];
       $shopname = $result['enterprisename'];
	   if($total == 1)
	   {
		   
			$_SESSION['el'] = $eml;
			$_SESSION['pd'] = $pwd;
			$_SESSION['ph'] = $photo;
			$_SESSION['nm'] = $name;
			$_SESSION['sn'] = $shopname;
			header('location:ownerprofile.php');
	   }
	   else
	   {
		  echo "<script>alert('Enter correct details')</script>" ;
       }		  
		   
    }
    else
    {
	    echo "<script>alert('Please Fill All Details')</script>";
    }
}

	
?>

</div>
</body>
</html>