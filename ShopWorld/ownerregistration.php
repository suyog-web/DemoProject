<?php
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
<body style="padding-left: 10%; padding-top:5px">
	<div id="oregistercenter"><!-- style="background-image: url('img/bk3.jpg');" --->
		<h1 id="signup" >Owner Sign Up</h1>
			<form id='orform' action="" method="post" enctype="multipart/form-data">
				<table id="otform">
					<tr><td><label>Full Name</label></td><td><input type="text" name="name" placeholder = "FIRST MIDDLE LAST " required></input></td></tr>
						<tr><td><label>Mobile No. </label></td><td><input type="tel" name="mobile" placeholder=" MOBILE " pattern="[7-9]{1}[0-9]{9}" maxlength='10'required></input></tr></td>
						<tr><td><label>E-mail  </label></td><td><input type="email" name="email"></input></tr></td>
						<tr><td><label>New Password </label></td><td><input type="password" name="pass" required></input></tr></td>
						<tr><td><label>Name of Enterprise </label></td><td><input type="text" name="noe" placeholder = "eg.Om Multiservices "required></input></tr></td>
						<tr><td><label>Shop Reg.No. </label></td><td><input type="text" name="regno" required></input></tr></td>
						<tr><td><label>Service Type</label></td><td><select name="service" required>
													<option value="None">Select</option>
													<option value="Groceries And Essentials">Groceries & Essentials</option>
													<option value="Fruits And Vegitables">Fruits & Vegitables</option>
													<option value="Bakeries And Cake Shop">Bakeries & Cake Shop</option>
													<option value="Medical">Medical</option>
													<option value="Electronic And Hardware">Electronic & Hardware</option>
													<option value="Hotels And Restaurants">Hotels & Restaurants</option> </select>
						
						
						
						
						<!--<input type="text" name="service" placeholder = "eg.milk shop,book shop" required></input>--></tr></td>
						<tr><td><label>Shop Address </label></td><td><textarea rows="4" cols="20" name="addres">Enter text here...</textarea></tr></td>
						<tr><td><label>Shop Open-Time </label></td><td><input type="time" name="otime" required></input></tr></td>
						<tr><td><label>Shop Close-Time </label></td><td><input type="time" name="ctime" required></input></tr></td>
						<tr><td><label>Shop Photo</label></td><td><input type="file" name="image" required></input></td></tr>
						<tr><td></td><td colspan="2"><p id='lsubmit'><input type="submit" name="submit" value="submit"/></p></td></tr>
				</table>
				<p>If Already Sign-up then click here <a id="alogin" href="login.php"><b>Login</b></a></p>
			</form>
<?php
if($_POST['submit'])
{	
  $nm = $_POST['name'];
  $mb = $_POST['mobile'];
  $em = $_POST['email'];
  $ps = $_POST['pass'];
  $ne = $_POST['noe'];
  $rn = $_POST['regno'];
  $sn = $_POST['service'];
  $ad = $_POST['addres'];
  $ot = $_POST['otime'];
  $ct = $_POST['ctime'];
  $foldername = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "birthimage/".$foldername;
  move_uploaded_file($tempname,$folder);
  if($nm!="" && mb!="" && $em!="" && $ps!="" && $ne!="" && $rn!="" && $sn!="" && $ad!="" && $ot!="" && $ct!="" && $folder !="")
  {

	$query = "INSERT INTO onrinformation VALUES('$nm','$mb','$em','$ps','$ne','$rn','$sn','$ad','$ot','$ct','$folder')";
    $data = mysqli_query($conn,$query);

     if($data)
     {
		
	    echo "<center><font color='red'><script>alert('Registration Successfully')</script></font></center>" ;
		
     }
	 else
	 {
		 echo"<script>alert('Already Registered ')</script>";
	 }
  }
  else
  {
	  echo " <script>alert('Fill All Details')
		         
		 </script>";
  }
}

	
?>
        
   </div>
</body>
</html>