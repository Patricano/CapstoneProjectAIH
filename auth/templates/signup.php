<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FOW | Sign Up</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../../FoodonWheels/static/CSS/index.css">
   <link rel="stylesheet" href="../../../FoodonWheels/static/CSS/login.css">

<style>

.body{
  background: #fff;
  overflow: hidden;
  margin-top: 100px;
  margin-bottom: 70px;
}

.container{
  max-width: 440px;
  padding: 0 0;
  margin: auto auto;
}

.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px #cd9352;
}

.wrapper .title{
  height: 90px;
  background: #cd9352;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}

.wrapper form{
  padding: 30px 25px 25px 25px;
}

.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}

.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}

form .row input:focus{
  border-color: #cd9352;
  box-shadow: 0px 0px 2px 2px rgba(205,147,82,0.5);
}

form .row input::placeholder{
  color: #999;
}

.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #cd9352;
  border: 1px solid #cd9352;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.wrapper form .pass{
  margin: -8px 0 20px 0;
}

.wrapper form .pass a{
  color: #cd9352;
  font-size: 17px;
  text-decoration: none;
}

.wrapper form .pass a:hover{
  text-decoration: underline;
}

.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #cd9352;
  border: 1px solid #cd9352;
  cursor: pointer;
}

form .button input:hover{
  background: rgba(205,147,82,0.5);
}

.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}

.wrapper form .signup-link a{
  color: #cd9352;
  text-decoration: none;
}

form .signup-link a:hover{
  text-decoration: underline;
}


</style>


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
      <a href="/logout"><i class="fas fa-user"></i></a>

      <?php
      if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
      ?>
                   <a href="/signup"><i class="fas fa-sign-out-alt"></i></a>
              
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

<div class="body">
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Sign Up Form</span></div>
        <form action="/signup" method="post">
        <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" name="name" required>
          </div>
          <div class="row">
            <i class="fas fa-phone"></i>
            <input type="text" placeholder="Phone" name="phone" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="email" placeholder="Email" name="email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Signup">
          </div>
          <div class="signup-link">Already a member? <a href="\login">Login now</a></div>
        </form>
      </div>
    </div>
  </div>


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
 
    <div class="credit"><span>Food on Wheels</span> | all rights reserved! </div>
 
 </section>
 
 <!-- footer section ends  -->
 
 
 
 
 
 
 
 
 
 
 <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
 
 <!-- custom js file link  -->
 <script src="../../../FoodonWheels/static/JS/index.js"></script>
 
 </body>
 </html>