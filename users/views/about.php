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
 

 .about-section {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 50px 50px;
}

.about-image {
  width: 40%;
  text-align: center;
}

.about-image img {
  max-width: 100%;
  height: auto;
}

.about-content {
  width: 60%;
  padding-left: 50px;
}

.about-content h2 {
  font-size: 36px;
  margin-bottom: 25px;
}

.about-content p {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 25px;
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

<!-- ABOUT -->

<div class="about-section">
  <div class="about-image">
    <img src="../../../FoodonWheels/static/images/foodtruck1.jpg" alt="about image">
  </div>
  <div class="about-content">
    <h2>About Our Food Cart</h2>
    <p>Welcome to our food cart, where we bring delicious and fresh food right to your doorstep. Our goal is to offer the best food experience to our customers through our handcrafted dishes and convenient ordering options.</p>
    <p>Our food cart travels around the city, providing you with hot and fresh food no matter where you are. Whether you prefer to order online or in person, we have you covered. Our 5KM delivery radius ensures that you never have to wait too long for your food to arrive.</p>
    <p>We are passionate about food and strive to use only the freshest ingredients to create dishes that are both delicious and nourishing. From classic favorites to unique and inventive recipes, there is something for everyone on our menu.</p>
    <p>Thank you for choosing us for your food needs. We are looking forward to serving you soon!</p>
  </div>
</div>


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