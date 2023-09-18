<?php
include root . 'db\\config.php';
 $connect = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
    
 $query = mysqli_query($connect,"SELECT `date`, i.`id`, `title`, `price`, `quantity`, `rquantity`, ct.`name`,`img`,`des` FROM `items` as i,categories as ct where category_id=ct.id");
 
 
require root.'/users/views/menu.php';