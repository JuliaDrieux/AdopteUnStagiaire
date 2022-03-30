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
				<a href="adopteunstagiaire.com">
					<img id="logo" src="http://cdn.adopteunstagiaire.com/images/logo.png" alt="Logo de Adopte un stagiaire" />
				</a>
			</div>	

			<div class="element">
				<div class="element1">
					<a href="adopteunstagiaire.com" target="_self"><button>Home</button></a>
				</div>
				<div class="element1">
					<a href="adopteunstagiaire.com/offers" target="_self"><button>Offers</button></a>
				</div>	
				<div class="element1">	
					<a href="adopteunstagiaire.com/companies" target="_self"><button>Companies</button></a>
				</div>	
				<div class="element1">	
							<a href="adopteunstagiaire.com/mobileApp" target="_self"><button>Mobile app</button></a>
				</div>
				<div class="element1">	
					<a href="adopteunstagiaire.com/myInternships">
						<img id="image_heart" src="http://cdn.adopteunstagiaire.com/images/Heart_nav.svg" alt="Coeur de la wish list" />
					</a>
				</div>	
				<div class="element1">
					<a href="adopteunstagiaire.com/signIn">
						<img id="image_user" src="http://cdn.adopteunstagiaire.com/images/WhiteUser.png" alt="User" />
					</a>
				</div>		
			</div>
		</div>
	</nav>
	<!-- ---------------------------------------------- -->
	<div id="slogan">
		<div class="element">
			<div class="element1">
				<q>
					The hiring site where<br>students take the power!
				</q>
			</div>
			<div class="element1">
				<p>
					Find the internship that best suits your interests and manage all your researche in one place.	
				</p>
			</div>
			<div class="element1">
				<a href="adopteunstagiaire.com/offers" target="_self"><button>Browse available offers</button></a>
			</div>	
		</div>

		<div class="element">
			<div class="element1">
				<img id="image_handshake" src="http://cdn.adopteunstagiaire.com/images/Handshake.svg" alt="Poignée de main" />
			</div>	
			<div class="element1">
				<a href="#pop">
					<img id="image_start_now" src="http://cdn.adopteunstagiaire.com/images/Play_button.svg" alt="Continuer" />
				</a>
			</div>	
			<div class="element1">
				<p>
					Start now!
				</p>
			</div>	
		</div>
	</div>
</header>