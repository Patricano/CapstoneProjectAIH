<?php

define('root', "{$_SERVER['DOCUMENT_ROOT']}/FoodonWheels/");

function send_message($message,$color)
{
    array_push($_SESSION["messages"], array("message" => $message, "color" => $color));
}

?>