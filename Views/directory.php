<?php
//Block access from file
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}?>

<strong>Directory</strong><br><br>

 <div>
        <input type="text" id="research_person" name="research_person">
        <button type="search">Search</button><br><br>
</div><br>

<button type="back_to_home_page">Back to home page</button><br><br>