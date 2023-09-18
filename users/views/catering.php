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

.container {
   box-sizing: border-box;
   margin-left: 300px;
   margin-right: 300px;
   border-radius: 5px;
   padding: 20px;
}

input[type=text], input[type=email], input[type=number], textarea {
  width: 100%;
  padding: 13px;
  border: 1px solid #cd9352;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  font-size: 17px;
}

input[type=text]:focus, input[type=email]:focus, input[type=number]:focus, textarea:focus {
   box-shadow: 0 0 10px rgba(205,147,82,0.5);
}

input[type=submit] {
  background-color: #cd9352;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 17px;
}


input[type=submit]:hover {
  background-color: rgba(205,147,82,0.5);
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

<!-- CATERING -->

<h1>Book our Catering Services</h1>

<div class="container">
  <form action="/catering" method="post">
    <input type="text" id="fname" name="name" placeholder="Name">
    <input type="email" id="email" name="email" placeholder="Email">
    <input type="text" id="phone" name="phone" placeholder="Phone">
    <input type="number" id="persons" name="persons" placeholder="Total Persons">
    <input type="number" id="dishes" name="dishes" placeholder="Total Dishes">
    <input type="text" id="address" name="address" placeholder="address">
    <textarea id="message" name="message" placeholder="Any Special Requests" style="height:200px"></textarea>
    <input type="submit" value="Submit">
  </form>
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