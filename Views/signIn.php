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
            <div id="signin">
                <div class="element">
                    <div class="element1">
                        <h2>Sign In</h2>
                    </div>    
                    <div class="element1">
                        <p>
                            Find the internship that best suits your interests by selecting among<br>various mission categories.
                        <p>
                    </div>
                    <div class="element1">
                        <form action="/signIn" method="post">
                            <div class="element2">
                                <input placeholder="Email" type="email" id="mail" name="user_mail">
                            </div>
                            <div class="element2">
                                <input placeholder="Password" type="password" id="password" name="user_password">
                            </div>
                            <div class="element2">
                            <?php if(isset($error)) {?>
                                
                                    <?= $error?>
                                
                            <?php } ?>
                            <button type="submit">Log In</button>
                            </div>
                        </form>
                    </div>
                    <div class="element1">
                        <a href="http://adopteunstagiaire.com/" target="_self"><button>Back to home page</button></a>
                    </div>
                </div>
            </div>         
        </div>
    </main>

    <?php include('footer.php');?>  
</body>

</html>
