<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOW | Home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../../FoodonWheels/static/CSS/index.css">
    <link rel="stylesheet" href="../../../FoodonWheels/static/CSS/home.css">
    <link rel="stylesheet" href="../../../FoodonWheels/static/CSS/menu.css">

    <style>
        .form-control, .custom-select, .custom-radio {
            font-size: medium;
        }
    </style>

</head>

<body>

    <!-- header section starts     -->

    <section class="header">

        <a href="#" class="logo"> <img src="../../../FoodonWheels/static/Images/logo.PNG"><span>Food on
                Wheels</span></a>

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
    <?php $cartItemCount = count($_SESSION['cart']);
    include root . "packages\msg_notifications.php"; ?>

    <!-- PRODUCTS -->


    <body>


        <div class="container" style="font-size: large;">
        <div class="row mt-3">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted" style="font-size: x-large;">Your cart</span>
                    <span class="badge badge-secondary badge-pill">
                        <?php echo $cartItemCount; ?>
                    </span>
                </h4>
                <ul class="list-group mb-3">
                    <?php
                    $total = 0;
                    foreach ($_SESSION['cart'] as $cartItem) {
                        $total += $cartItem['total_price'];
                        ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">
                                    <?php echo $cartItem['product_name'] ?>
                                </h6>
                                <small class="text-muted">Quantity:
                                    <?php echo $cartItem['qty'] ?> X Price:
                                    <?php echo $cartItem['product_price'] ?>
                                </small>
                            </div>
                            <span class="text-muted">$
                                <?php echo $cartItem['total_price'] ?>
                            </span>
                        </li>
                        <?php
                    }
                    ?>

                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total: </span>
                        <strong>$
                            <?php echo number_format($total, 2); ?>
                        </strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3" style="font-size: larger;">Billing address</h4>
                <?php
                if (isset($errorMsg) && count($errorMsg) > 0) {
                    foreach ($errorMsg as $error) {
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                }
                ?>
                <form class="needs-validatiojfyffn" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name"
                                placeholder="First Name"
                                value="<?php echo (isset($fnameValue) && !empty($fnameValue)) ? $fnameValue : '' ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name"
                                placeholder="Last Name"
                                value="<?php echo (isset($lnameValue) && !empty($lnameValue)) ? $lnameValue : '' ?>">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com"
                            value="<?php echo (isset($emailValue) && !empty($emailValue)) ? $emailValue : '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"
                            value="<?php echo (isset($addressValue) && !empty($addressValue)) ? $addressValue : '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" name="address2"
                            placeholder="Apartment or suite"
                            value="<?php echo (isset($address2Value) && !empty($address2Value)) ? $address2Value : '' ?>">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" name="country" id="country">
                                <option value="">Choose...</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" name="state" id="state">
                                <option value="">Choose...</option>
                                <option value="Sydney">Sydney</option>
                                <option value="Melbourne">Melbourne</option>
                                <option value="Perth">Perth</option>
                                <option value="Brisbane">Brisbane</option>
                                <option value="Adelaide">Adelaide</option>
                                <option value="Darwin">Darwin</option>
                                <option value="Canberra">Canberra</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zipcode" placeholder=""
                                value="<?php echo (isset($zipCodeValue) && !empty($zipCodeValue)) ? $zipCodeValue : '' ?>">
                        </div>
                    </div>
                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="cashOnDelivery" name="cashOnDelivery" type="radio" class="custom-control-input"
                                checked="">
                            <label class="custom-control-label" for="cashOnDelivery">Master Card or Visa Card</label>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-lg btn-block" type="submit" name="submit" value="submit">Continue
                        to
                        Payment</button>
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

            <div class="credit"><span>Food on Wheels</span> | All rights reserved! </div>

        </section>

        <!-- footer section ends  -->










        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

        <!-- custom js file link  -->
        <script src="../../../FoodonWheels/static/JS/index.js"></script>

    </body>

</html>