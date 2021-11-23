<html lang="en">

<?php
include("connection.php");
error_reporting(0);
session_start();

$g = $_GET['gro'];
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
  <body style="background:black;">
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
              <a class="nav-item nav-link active" href="./index.php">
                <h5> HOME </h5>
              </a>
              <a class="nav-item nav-link" href="./main.php">
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

<!--<h3 style='text-align:center;color:yellow;'><?php echo"$g"; ?></h3>-->
<!---
<?php


$query = "SELECT * FROM `itemdetails` WHERE category ='Groceries & Essentials'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);	   
$itm = $result['item'];
$pri = $result['price'];
$dic = $result['discount'];
$dis = $result['discription'];
$imgpath = $result['imgsource'];

while($result = mysqli_fetch_assoc($data))
{
  
       
	   $imgpath = $result['imgsource'];
	   $itm = $result['item'];
	   $pri = $result['price'];
	   $dic = $result['discount'];
	   echo "<div class='ownercolumnsouter' style='margin-bottom: 19px;height: 254px;'>
	           $itm
	           <div class='ownercolumnsinner'>
       			   <img src='$imgpath' style='height:100%; width: 100%;'></img>
			   </div>Price : $pri Rs. <button style='color:white;background:green;width:70;height:27'> Buy</button>
			 </div>";
			 
}
?>

--->
<?php


$query = "SELECT * FROM `onrinformation` WHERE servicename ='$g'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);	   
$mbl = $result['mobile'];
$nm = $result['name'];
$epn = $result['enterprisename'];
$srn = $result['servicename'];
$ad = $result['address'];
$ot = $result['opentime'];
$ct = $result['closetime'];
$imgpath = $result['imgsorce'];

while($result = mysqli_fetch_assoc($data))
{
  
       
	   $mbl = $result['mobile'];
	   $nm = $result['name'];
	   $epn = $result['enterprisename'];
	   $srn = $result['servicename'];
	   $ad = $result['address'];
	   $ot = $result['opentime'];
	   $ct = $result['closetime'];
	   $imgpath = $result['imgsorce'];
	   echo "
				<div class='cards' style='border: 2px solid firebrick; background: white;padding: 12;margin-left: 33px;width:280px;margin-top: 50px;'>
					<a href='shopproduct.php?pre=$nm'>
					<img src='$imgpath'>
					<h4>$epn</h4>
					<p style='color:black;'>Address&nbsp:&nbsp$ad</p>
					<p style='color:black;'>Mobile&nbsp:&nbsp$mbl</p>
					<button style='color:white;background:green;font-size: 20px;width: 254px;padding: 4px;font-style: italic;px;'>View Product</button></a>
					<!--<p>Open-Time&nbsp:&nbsp$ot</p>
					<p>Close-Time&nbsp:&nbsp$ct</p>-->
				</div>";
			 
}
?>

</div>
<!----------------------Footer Section------------------------>
      <section id="h-footer" style="margin-top:80px;">
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