<?php
//Block access from file
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}?>
<div id="signin">  
<div class="element">
    <strong>Sign In</strong>

Find the internship that best suits your interests by selecting among various mission categories.


<form action="/sign_in_page" method="post">
    
        
        <input placeholder="Email" type="email" id="mail" name="user_mail">
    
                <input placeholder="Password" type="password" id="password" name="user_password">
 
    
    <button type="submit">Log In</button>

    <a href="forgot_password.html">Forgot password ?</a>
    <button type="submit">Back To Home Page</button>
</div>
</div>
  
</form>
