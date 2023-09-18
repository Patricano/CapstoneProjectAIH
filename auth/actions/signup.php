<?php
include root . 'db\\config.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        
        require root . "auth/templates/signup.php";
    } else {
                $db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

                $username = $_POST['username'];
                $user_email = $_POST['email'];
                $user_phone = $_POST['phone'];
                $user_password = $_POST['password'];
                $name = $_POST['name'];
                $db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

                $query = "INSERT INTO `users`(`full_name`, `email`, `phone_number`, `password`) VALUES ('$name','$user_email','$user_phone','$user_password')";
          
                try {
                    $res = mysqli_query($db, $query);
                    send_message("Your account has been created","success");
                    header("Location: /login");
                } catch (mysqli_sql_exception $e) {
                    send_message("Someting went wrong","error");
                    
                }
                header("Location: /signup");
            }
           
    

?>