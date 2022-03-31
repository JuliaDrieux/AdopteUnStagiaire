<?php
//Block access from file
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}?>

<!-- ----------------------- header ----------------------- -->
<header>
	<nav>
		<div id="nav">
			<div class="element">
				<a href="http://adopteunstagiaire.com">
					<img id="logo" src="http://cdn.adopteunstagiaire.com/images/Logo.png" alt="Logo de Adopte un stagiaire" />
				</a>
			</div>	

			<div class="element">
				<div class="element1">
					<a href="http://adopteunstagiaire.com" target="_self"><button>Home</button></a>
				</div>
				<div class="element1">
					<a href="http://adopteunstagiaire.com/offers" target="_self"><button>Offers</button></a>
				</div>	
				<div class="element1">	
					<a href="http://adopteunstagiaire.com/companies" target="_self"><button>Companies</button></a>
				</div>	
				<div class="element1">	
							<a href="http://adopteunstagiaire.com/mobileApp" target="_self"><button>Mobile app</button></a>
				</div>
				<div class="element1">	
					<a href="http://adopteunstagiaire.com/wishlist">
						<img id="image_heart" src="http://cdn.adopteunstagiaire.com/images/Heart_nav.svg" alt="Coeur de la wish list" />
					</a>
				</div>	
				<div class="element1">
					<a href="http://adopteunstagiaire.com/account">
						<img id="image_user" src="http://cdn.adopteunstagiaire.com/images/WhiteUser.png" alt="User" />
					</a>
				</div>		
			</div>
		</div>
	</nav>
</header>