<?php 

   include root . 'db\\config.php';

    if(isset($_GET['product']) && !empty($_GET['product']) && is_numeric($_GET['product']))
    {
        $sql = "SELECT * FROM `items` WHERE id=".$_GET['product'];
        $handle = $db->prepare($sql);
        $handle->execute();
        if($handle->rowCount() == 1 )
        {
            $getProductData = $handle->fetch(PDO::FETCH_ASSOC);
          
        }
        else
        {
            $error = '404! No record found';
        }

    }
    else
    {
        $error = '404! No record found';
    }
    

    if(isset($_POST['add_to_cart']) && $_POST['add_to_cart'] == 'add to cart')
    {
        $productID = intval($_POST['id']);
        $productQty = intval($_POST['qty']);
        
        $sql = "SELECT * FROM `items` WHERE id=".$productID;;

        $prepare = $db->prepare($sql);
        
    
        
        $prepare->execute();
        $fetchProduct = $prepare->fetch(PDO::FETCH_ASSOC);

        $calculateTotalPrice = number_format($productQty * $fetchProduct['price'],2);
        
        $cartArray = [
            'product_id' =>$productID,
            'qty' => $productQty,
            'product_name' =>$fetchProduct['title'],
            'product_price' => $fetchProduct['price'],
            'total_price' => $calculateTotalPrice,
            'product_img' =>$fetchProduct['img']
        ];
        
        if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"]))
        {
            $productIDs = [];
            foreach($_SESSION["cart"] as $cartKey => $cartItem)
            {
                $productIDs[] = $cartItem['product_id'];
                if($cartItem['product_id'] == $productID)
                {
                    $_SESSION["cart"][$cartKey]['qty'] = $productQty;
                    $_SESSION["cart"][$cartKey]['total_price'] = $calculateTotalPrice;
                    break;
                }
            }

            if(!in_array($productID,$productIDs))
            {
                $_SESSION["cart"][]= $cartArray;
            }

         
            
        }
        else
        {
            $_SESSION["cart"][]= $cartArray;
            $successMsg = true;
           
        }
        send_message("Item added into your cart","success");
    
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


	
	
	


?>

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

    
    <?php if(isset($getProductData) && is_array($getProductData)){?>
        <?php if(isset($successMsg) && $successMsg == true){?>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible">
                         <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <img src="../../../FoodonWheels/static/Images/<?php echo $getProductData['img'] ?>" class="rounded img-thumbnail mr-2" style="width:40px;"><?php echo $getProductData['title']?> is added to cart. <a href="cart.php" class="alert-link">View Cart</a>
                    </div>
                </div>
            </div>
         <?php }?>

        <div class="row mt-3">
            <div class="col-md-5">
                <img src="../../../FoodonWheels/static/Images/<?php echo $getProductData['img']?>" style="width: 700px; height: 500px; margin-left: 500px; margin-top: 100px;">
            </div>
            <div class="col-md-7">
                <h1 style="font-size: xx-large; margin-top: 30px; margin-left: 780px;"><?php echo $getProductData['title']?></h1>
               
                <h4 style="font-size: x-large; margin-top: 10px; margin-left: 800px;">$<?php echo $getProductData['price']?></h4>
                
                <form class="form-inline" method="POST" action="/product?product="<?php echo $getProductData['id']?>>
                    <div class="form-group mb-2">
                        <input type="number" name="qty" id="productQty" class="form-control" placeholder="Quantity" min="1" max="1000" value="1" style="display
                        : none;">
                        <input type="hidden" name="id" value="<?php echo $getProductData['id']?>">
                    </div>
                    <div class="form-group mb-2 ml-2">
                        <button type="submit" class="btn btn-primary" name="add_to_cart" value="add to cart" style="font-size: x-large; margin-top: 20px; margin-left: 730px;">Add to Cart</button>
                    </div>
                </form>
                
            </div>
        </div>
        
    <?php
    }
    ?>

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