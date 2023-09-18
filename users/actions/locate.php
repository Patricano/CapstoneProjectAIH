<?php
include root . 'db\\config.php';
 $connect = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
 $sql = "SELECT latitude, longitude FROM locators where id=1";
 $result = mysqli_query($connect, $sql);
 $row = mysqli_fetch_assoc($result);
 $lat = $row["latitude"];
 $lng = $row["longitude"];

require root.'/users/views/locate.php';