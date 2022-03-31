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
    
        <strong>Add Offer</strong><br><br>

        <div>
                <label for="company_name">Company Name</label><br>
                <input type="texte" id="company" name="company_name">
        </div><br>

        <div>
                <label for="promotion_concerned">Promotion Concerned</label><br>
                <input type="texte" id="promotion_concerned" name="promotion_concerned">
        </div><br>

        <label for="skills">Skills</label><br>
        <select name="skills" id="skills">
        <option value="CSS">CSS</option>
        <option value="HTML">HTML</option>
        <option value="Python">Python</option>
        <option value="C++">C++</option>
        </select><br><br>
        <div>
                <label for="locality">Locality</label><br>
                <input type="text" id="locality" name="locality">
        </div><br>
        <div>
                <label for="postcode">Postcode</label><br>
                <input type="text" id="postcode" name="postcode">
        </div><br>
        <div>
                <label for="duration">Duration</label><br>
                <input type="text" id="duration" name="duration">
        </div><br>

        <div>
                <label for="start_the">Start the</label><br>
                <input type="text" id="star_the" name="start_the">
        </div><br>

        <div>
                <label for="available_post">Available Post</label><br>
                <input type="number" id="available_post" name="available_post">
        </div><br>
        <div>
                <label for="wage">Wage (for an hour)</label><br>
                <input type="number" id="wage" name="wage">
        </div><br>
        <button type="register">Register</button><br><br>
        <div>
                <input type="text" id="research_offer" name="research_offer">
                <button type="search">Search</button><br><br>
        </div><br>

        <a href="http://adopteunstagiaire.com" target="_self"><button>Back to home page</button></a>


        <?php include('footer.php');?>
</body>
  
</html>
  
