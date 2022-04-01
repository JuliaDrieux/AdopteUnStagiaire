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
            <h2>Add Offer</h2>
            <p>You can add the offers here !</p>

            <div class="element">
                <form action="/addOffer" method="post">
                    <div>
                        <input placeholder="Company" id="company" name="offer_company">
                    </div><br>
                    <div>
                        <input placeholder="Category" id="category" name="offer_category">
                    </div><br>
                    <div>
                        <input placeholder="Duration (weeks)" type="number" id="duration" name="offer_duration">
                    </div><br>
                    <div>
                        <input placeholder="Salary (€/month)" type="number" id="salary" name="offer_salary">
                    </div><br>
                    <div>
                        <input placeholder="Available positions" id="availablePositions" name="offer_availablePositions">
                    </div><br>
                    <div>
                        <input placeholder="Email" type="email" id="email" name="offer_email">
                    </div><br>
                    <?php if(isset($error)) {?>
                        <div><?= $error?></div>
                    <?php } ?>
                    <button type="submit">Create</button>
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
  
