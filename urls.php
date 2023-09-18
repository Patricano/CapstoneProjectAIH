<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/FoodonWheels/packages/router.php");
include_once ("{$_SERVER['DOCUMENT_ROOT']}/FoodonWheels/const.php");
require_once("db/FoodonWheelsDb.php");
if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = array();
}
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
get('/login','FoodonWheels/auth/actions/login.php');
get('/menu','FoodonWheels/users/actions/menu.php');
get('/cart','FoodonWheels/users/views/cart.php');
get('/logout','FoodonWheels/auth/actions/logout.php');
get('/signup','FoodonWheels/auth/actions/signup.php');
post('/signup','FoodonWheels/auth/actions/signup.php');
post('/login','FoodonWheels/auth/actions/login.php');
get('/index','FoodonWheels/users/actions/index.php');
get('/catering','FoodonWheels/users/actions/catering.php');
post('/catering','FoodonWheels/users/actions/catering.php');
get('/contact','FoodonWheels/users/actions/contact.php');
post('/contact','FoodonWheels/users/actions/contact.php');
get('/about','FoodonWheels/users/actions/about.php');
get('/locate','FoodonWheels/users/actions/locate.php');
get('/me/cart/$action/$id', 'FoodonWheels/users/actions/cart_actions.php');
get('/product', 'FoodonWheels/users/views/product_view.php');
get('/clear_cart', 'FoodonWheels/users/actions/clear_cart.php');
post('/product', 'FoodonWheels/users/views/product_view.php');
get('/checkout', 'FoodonWheels/users/views/checkout.php');



