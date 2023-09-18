<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FOW | Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../../FoodonWheels/static/CSS/index.css">
   <link rel="stylesheet" href="../../../FoodonWheels/static/CSS/home.css">
   <link rel="stylesheet" href="../../../FoodonWheels/static/CSS/cart.css">
    
   <style>
h1 {
   margin-left: 700px;
   padding-top: 100px;
   padding-bottom: 30px;
   font-size: xx-large;
   color: #cd9352;
}
</style>
</head>
<body>
   
<!-- header section starts     -->

<section class="header">

   <a href="#" class="logo"> <img src="../../../FoodonWheels/static/Images/logo.PNG"><span>Food on Wheels</span></a>

   <nav class="navbar">
      <a href="\index">Home</a>
      <a href="/menu">Menu</a>
      <a href="\catering">Catering</a>
      <a href="\about">About</a>
      <a href="\contact">Contact</a>
      <a href="\locate">Locate Us</a>
      <a href="\cart"><i class="fas fa-shopping-cart"></i></a>
      <a href="#"><i class="fas fa-search"></i></a>
      <?php
      if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
      ?>
                   <a href="/logout"><i class="fas fa-sign-out-alt"></i></a>
              
          <?php
      } else {
        ?>
         <a href="/login"><i class="fas fa-sign-in-alt"></i></a>
   
                <?php
        }
          ?>
   </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<?php include root."packages\msg_notifications.php";?>

<!-- Locate -->

<!DOCTYPE html>
<html>
<!-- Locate -->

<!DOCTYPE html>


<html>
<head>
<h1>Our Current Location</h1>
  
</head>
<body>
   <div id="googleMap" style="width: 100%; height: 600px;"></div>
   <script>
   function myMap() {
      var location = {lat: <?php echo $lat; ?>, lng: <?php echo $lng; ?>};
      console.log(location);
      var map = new google.maps.Map(
          document.getElementById('googleMap'), {zoom: 16, center: location});
      var marker = new google.maps.Marker({position: location, map: map});
    }
   </script>

   /*API key goes here */<script src=""></script>
</body>

</html>


<!-- FOOTER -->
<section class="footer">

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>09:00 AM to 06:00 PM</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+61 123 456 789</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>adminhelp@foodonwheels.com</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address</h3>
         <p>Sydney, Australia</p>
      </div>

   </div>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
   </div>

   <div class="credit"><span>Food on Wheels</span> | All rights reserved! </div>

</section>

<!-- footer section ends  -->










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- custom js file link  -->
<script src="../../../FoodonWheels/static/JS/index.js"></script>

</body>
</html>
</html>