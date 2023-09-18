<?php
$DB_SERVER='localhost';
$DB_USERNAME='root';
$DB_PASSWORD='';
$DB_NAME='FoodonWheels';

$check = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
if($check === false){
    die("connection error" . mysqli_connect_error());
}
$dsn = 'mysql:dbname=FoodonWheels;host=localhost';
try
{
	$db = new PDO($dsn,'root','');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}

?>