﻿<?php
include("connection.php");
error_reporting(0);
?>
<html>
<style>
html{
margin:0;
padding:0;
height:100%;
width:100%;
background-image: url('img/rback.jpg');
background-size:cover;
}
</style>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> MY VILLAGE </title>
	<link rel="stylesheet" href="styles.css">
	
</head>
<body style="padding-left: 10%;">
	<div id="registercenter"><!-- style="background-image: url('img/bk3.jpg');" --->
		<h1 id="signup" >User Sign Up</h1>
			<form id='rform' action="" method="post" enctype="multipart/form-data">
				<table id="tform">
					<tr><td><label>Full Name</label></td><td><input type="text" name="name" placeholder = "FIRST MIDDLE LAST " required></input></tr></td>
					<tr><td><label>Date Of Birth </label></td><td><select name="bdate" id="cars" required>
							<option value="day">day</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						  </select>
						  <select name="bmonth" id="cars" required>
							<option value="month">month</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						  </select>
						  <select name="byear" id="cars" required>
							<option value="year">year</option>
							<option value="1981">1981</option>
							<option value="1982">1982</option>
							<option value="1983">1983</option>
							<option value="1984">1984</option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
						  </select></tr></td>
						<tr><td><label>Mobile No. </label></td><td><input type="tel" name="mobile" placeholder=" MOBILE " pattern="[7-9]{1}[0-9]{9}" maxlength='10'required></input></tr></td>
						<tr><td><label>E-mail  </label></td><td><input type="email" name="email"></input></tr></td>
						<tr><td><label>New Password </label></td><td><input type="password" name="pass" required></input></tr></td>
						<tr><td><label>Photo</label></td><td><input type="file" name="image" required></input></td></tr>
						<tr><td></td><td colspan="2"><p id='lsubmit'><input type="submit" name="submit" value="submit"/></p></td></tr>
				</table>
				<p>If Already Sign-up then click here <a id="alogin" href="login.php"><b>Login</b></a></p>
			</form>
<?php
if($_POST['submit'])
{	
  $nm = $_POST['name'];
  $bd = $_POST['bdate'];
  $bm = $_POST['bmonth'];
  $by = $_POST['byear'];
  $mb = $_POST['mobile'];
  $em = $_POST['email'];
  $pw = $_POST['pass'];
  $foldername = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "birthimage/".$foldername;
  move_uploaded_file($tempname,$folder);
  if($nm!="" && $bd!="" && $bm!="" && $by!="" && $mb!="" && $em!="" && $pw!="" && $folder!="")
  {

	$query = "INSERT INTO information VALUES('$nm','$bd','$bm','$by','$mb','$em','$pw','$folder')";
    $data = mysqli_query($conn,$query);

     if($data)
     {
		
	    echo "<center><font color='red'><script>alert('Registration Successfully')</script></font></center>" ;
		
     }
	 else
	 {
		 echo"<script>alert('Already Registered ')
		         
		 </script>";
	 }
  }
  else
  {
	  echo " Fill All Details .";
  }
}

	
?>
        
   </div>
</body>
</html>


