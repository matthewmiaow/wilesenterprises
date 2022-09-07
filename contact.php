<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Wiles Enterprises</title>
    <link rel="stylesheet" href="assets/style/header.css" />
    <link rel="stylesheet" href="assets/style/contact.css" />
</head>
<body>
    <header>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a class="active" href="contact.php">Contact</a></li>
        </ul>
    </header>
    <div class="container" style="margin-top: 50px">
        <div class="errors">
            <?php
            if(!empty($_POST)) {
            if (!filter_var($_POST['emailaddress'], FILTER_VALIDATE_EMAIL)) {
            if(empty($_POST['emailaddress'])) {
            echo("Email address cannot be empty<br />");
            } else {
            echo("Invalid email address<br />");
            }
            $_POST['validform'] = 'off';
            }
            if (empty($_POST['firstname'])) {
            $_POST['validform'] = 'off';
            echo("Invalid first name<br />");
            }
            if (empty($_POST['lastname'])) {
            $_POST['validform'] = 'off';
            echo("Invalid last name<br />");
            }
            if (empty($_POST['subject'])) {
            $_POST['validform'] = 'off';
            echo("Subject can't be left empty<br />");
            }
            if (!preg_match('/^[0-9]{7,12}+$/', $_POST['phonenumber'])) {
            $_POST['validform'] = 'off';
            echo("Invalid phone number<br />");
            }
            if($_POST['validform'] == 'off') { echo('<br /><br />'); }
            }
            ?>
        </div>
        <?php
        if(empty($_POST) or $_POST['validform'] == 'off') {
        echo('<form method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="First Name">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Last Name">
            <label for="email">Email Address</label>
            <input type="text" id="email" name="emailaddress" placeholder="Email Address">
            <label for="pnum">Phone Number</label>
            <input type="text" id="pnum" name="phonenumber" placeholder="Phone Number">
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>
            <input style="visibility: hidden" type="checkbox" name="validform" checked>
            <input type="submit" value="Submit">
        </form>');
        } else if($_POST['validform'] == 'on') {
        echo ("Thank you for submitting your query!
        </br></br>
        You should receive a confirmation email from us soon to ensure that all your information is correct.</br>
        We should receive and reply to this email within 72 hours.
        </br></br>
        Wiles Enterprises.");
        $to_email = "benwiles@wilesenterprises.com";
        $subject = 'Contact to Wiles Enterprises - '.ucfirst($_POST['firstname']).' '.ucfirst($_POST['lastname']);
        $body = $_POST['subject']."\n\nPhone Number: ".$_POST['phonenumber'];
        $headers = "From: ".$_POST['emailaddress'];
        mail($to_email, $subject, $body, $headers);
        }
        ?>
    </div>
    
     <div class="footer-basic">
        <footer>
            <div class="social"><a href="mailto:benwiles@wilesenterprises.com"><i class="fa fa-envelope"></i></a><a href="tel:0204-164-5963"><i class="fa fa-phone" aria-hidden="true"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="/index.html">Home</a></li>
                <li class="list-inline-item"><a href="/about.html">About</a></li>
                <li class="list-inline-item"><a href="/terms.html">Terms</a></li>
                <li class="list-inline-item"><a href="/privacy.html">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Wiles Enterprises © 2022</p>
        </footer>
    </div>
</body>
</html>
