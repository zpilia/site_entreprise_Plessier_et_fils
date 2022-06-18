<?php

echo "<pre>";

    print_r($_POST);

    $name = $_POST['login'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $text = $_POST['content'];

    $to = "zpilia2@gmail.com";
    $body = "";

    $body .= "From : " . $name . "\r\n";
    $body .= "Email : ".$email. "\r\n";
    $body .= "From : ".$text. "\r\n";

    mail($to, $subject, $body);


echo '<pre>';

?>