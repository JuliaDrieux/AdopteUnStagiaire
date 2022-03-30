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

        <strong>My Account</strong>

        <img src="Images/Black_User.png">

        <div>
                <label for="email">Email</label>
                <input type="text" id="email" name="email_modify">
                <button type="modify">Modify</button>
        </div>
        <div>
                <label for="password">Password</label>
                <input type="text" id="password" name="password_modify">
                <button type="modify">Modify</button>
        </div>
        <div>
        <strong>Stats :</strong><br>
        <span>Number of applications :</span><br>
        <span>Date of last application :</span><br><br>
        <span>Number of rejections :</span><br>
        <span>Number of pending :</span><br>
        <span>Number of pending with favorable responses :</span><br><br>
        <strong>Favorite category :</strong><br>
        1)<br>
        2)<br>
        3)<br>



        </div>

        <button type="back_to_home_page">Back to home page</button><br><br>

    <?php include('footer.php');?>  
</body>

</html>
