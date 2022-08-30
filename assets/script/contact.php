<?php
   $to_email = "benwiles@wilesenterprises.com";
   $subject = 'Contact from Wiles Enterprises - '.$_POST['fname'].' '.$_POST['lname'];
   $body = $_POST['subject'];
   $headers = "From: ".$_POST['email'];
 
   if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
   } else {
      echo("Email sending failed...");
   }
?>