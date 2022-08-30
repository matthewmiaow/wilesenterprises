<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Wiles Enterprises</title>
    <link rel="stylesheet" href="assets/style/header.css" />
    <?php
    ?>
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
        <?php
        if(isset($_POST['firstname'])) {
            echo('isset');
        } else {
            echo ('Thank you for submitting your query!\n\nWiles Enterprises.')
        }
        ?>
    </div>
</body>
</html>