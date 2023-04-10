<?php
if(isset($_POST)) {
    $to = "dar_darin993@mail.ru";
    $subject = "Заявка c сайта";

    $message = 'Имя: '.$_POST['name'].',<br>
    Почта: '.$_POST['email']. '';   


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
    $headers .= "From: <noreply@bestsolutions.kz>" . "\r\n";
    echo "<script>setTimeout(function(){window.location.href='/';},1000);</script>";
    mail($to,$subject,$message,$headers);
 
}