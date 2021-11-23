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
$nmpath = $_GET['pre'];
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
              <a class="nav-item nav-link active" href="./index.php">
                <h5> HOME </h5>
              </a>
              <a class="nav-item nav-link" href="./profilelogin.html">
                <h5> LOGIN </h5>
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
<!--<h3 style='text-align:center;color:maroon;'>Shop All Products</h3>-->
<div style="padding-top: 25px">
<?php
$query = "SELECT * FROM `itemdetails` WHERE ownername ='$nmpath'";
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
	   echo "<div class='ownercolumnsouter'>
	           $itm
	           <div class='ownercolumnsinner'>
       			   <img src='$imgpath' style='height:100%; width: 100%;'></img>
			   </div>Price : $pri Rs.&nbsp<a href='#' style='color:white;background:green;width:73;height:29;font-size:15;padding: 5;'>Buy</a> 
			 </div>";
}
?>
</div>

<!----------------------Footer Section------------------------>
      <section id="h-footer" style="margin-top:150px;">
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