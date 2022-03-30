<?php
//Block access from file
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}?>

<!DOCTYPE html>
<html>
	<head>
		<title>AdopteUnStagiaire</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="A hiring site where the students take the power!" />
		<meta name="author1" content="ISSELIN Lucas" />
		<meta name="author2" content="DRIEUX Julia" />
		<meta name="author3" content="WILT Quentin" />
		<meta name="author4" content="HARNIST Guillaume" />
		<meta name="copyright" content="© CC BY-NC-SA 4.0" />

		<link rel="stylesheet" href="http://cdn.adopteunstagiaire.com/style.css">
		<link rel="manifest" href="manifest.json">
	</head>


	<!-- ----------------------------- Body ----------------------------- -->
	<body>

	<!-- ----------------------- header ----------------------- -->
		<header>
			<nav>
				<div id="nav">
					<div class="element">
						<a href="http://adopteunstagiaire.com">
							<img id="logo" src="http://cdn.adopteunstagiaire.com/images/logo.png" alt="Logo de Adopte un stagiaire" />
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
							<a href="adopteunstagiaire.com/myInternships">
								<img id="image_heart" src="http://cdn.adopteunstagiaire.com/images/Heart_nav.svg" width="40" alt="Coeur de la wish list" />
							</a>
						</div>	
						<div class="element1">
							<a href="http://adopteunstagiaire.com/account">
								<img id="image_user" src="http://cdn.adopteunstagiaire.com/images/WhiteUser.png" width="50" alt="User" />
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
					<img id="image_handshake" src="http://cdn.adopteunstagiaire.com/images/Handshake.svg" width="300" alt="Poignée de main" />
					<div class="element1">
						<a href="#pop">
							<img id="image_start_now" src="http://cdn.adopteunstagiaire.com/images/Play_button.svg" width="60" alt="Continuer" />
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

	<!-- ----------------------- main ----------------------- -->
		<main>
			<br>
			 <div class="UP_and_DOWN">
			   	<a href="#bottom"><button><strong>DOWN</strong></button></a>
			 </div><br>

			<div id="pop">
				<h2>Popular Categories</h2>	
				<p>Find the internship that best suits your interests by selecting among various mission categories.</p>
				<h3>Web Development</h3>
				<p>Create or optimize a website using your dev skills in HTML, CSS & PHP.</p>
				<h3>Data</h3>
				<p>Optmize & Improve your client's database to ease their daily use.</p>
				<h3>Cybersecurity</h3>
				<p>Protect your company's image & integrity by securing their systems.</p>
			</div>

			<div>
				<h2>Popular Offers</h2>	
				<p>Browse the offers that gather the most applications on the catalog.</p>
			</div><br>

			<div class="UP_and_DOWN">
		    	<a href="#top"><button><strong>UP</strong></button></a>
			</div><br>
		</main>

	</body>

	<!-- ----------------------- footer ----------------------- -->
	<?php include('footer.php');?> 

</html>