
<?php
include root . 'db\\config.php';
if($_SERVER['REQUEST_METHOD'] === 'GET')
{
    
 $connect = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
 
 require root.'/users/views/catering.php';
} else {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {




        $name = $_POST['name'];

        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $persons = $_POST['persons'];
        $dishes = $_POST['dishes'];
        $address = $_POST['address'];
        $message = $_POST['message'];


        if (!empty(trim($email)) && !empty(trim($message))) {
            $db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

            $query = "INSERT INTO `catering`( `email`, `name`, `special_request`,`phone`,`total_dishes`,`address`,`total_persons`) VALUES ('$email','$name','$message','$phone','$dishes','$address','persons')";


            $res = mysqli_query($db, $query);
            send_message("Your feedback has been submitted","success");



        } else {
            send_message("Please enter all details", "error");
        }


    }
    header("Location: /catering");

}
    

?>