<?php
    echo ("isset");
    $to_email = "benwiles@wilesenterprises.com";
    $subject = 'Contact to Wiles Enterprises - '.$_POST['firstname'].' '.$_POST['lastname'];
    $body = $_POST['subject'];
    $headers = "From: ".$_POST['emailaddress'];
	header("refresh:0;url=https://wilesenterprises.com/contact-confirm");
?>