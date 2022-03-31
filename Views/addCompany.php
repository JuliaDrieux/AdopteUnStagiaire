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
    
        <strong>Add Company</strong><br><br>

        <div>
                <label for="company_name">Company Name</label><br>
                <input type="texte" id="company" name="company_name">
        </div><br>

        <label for="activity_sector">Activity Sector</label><br>
        <select name="activity_sector" id="activity_sector">
        <option value="Network">Network</option>
        <option value="web">Web</option>
        <option value="cyber_security">CyberSecurity</option>
        <option value="developement">Developement</option>
        </select><br><br>


        <div>
                <label for="company_name">Passed number of CESI trainees</label><br>
                <input type="number" id="trainees_passed_number" name="trainees_passed_number">
        </div><br>
        <div>
                <label for="locality">Locality</label><br>
                <input type="text" id="locality" name="locality">
        </div><br>

        <div>
                <label for="postcode">Postcode</label><br>
                <input type="text" id="postcode" name="postcode">
        </div><br>
        <div>
                <label for="pilot_confidence">Pilot confidence</label><br>
                <input type="text" id="name" name="name">
        </div><br>
        
        <button type="register">Register</button><br><br>

        <div>
                        <label for="view">View (optional)</label><br>
                        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label><br>
                        <input type="texte" id="view_texte" name="view_texte">

        </div><br>

        <div>
                <input type="text" id="research_company" name="research_company">
                <button type="search">Search</button><br><br>
        </div><br>

        <button type="back_to_home_page">Back to home page</button><br><br>
    
    <?php include('footer.php');?>
</body>
  
</html>