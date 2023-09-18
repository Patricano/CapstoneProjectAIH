<?php
include root . 'db\\config.php';
 $connect = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
 
require root.'/users/views/about.php';