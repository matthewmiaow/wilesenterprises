<?php
    $to_email = "benwiles@wilesenterprises.com";
    $subject = 'Contact to Wiles Enterprises - '.$_POST['firstname'].' '.$_POST['lastname'];
    $body = $_POST['subject'];
    $headers = "From: ".$_POST['emailaddress'];
 
    if ( mail($to_email, $subject, $body, $headers)) {
        header("Location: https://example.com/myOtherPage.php");
        die();
    } else {
        echo("Email sending failed...");
    }
?>