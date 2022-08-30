<?php
   $to_email = "benwiles@wilesenterprises.com";
   $subject = 'Contact from Wiles Enterprises - '.$_POST['firstname'].' '.$_POST['lastname'];
   $body = $_POST['subject'];
   $headers = "From: ".$_POST['emailaddress'];
   echo $subject;
?>