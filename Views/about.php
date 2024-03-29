<?php
//Block access from file
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="http://cdn.adopteunstagiaire.com/style.css">
    <link rel="manifest" href="manifest.json">
</head>

<body>
    <?php include('header.php');?>
    <h1>About us</h1>
    <h3>Find out more about our motivations and what led us to create this platform!</h3>

    <h2>Our mission</h2>
    <p> As a student, looking for an internship is a difficult step that takes lots of time and effort. Getting a positive response may require many requests. Knowing the difficulty of this process, we wanted to help.</br></br>

        Our main goal is to facilitate those researches by providing an efficient research tool and simplifying the application process.
    </p>

    <h2>History</h2>
    <p>At the time, we were four CESI Strasbourg students in our second year of engineering school and had lots of difficulties finding an internship. After countless applications, we luckily found a mission and kept going on with our studies. We have since graduated and decided to create this fabulous website. Inspired by socials and dating apps, the tool we came up with is made to facilitate students to find an internship.</p>
    
    <a href="http://adopteunstagiaire.com"><button>← Go to homepage</button></a>

    <?php include('footer.php');?>  
</body>
</html>