<?php
include root . 'db\\config.php';

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("Location: /index");
    exit;
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        
        require root . "auth/templates/login.php";
    } else {

                $email = trim($_POST["email"]);

                $password = trim($_POST["password"]);

                $db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

                $query = "SELECT * FROM `users` where (email='$email') and password='$password'";
                
                try {
                    $res = mysqli_query($db, $query);
                    $count = mysqli_num_rows($res);
       
                if ($count>=1)
                {   
                        $user = mysqli_fetch_row($res); 
                        $_SESSION["loggedin"] = true;
                        $_SESSION["user"] = $user;
                        send_message("Login Successfully","success");
                        header("Location: /index");
                    
                    } else {
                        send_message("Username or password invalid","error");
                    }
                } catch (mysqli_sql_exception $e) {
                    echo $e;
                    send_message("Someting went wrong","error");
                }
               header("Location: /login");
            
           
        }
    }

?>