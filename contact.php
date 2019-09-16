<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    $mailTo = "jadychan@yahoo.com";
    $headers = "From: ".$mailFrom;
    
    mail($mailTo, $headers, $message);
    header("Location: contact.html");
?>  