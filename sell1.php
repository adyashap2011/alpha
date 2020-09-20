

<!DOCTYPE html>

<html lang="en">

  <title>Homeato-Sell</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="goto-here">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Homeato</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Shop</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="shop.html">Shop</a>
              <a class="dropdown-item" href="wishlist.html">Wishlist</a>
              <a class="dropdown-item" href="product-single.html">Single Product</a>
              <a class="dropdown-item" href="cart.html">Cart</a>
              <a class="dropdown-item" href="checkout.html">Checkout</a>
            </div>
          </li>
          <li class="nav-item"><a href="sell1.php" class="nav-link">Business</a></li>
          <li class="nav-item"><a href="register.html" class="nav-link">Register</a></li>
          <li class="nav-item"><a href="login.html" class="nav-link">Log In</a></li>
          <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span
                class="icon-shopping_cart"></span>[0]</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">

          <h1 class="mb-0 bread">Sell</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <form action="sell.php" method="POST">
          <div class="container">
            <h1>Start selling your food!</h1>
            <hr>
            <label for="food"><b>Food Name </b></label>
            <input type="text" placeholder="Enter Food Item" name="food" id="food" required>
            <hr>
            <label for="location"><b>Location</b></label>
            <input type="text" placeholder="Enter Location" name="location" id="location" required>
            <hr>
            <label for="phone "><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone number" name="Phone" id="Phone" required>
            <hr>
            <label for="Price "><b>Price(Enter 0 to donate(or) mention price)</b></label>
            <input type="text" placeholder="Enter Price" name="Price" id="Price" required>
            <!--
            <hr>
            <form>
              <input type="radio" id="price" name="cost" value="price">
              <label for="Cash">Sell for money</label><br>
              <input type="radio" id="free" name="cost" value="free">
              <label for="free">Sell for Free/Donate</label><br>
            </form>-->

            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
	  
      <div class="col-lg-6 product-details pl-md-5 ftco-animate">
        <h1 style="text-align: center;">Your Menu</h1>
        <div class="cart-total mb-3">
          <h3>Food Items</h3>
      
		<p class="d-flex">
		  <table>
<tr>
<th>Food</th>
<th>Price</th>
</tr>
		  <?php
//Step1
$servername = "remotemysql.com";
$database = "g6DbtocErH";
$username = "g6DbtocErH";
$password = "GJVUCglOMR";
 $conn = mysqli_connect($servername,$username,$password,$database)
 or die('Error connecting to MySQL server.');
 $ph=$_POST['Phone'];
 $sql = "SELECT  * FROM SELL where Phone='$ph'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<span>"."<tr><td>" . $row["Food"]. "</td><td>" . $row["Price"] . "</td><td>"."</span>";
}
echo "</table>";
} 
else { echo "0 results"; }
$conn->close();

?>
		  </table>
		  </p>
          <hr>
          <form action="sell1.php" method="POST">
	  <label for="Phone "><b>Enter Number to Check your menu</b></label>
            <input type="text" placeholder="Enter Number" name="Phone" id="Price" >
			<button type="submit" class="btn btn-primary">Submit</button>
	  </form>
    </div>
          <!--<p class="d-flex total-price">
            <span>Total</span>
            <span>$17.60</span>
          </p>-->
        </div>
      </div>
    </div>
    

  </section> <!-- .section -->

  <footer class="ftco-footer ftco-section bg-light">
    <div class="container">
      <div class="row">
        <div class="mouse">
          <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
          </a>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Homeato</h2>
            >
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Menu</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Shop</a></li>
              <li><a href="#" class="py-2 d-block">Business</a></li>
              <li><a href="#" class="py-2 d-block">Cart</a></li>
              <li><a href="#" class="py-2 d-block">Home</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Help</h2>
            <div class="d-flex">
              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
              </ul>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <!--<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San
                    Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>-->
                <li><a href="#"><span class="icon icon-envelope"></span><span
                      class="text">contact@homeato.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | Made with
            <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
              target="_blank">Homeato</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>