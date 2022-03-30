<?php
//Block access from file
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}?>

<strong>Sign In</strong><br><br>

Find the internship that best suits your interests by selecting among various mission categories.<br><br>


<form action="/sign_in_page" method="post">
    <div>
        
        <input placeholder="Email" type="email" id="mail" name="user_mail">
    </div><br>
    <div>
             <input placeholder="Password" type="password" id="password" name="user_password">
    </div><br>
    
    <button type="submit">Log In</button><br><br>

    <a href="forgot_password.html">Forgot password ?</a><br><br>

    <button type="submit">Back To Home Page</button>
  
</form>
