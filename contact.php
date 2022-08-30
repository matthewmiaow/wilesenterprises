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
            background-color: rgb(120, 120, 120);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: proxima nova, sans-serif;
        }

            input[type=submit]:hover {
                background-color: #45a049;
            }

        .container {
            width: 50%;
            margin: auto;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <ul>
            <li><a href="index.html"> Home </a></li>
            <li><a href="about.html"> About </a></li>
            <li><a class="active" href="contact.html">Contact</a></li>
        </ul>
    </header>

    <div class="container" style="margin-top: 50px">
        <form method="POST">
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
    </div>

    <?php
        if(isset($_POST['submit'])) {
            echo ("isset");
            $to_email = "benwiles@wilesenterprises.com";
            $subject = 'Contact to Wiles Enterprises - '.$_POST['firstname'].' '.$_POST['lastname'];
            $body = $_POST['subject'];
            $headers = "From: ".$_POST['emailaddress'];

        }
    ?>

</body>
</html>