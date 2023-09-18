<?php
if (isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>