<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name." <".$email.">\r\n";

$recipient = "sk@bim-s.it";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Portfolio Website of Serget Kuleshov">
    <meta name="keywords" content="developer, .net, dotnet, portfolio, Sergey, Kuleshov, Revit, BIM">
    <script src="https://kit.fontawesome.com/6004b5d039.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Message Sent | Developer & BIM Specialist</title>
</head>
<body>
    <!-- Header -->
    <header id="header-inner">
        <div class="container">
            <nav id="main-nav">
                <a href="index.html"><h1>BIM-S.it</h1></a>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="projects.html">PROJECTS</a></li>
                    <li><a href="contact.html" class="current">CONTACT</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Section A: Contact Form-->
    <section id="contact-a" class="text-center py-3">
        <div class="container">
            <h2 class="section-title">Thank you</h2>
            <div class="bottom-line"></div>
            <p class="lead">Your message has been sent. Thank you!</p>
            <a href="index.html" class="btn-light">Home</a>
        </div>
    </section>
</body>
</html>

';

?>