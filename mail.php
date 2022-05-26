<?php

if (isset($_POST['submit'])) {
    $to = "mohamadkholid.kamali@gmail.com";
    $from = $_POST['email'];
    $subject = "Portfolio Contact Form";
    $subject2 = "Copy Contact Form";
    $message = "$from wrote the following : \n\n" . $_POST['message'];
    $message2 = "Here is copy of ur message $from : \n\n" . $_POST['message'];
    $headers = "From : $from";
    $headers2 = "From : $to";
    
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
    header('location:thanks.html');
    die();
}

header('Location:index.html');

?>