<?php
   $to_email = "benwiles@wilesenterprises.com";
   $subject = 'Contact from Wiles Enterprises - '.$_POST['fname'].' '.$_POST['lname'];
   $body = $_POST['subject'];
   $headers = "From: ".$_POST['email'];
   echo $subject;
?>