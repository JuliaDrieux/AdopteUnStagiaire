<?php
//Block access from file
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}?>

<!-- ----------------------- footer ----------------------- -->
<footer>
	<span id="bottom"></span>
	<div id="foot">
		<div class="element">
			<img id="image_footer" src="http://cdn.adopteunstagiaire.com/images/logo_crop.png">
		</div>
		<div class="element">
			<div class="element1">
				<div class="element2">
					<a href="http://adopteunstagiaire.com/about"><span>About us</span></a>
					<p>
						Click on the link to see our history !<br>
						(Tips: It's above !)
					</p>
				</div>	
				<div class="element2">
					<span>Contact</span>
					<p id="contact_text">
						+33 6 22 48 74 29 (France)<br>
						contact@adopteunstagiaire.com<br>
						Parc des Tanneries, 2 All. des Foulons, 67380 Lingolsheim
					</p>
				</div>	
				<!-- <a href="adopteunstagiaire.com/joinUs">Join us</a> 
				By clicking Join us, you indicate that you have read and agree to adopte un stagiaire Privacy Policy. -->
			</div>
			<div class="element1">		
				<div class="element2">	
					<small>
						« <a href="https://policies.google.com/privacy?hl=fr">Privacy Policy (RGPD)</a> and <a href="https://fr.wikipedia.org/wiki/Cookie_(informatique)">Cookies</a> »
					</small>
				</div>
				<div class="element2">	
					<small>	
						« Copyrights 2022 - <strong>Adopte</strong>un<strong>stagiaire</strong>.com - <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">Legal notices</a> »
					</small>
				</div>	
				<div class="element2">
					<div class="element3">
						<a href="https://facebook.com/">
							<img id="fb" src="http://cdn.adopteunstagiaire.com/images/Facebook.svg">
						</a>
					</div>	
					<div class="element3">	
						<a href="https://www.instagram.com/">
							<img id="insta" src="http://cdn.adopteunstagiaire.com/images/Instagram.svg">
						</a>
					</div>	
					<div class="element3">	
						<a href="https://twitter.com/">
							<img id="twitter" src="http://cdn.adopteunstagiaire.com/images/Twitter.svg">
						</a>
					</div>
					<div class="element3">					
						<a href="https://linkedin.com/">
							<img id="linkedin" src="http://cdn.adopteunstagiaire.com/images/Linkedin.png">
						</a>
					</div>		
				</div>
			</div>	
		</div>
	</div>	
</footer>