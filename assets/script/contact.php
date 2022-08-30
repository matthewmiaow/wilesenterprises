<?php
    $to_email = "benwiles@wilesenterprises.com";
    $subject = 'Contact to Wiles Enterprises - '.$_POST['firstname'].' '.$_POST['lastname'];
    $body = $_POST['subject'];
    $headers = "From: ".$_POST['emailaddress'];
    if ( mail($to_email, $subject, $body, $headers)) {
	    header("refresh:0;url=https://wilesenterprises.com/contact-confirm.html");
    } else {
        echo("Email sending failed...");
    }
?>

<form method="post">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="First Name">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Last Name">

                <label for="email">Email Address</label>
                <input type="text" id="email" name="emailaddress" placeholder="Email Address">

                <label for="pnum">Phone Number</label>
                <input type="text" id="pnum" name="phonenumber" placeholder="Phone Number">

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
                </form>


                
        if(isset($_POST['firstname'])) {
            $to_email = "benwiles@wilesenterprises.com";
            $subject = 'Contact to Wiles Enterprises - '.$_POST['firstname'].' '.$_POST['lastname'];
            $body = $_POST['subject'];
            $headers = "From: ".$_POST['emailaddress'];
            if ( mail($to_email, $subject, $body, $headers)) {
	            header("refresh:0;url=https://wilesenterprises.com/contact-confirm.html");
            } else {
                echo("Email sending failed...");
            }
        }