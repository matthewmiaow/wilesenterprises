<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Wiles Enterprises</title>
    <link rel="stylesheet" href="assets/style/header.css" />
    <style>
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: rgb(255 57 41);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: georgia, sans-serif;
            font-weight: bold;
        }

            input[type=submit]:hover {
                transform: translateY(-2px);
            }

            input[type=submit]:active {
                transform: translateY(2px);
            }

        .container {
            width: 50%;
            margin: auto;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        @media only screen and (max-device-width: 600px) {
            ul {
                font-size: 50px;
            }

            body {
                font-size: 50px;
            }

            input {
                font-size: 40px;
            }

            textarea {
                font-size: 40px;
            }
            
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <header>
        <ul>
            <li><a href="index.html"> Home </a></li>
            <li><a href="about.html"> About </a></li>
            <li><a class="active" href="contact.php">Contact</a></li>
        </ul>
    </header>
    <input style="visibility: hidden" type="checkbox" name="validform" checked>
    <div class="container" style="margin-top: 50px">
        <?php
        if(!empty($_POST)) {
        if (!filter_var($_POST['emailaddress'], FILTER_VALIDATE_EMAIL)) {
        $_POST['validform'] = 'off';
        echo("Invalid email address.\r\n");
        }
        if (empty($_POST['firstname'])) {
        $_POST['validform'] = 'off';
        echo("First name can't be left empty.\r\n");
        }
        if (empty($_POST['lastname'])) {
        $_POST['validform'] = 'off';
        echo("Last name can't be left empty.\r\n");
        }
        if (empty($_POST['subject'])) {
        $_POST['validform'] = 'off';
        echo("Subject can't be left empty.\r\n");
        }
        if (!preg_match('/^[0-9]{7,12}+$/', $_POST['phonenumber'])) {
        $_POST['validform'] = 'off';
        echo("Invalid phone number\r\n");
        }
        }
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
            <input type="submit" value="Submit">
        </form>');
        } else if ($_POST['validform'] == 'on') {
        echo ("Thank you for submitting your query!
        </br></br>
        You should receive a confirmation email from us soon to ensure that all your information is correct.</br>
        We should receive and reply to this email within 72 hours.
        </br></br>
        Wiles Enterprises.");
        $to_email = "benwiles@wilesenterprises.com";
        $subject = 'Contact to Wiles Enterprises - '.$_POST['firstname'].' '.$_POST['lastname'];
        $body = $_POST['subject'];
        $headers = "From: ".$_POST['emailaddress'];
        mail($to_email, $subject, $body, $headers);
        }
        ?>
    </div>
</body>
</html>