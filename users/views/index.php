<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FOW | Home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../../FoodonWheels/static/CSS/index.css">

</head>
<body>
   
<!-- header section starts     -->

<section class="header">

   <a href="#" class="logo"> <img src="../../../FoodonWheels/static/Images/logo.PNG"><span>Food on Wheels</span></a>

   <nav class="navbar">
      <a href="\index">Home</a>
      <a href="\menu">Menu</a>
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
<!-- home section starts  -->

<section class="home" id="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background: url(../../../FoodonWheels/static/images/foodtruck1.jpg) no-repeat;">
            <div class="content">
               <span>Delicious Food</span>
               <h3>Hungry Heaven</h3>
               <a href="#" class="btn">Order Now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(../../../FoodonWheels/static/images/cat.jpg) no-repeat;">
            <div class="content">
               <span>Delicious Food</span>
               <h3>Cuisine Craze</h3>
               <a href="#" class="btn">Order Now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(../../../FoodonWheels/static/images/cat2.jfif) no-repeat;">
            <div class="content">
               <span>Delicious Food</span>
               <h3>Foodie Frenzy</h3>
               <a href="#" class="btn">Order Now</a>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="image">
      <img src="../../../FoodonWheels/static/images/momos.jpg" alt="">
   </div>
<!-- a full meal, our directory of food trucks makes it easy to find something that will tantalize your taste buds. We also offer a platform for food truck owners to promote their business, connect with customers and manage their online presence. With Food on Wheels, you'll always be able to find your next culinary adventure on the go. So come explore, eat and enjoy!-->
   <div class="content">
      <h3 class="title">welcome to our restaurant</h3>
      <p>Welcome to "Food on Wheels", the premier destination for delicious street food and mobile dining experiences. We are dedicated to showcase the best food truck, offering you the opportunity to explore new and exciting flavors and cuisines. Whether you're in the mood for a quick bite or.....</p>
      <a href="\about" class="btn">read more</a>
      <div class="icons-container">
         <div class="icons">
            <img src="images/about-icon-1.png" alt="">
            <h3>quality food</h3>
         </div>
         <div class="icons">
            <img src="images/about-icon-2.png" alt="">
            <h3>food & drinks</h3>
         </div>
         <div class="icons">
            <img src="images/about-icon-3.png" alt="">
            <h3>expert chefs</h3>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->


<!-- footer section starts  -->

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