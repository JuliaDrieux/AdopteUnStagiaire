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

    <main id="Omain">
        <div id="main">
            <h2>Add a user</h2>

            <p>Find the internship that best suits your interests by selecting among various mission categories.</p>

            <div class="element">
                <form action="/register" method="post">
                    <div>
                        <input placeholder="Name" type="name" id="name" name="user_name">
                    </div><br>
                    <div>
                        <input placeholder="Surname" type="surname" id="surname" name="user_surname">
                    </div><br>
                    <div>
                        <input placeholder="Campus" type="campus" id="campus" name="user_campus">
                    </div><br>
                    <div>
                        <input placeholder="Email" type="email" id="mail" name="user_mail">
                    </div><br>
                    <div>
                            <input placeholder="Password" type="password" id="password" name="user_password">
                    </div><br>
                    <div>
                            <input placeholder="Confirm password" type="password" id="confirm_password" name="user_confirm_password">
                    </div><br>
                    <?php if(isset($error)) {?>
                        <div><?= $error?></div>
                    <?php } ?>
                    <button type="submit">Register</button>
                </form>
            </div>    
            <div class="element1">
                <a href="http://adopteunstagiaire.com" target="_self"><button>Back to home page</button></a>
            </div>    
        </div>    
    </main>

    <?php include('footer.php');?>  
</body>

</html>
