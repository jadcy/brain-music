<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    $mailTo = "jadychan@yahoo.com";
    
    mail($mailTo, $message);
    
    header("Location: contact.html");
?>  