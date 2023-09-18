<?php 
include_once ("config.php");

$connection = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
if ($connection->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS Foodonwheels";
if ($connection->query($sql) === TRUE) {
  $connection = new mysqli($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
  if ($connection->connect_error) 
  {
    die("Connection failed: " . $connection->connect_error);
  }

  $users = 'CREATE TABLE IF NOT EXISTS `users` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `password` varchar(128) NOT NULL,
    `date_joined` datetime(6)  DEFAULT CURRENT_TIMESTAMP,
    `phone_number` varchar(30) DEFAULT NULL,
    `full_name` varchar(35) DEFAULT NULL,
    `email` varchar(254) NOT NULL,
    `longitude` varchar(50) DEFAULT NULL,
    `latitude` varchar(50) DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
  ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';

  $connection->query($users);

  $categories = 'CREATE TABLE IF NOT EXISTS `categories` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `name` varchar(30) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';

  $connection->query($categories);



      $items = 'CREATE TABLE IF NOT EXISTS `items` (
        `date` datetime(6) NOT NULL,
        `id` bigint(20) NOT NULL AUTO_INCREMENT,
        `title` varchar(50) NOT NULL,
        `des` varchar(50)  NULL,
        `img` varchar(50)  NULL,
        `price` int(11) NOT NULL,
        `quantity` int(11) NOT NULL,
        `rquantity` int(11) NOT NULL,
        `category_id` bigint(20) NOT NULL,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
  
      $connection->query($items);

      $cateringservices = 'CREATE TABLE IF NOT EXISTS `catering` (
        `id` bigint(20) NOT NULL AUTO_INCREMENT,
        `name` varchar(50) NOT NULL,
        `email` varchar(50) NOT NULL,
        `phone` varchar(50) NOT NULL,
        `total_persons` int(11) NOT NULL,
        `total_dishes` int(11) NOT NULL,
        `address` varchar(150) NOT NULL,
        `special_request` varchar(150)  NULL,
        
       
        PRIMARY KEY (`id`)
       
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
  
      $connection->query($cateringservices);

    
      $locators = 'CREATE TABLE IF NOT EXISTS `locators` (
        `id` bigint(20) NOT NULL AUTO_INCREMENT,
        `title` varchar(40) NOT NULL,
        `longitude` varchar(50) DEFAULT NULL,
        `latitude` varchar(50) DEFAULT NULL,
        PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
  
      $connection->query($locators);

      $orders = 'CREATE TABLE IF NOT EXISTS `orders` (
        `dat_time` datetime(6) NOT NULL,
        `id` bigint(20) NOT NULL AUTO_INCREMENT,
        `total_amount` int(11) NOT NULL,
        `payment_status` varchar(20) NOT NULL,
        `payment_id` varchar(100) DEFAULT NULL,
        `order_status` varchar(40) NOT NULL,
        `user_id` bigint(20) NOT NULL,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
  
      $connection->query($orders);

      $orderitem = 'CREATE TABLE IF NOT EXISTS `orderitem` (
        `id` bigint(20) NOT NULL AUTO_INCREMENT,
        `price` int(11) NOT NULL,
        `qty` int(11) NOT NULL,
        `item_id` bigint(20) NOT NULL,
        `order_ID` bigint(20) NOT NULL,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
        FOREIGN KEY (`order_ID`) REFERENCES `orders` (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
  
      $connection->query($orderitem);


      $contactus = 'CREATE TABLE IF NOT EXISTS `contactus` (
        `id` bigint(20) NOT NULL AUTO_INCREMENT,
        `name` varchar(50) NOT NULL,
        `email` varchar(30) NOT NULL,
        `subject` varchar(150) NOT NULL,
        `message` varchar(150) NOT NULL,
        PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
  
      $connection->query($contactus);

} 

else {
  echo "error " . $connection->error;
}
$connection->close();

?>