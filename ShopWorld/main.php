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

###########################
$Groceries = "Groceries And Essentials";
$Fruits = "Fruits And Vegitables";
$Bakeries = "Bakeries And Cake Shop";
$Medical = "Medical";
$Electronic = "Electronic And Hardware";
$Hotels = "Hotels And Restaurants";


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

<!------profile-------------------------------------->
<div class="top" style="border-bottom:3px solid black;">
	<table>
		<tr>
			<td><img src="<?php echo $photo; ?>" height="140" width="110"/>&nbsp&nbsp<?php echo $name; ?>&nbsp&nbsp&nbsp&nbsp<a href="main.php" ><i class="fa fa-home" ></i></a></td>
			<td align="right" valign="bottom"></td>
			<td align="right" valign="bottom"><button><a href="changepassword.php" >Change Password</a></button></td>
			<td align="right" valign="bottom"><button><a href="logout.php">Logout</a></button></td>
		</tr>
	</table>
</div>

<!---------------Search Section ------------------->
<!------
<section class="sr-section">
	<div class="container">
	<input type="Search" name="Search" id="search" placeholder="Enter Keywords">
	<select id="shop-type">
		<div class="select-opt">
		<option disabled="" selected>Select Shop Type</option>
		<option>Medical</option>
		<option>Grocery & Dairy products</option>
		<option>Mobile & Accessories</option>
		<option>Electronic</option>
		<option>Home & Essentials</option>
		<option>Stationary</option>
		<option>Automobile</option>
		<option>Fruits & Vegitables</option>
		</div>
	</select>
	<button class="btn">Search</button>
	</div>
</section>
----->

	<!--------------------Categories Section------------------------>
<section class="trend">
<h1>Categories</h1>
<div class="left">
		<div class="container">
<div class="card text-white bg-success" style="max-width: 25rem; max-height: 20rem; width: 25rem; height:200px;">
  <div class="card-body">
    <h5 class="card-title">Groceries & Essentials</h5>
   <?php  echo"<a href='itemlist.php?gro=$Groceries'><i class='fas fa-arrow-circle-right'></i></a>;" ?> <!--<a href='itemlist.php'><i class="fas fa-arrow-circle-right"></i></a>-->
    <img src="./image/grocery-cart.png">
  </div>
</div>

<div class="card text-white bg-primary" style="max-width: 25rem; max-height: 20rem; width: 25rem; height:200px;">
  <div class="card-body">
    <h5 class="card-title">Fruits & Vegitables</h5><br>
     <?php  echo"<a href='itemlist.php?gro=$Fruits'><i class='fas fa-arrow-circle-right'></i></a>;" ?>  <!--<a href="fruits.php"><i class="fas fa-arrow-circle-right"></i></a>-->
    <img src="./image/healthy-food.png">
  </div>
</div>
<div class="card text-white orange" style="max-width: 25rem; max-height: 20rem; width: 25rem; height:200px;">
  <div class="card-body">
    <h5 class="card-title">Bakeries & Cake Shop</h5>
     <?php  echo"<a href='itemlist.php?gro=$Bakeries'><i class='fas fa-arrow-circle-right'></i></a>;" ?><!--<a href="Bakeries.php"><i class="fas fa-arrow-circle-right"></i></a>-->
    <img src="./image/bakery-shop.png">
  </div>
</div>
<div class="card text-white bg-warning" style="max-width: 25rem; max-height: 20rem; width: 25rem; height:200px;">
  <div class="card-body">
    <h5 class="card-title">Medical</h5>
    <br>
    <?php  echo"<a href='itemlist.php?gro=$Medical'><i class='fas fa-arrow-circle-right'></i></a>;" ?><!--<a href="Medical.php"><i class="fas fa-arrow-circle-right"></i></a>-->
    <img src="./image/consulting.png">
  </div>
</div>
<div class="card text-white pink" style="max-width: 25rem; max-height: 20rem; width: 25rem; height:200px;">
  <div class="card-body">
    <h5 class="card-title">Electronic & Hardware</h5>
    <?php  echo"<a href='itemlist.php?gro=$Electronic'><i class='fas fa-arrow-circle-right'></i></a>;" ?><!--<a href="electronicitems.php"><i class="fas fa-arrow-circle-right"></i></a>-->
    <img src="./image/wrench.png">
  </div>
</div>
<div class="card text-white blue" style="max-width: 25rem; max-height: 20rem; width: 25rem; height:200px;">
  <div class="card-body">
    <h5 class="card-title">Hotels & Restaurants</h5><br>
    <?php  echo"<a href='itemlist.php?gro=$Hotels'><i class='fas fa-arrow-circle-right'></i></a>;" ?><!--<a href="Hotels.php"><i class="fas fa-arrow-circle-right"></i></a>-->
    <img src="./image/restaurant.png">
  </div>
</div>
<!--
<div class="card text-white blue" style="max-width: 9rem; max-height: 8rem;">
  <div class="card-body">
    <h5 class="card-title">Hotels & Restaurants</h5><br>
    <a href="#"><i class="fas fa-arrow-circle-right"></i></a>
    <img src="./image/restaurant.png">
  </div>
</div>
-->
	</div>
	</div>
	<div class="right">
		<div class="a-card">
		<a href="#">
		<img src="./image/ad2.png">
		</a>
		</div>
	</div>
	<div class="right">
	<div class="a-card">
		<a href="#">
		<img src="./image/ad3.jpg">
		</a>
	</div>
	</div>
</section>

<!----------------------Trending Shops Section------------------------>
	<section class="trend">
		<h1>Trending Shops</h1>
	<div class="left">
		<div class="cards">
		<a href="">
		<img src="./image/mob1.jpg">
		<h4>Shree Ganesh Mobile Shop</h4></a>
		<p>Address: mangaon, raigarh,402104</p>
		<p>Mobile: 152468542</p>
	</div>
		<div class="cards">
		<a href="">
		<img src="./image/gr1.jpg">
		<h4>Super Market</h4></a>
		<p>Address: mangaon, raigarh,402104</p>
		<p>Mobile: 152468542</p>
	</div>
		<div class="cards">
			<a href="">
		<img src="./image/milk.jpg">
		<h4>Krushna Dairy</h4></a>
		<p>Address: mangaon, raigarh,402104</p>
		<p>Mobile: 152468542</p>
	</div>
	</div>
	<!----------------------Advertisement Section------------------------>
	
	<div class="right">
		<div class="a-card">
		<a href="#">
		<img src="./image/ad2.png">
		</a>
		</div>
	</div> 
	<div class="left">
		<div class="cards">
			<a href="">
		<img src="./image/auto.jpg">
		<h4>Ram Automobiles</h4></a>
		<p>Address: mangaon, raigarh,402104</p>
		<p>Mobile: 152468542</p>
	</div>
		<div class="cards">
			<a href="">
		<img src="./image/beuty.jpg">
		<h4>Rekha Beuty Parlour</h4></a>
		<p>Address: mangaon, raigarh,402104</p>
		<p>Mobile: 152468542</p>
	</div>
		<div class="cards">
			<a href="">
		<img src="./image/cake.webp">
		<h4>Cake Shop</h4></a>
		<p>Address: mangaon, raigarh,402104</p>
		<p>Mobile: 152468542</p>
	</div>
	</div>
	<!----------------------Advertisement Section------------------------>
	
	<div class="right">
	<div class="a-card">
		<a href="#">
		<img src="./image/ad3.jpg">
		</a>
	</div>
	</div> 
	
	
</section>




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