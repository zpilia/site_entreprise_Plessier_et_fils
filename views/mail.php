<?php

$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        //submit the form
        $name = $_POST['login'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $text = $_POST['content'];

        $to = "zpilia2@gmail.com";
        $body = "";

        $body .= "From : " . $name . "\r\n";
        $body .= "Email : " . $email . "\r\n";
        $body .= "From : " . $text . "\r\n";

        //mail($to, $subject, $body);

        $message_sent = true;
    }
    else {
        $invalid_class_name = "form-invalid";
    }

}

?>