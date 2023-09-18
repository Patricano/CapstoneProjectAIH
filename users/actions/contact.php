<?php
include root . 'db\\config.php';
if($_SERVER['REQUEST_METHOD'] === 'GET')
{
    
 $connect = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
 
require root.'/users/views/contact.php';
} else {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {




        $name = $_POST['name'];

        $email = $_POST['email'];

        $message = $_POST['message'];

        if (!empty(trim($email)) && !empty(trim($message))) {
            $db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

            $query = "INSERT INTO `contactus`( `email`, `name`, `message`) VALUES ('$email','$name','$message')";


            $res = mysqli_query($db, $query);
            send_message("Your feedback has been submitted","success");



        } else {
            send_message("Please enter all details", "error");
        }


    }
    header("Location: /contact");

}
    

?>