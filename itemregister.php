<?php
include("connection.php");
error_reporting(0);
?>
<?php
session_start();
error_reporting(0);
$p=$_SESSION['ph'];
$n= $_SESSION['nm'];


if($n == true && $p == true)
{
	
}
else
{
	
	header('location:login.php');
}
?>
<html lang="en">
<?php
include("connection.php");
error_reporting(0);
session_start();
$photo = $_SESSION['ph'];
$name = $_SESSION['nm'];
$shopname = $_SESSION['sn'];
//echo $name;
//echo $photo;
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/main-page.css">
    <link rel="stylesheet" type="text/css" href="./css/all.min.css">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Main Page</title>
  </head>
  <body>
  <!-------------------NavBar Start Here....----------------------->
    <div id="nav-bar">
      <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="navbar-brand">
            <a href="./home.html"><h1 class="navbar-text">ShopWorld</h1></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="./ownerprofile.php">
                <h5> HOME </h5>
              </a>
              <a class="nav-item nav-link" href="./ownerprofile.php">
                <h5> PROFILE </h5>
              </a>
              <a class="nav-item nav-link" href="./about_us.html">
                <h5> ABOUT US </h5>
              </a>
              <a class="nav-item nav-link" href="./services.html">
                <h5> SERVICES </h5>
              </a>
              <a class="nav-item nav-link" href="./contact_us.html">
                <h5> CONTACT US </h5>
              </a>
            </div>
          </div>
        </nav>
      </section>
    </div>

<!------profile-------------------------------------->
<div class="top" style="border-bottom:3px solid black;">

	<table>
		<tr>
			<td><img src="<?php echo $photo; ?>" height="180" width="150"/><!--&nbsp&nbsp<?php echo $name; ?>--></td>
			<td align="center"><h1 style="font-family:Algerian;font-size:32px;color:mediumvioletred;animation-name: shopname;
  animation-duration: 2s;animation-iteration-count: infinite"><?php echo $shopname; ?><h1></td>
			<td align="right" valign="bottom"><button><a href="changepassword.php" >Change Password</a></button></td>
			<td align="right" valign="bottom"><button><a href="logout.php">Logout</a></button></td>
		</tr>
	</table>
</div>
<h1 style="text-align:center;color: forestgreen;font-size: 24px;font-family: system-ui;">Fill Item Details</h1>
<form id='item_form' action="" method="post" enctype="multipart/form-data">
	<table id="item_table">
		<tr><td><label>Select Type</label></td><td><select name="itemtype" required>
													<option value="Groceries & Essentials">Groceries & Essentials</option>
													<option value="Fruits & Vegitables">Fruits & Vegitables</option>
													<option value="Bakeries & Cake Shop">Bakeries & Cake Shop</option>
													<option value="Medical">Medical</option>
													<option value="Electronic & Hardware">Electronic & Hardware</option>
													<option value="Hotels & Restaurants">Hotels & Restaurants</option> </select></tr></td>
		<tr><td><label>Item Name</label></td><td><input type="text" name="name"  required></input></tr></td>
		<tr><td><label>Price </label></td><td><input type="number" name="price" required></input></tr></td>
		<tr><td><label>Discount&nbsp(optional) </label></td><td><input type="number" name="discount"></input></tr></td>
		<tr><td><label>Disciption(optional)</label></td><td><input type="text" name="discription"></input></tr></td>
		<tr><td><label>Iitem Pic.</label></td><td><input type="file" name="image" required></input></td></tr>
		<tr><td></td><td colspan="2"><p id='lsubmit'><input type="submit" name="submit" value="submit"/></p></td></tr>
	</table>
</form>
<?php
if($_POST['submit'])
{	
  $itype = $_POST['itemtype'];
  $nm = $_POST['name'];
  $pr = $_POST['price'];
  $dsc = $_POST['discount'];
  $ds = $_POST['discription'];
  $foldername = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "itemimage/".$foldername;
  move_uploaded_file($tempname,$folder);
  if($itype!="" && $nm!="" && $pr!="")
  {

	$query = "INSERT INTO itemdetails VALUES('$itype','$name','$nm','$pr','$dsc','$ds','$folder')";
    $data = mysqli_query($conn,$query);

     if($data)
     {
		
	    echo "<center><font color='red'><script>alert('Add Successfully')</script></font></center>" ;
		
     }
	 else
	 {
		 echo"<script>alert('Add Correct')
		         
		 </script>";
	 }
  }
  else
  {
	  echo " Fill All Details .";
  }
}

	
?>

<!----------------------Footer Section------------------------>
      <section id="h-footer">
        <div class="container">
          <div class="f-content">
            <h1>ShopWorld</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
              dolorum harum sit repellendus similique voluptatem ad velit, et
              cupiditate architecto autem maxime! Voluptatibus autem vitae
              magnam. laborum beatae reiciendis
              asperiores ipsam illum repellat porro!</p>
          </div>
          <div class="f-content">
            <h2>About</h2>
            <ul>
             <a href="./about_us.html"> <li>About Us</li></a>
              <a href="./services.html"><li>Service</li></a>
            </ul>
          </div>
          <div class="f-content">
            <h2>Need Help?</h2>
            <ul>
             <a href="./contact_us.html"> <li>Contact Us</li></a>
              <a href="./terms.html"><li>Terms & Conditions</li></a>
              <a href="./policy.html"> <li>Privacy Policy</li></a>
            </ul>
          </div>
          <div class="f-content">
            <h2>Connect With Us</h2>
            <div class="f-icon">
              <a href="#">
                <img src="./image/fb.png"  height="auto">
              </a>
              <a href="#">
                <img src="./image/twitter.png"  height="auto">
              </a>
              <a href="#">
                <img src="./image/youtube.png"  height="auto">
              </a>
              <a href="#">
                <img src="./image/insta.png"   height="auto">
              </a>
            </div>
          </div>
        </div>
      </section>


      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    </body>
  </html>