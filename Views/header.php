<?php
//Block access from file
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}?>

<!-- ----------------------- header ----------------------- -->
<header id="headerNFull">
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
					<a href="http://adopteunstagiaire.com/addCompany" target="_self"><button>Companies</button></a>
				</div>	
				<div class="element1">	
							<a href="http://adopteunstagiaire.com/mobileApp" target="_self"><button>Mobile app</button></a>
				</div>
				<div class="element1">	
					<a href="http://adopteunstagiaire.com/myInternships">
						<img id="image_heart" src="http://cdn.adopteunstagiaire.com/images/Heart_nav.svg" alt="Coeur de la wish list" />
					</a>
				</div>	
				<div class="element1">
					<a href="http://adopteunstagiaire.com/account">
						<img id="image_user" src="http://cdn.adopteunstagiaire.com/images/WhiteUser.png" alt="User" />
					</a>
				</div>
				<div id="mySidebar" class="sidebar">
				  	<p class="SBbig">My Informations</p> 		
				  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">❮</a>
					<a href="http://adopteunstagiaire.com/Account">My Account</a>
				  	<a href="http://adopteunstagiaire.com/myInternships">My Internships</a>
				  	<a href="http://adopteunstagiaire.com/myViews">My Views</a>
					<p class="SBbig">Configuration</p>
				  	<a href="http://adopteunstagiaire.com/addCompany">Add Company</a>
				  	<a href="http://adopteunstagiaire.com/addOffer">Add Offer</a>
				  	<a href="http://adopteunstagiaire.com/register">Add Person</a>
					<a href="http://adopteunstagiaire.com/addDirectory">Add Directory</a>
				  	<a class="SBsmall1" href="javascript:void(0)" class="closebtn" onclick="closeNav()">Minimize the menu</a>
				  	<a class="SBsmall2" href="#">Logout</a>
					</div>

					<div id="open">
					  <button class="openbtn" onclick="openNav()">☰ Open</button>  
					</div>

					<script>
					function openNav() {
					  document.getElementById("mySidebar").style.width = "15.625rem";
					  document.getElementById("open").style.marginRight = "15.625rem";
					}

					function closeNav() {
					  document.getElementById("mySidebar").style.width = "0";
					  document.getElementById("open").style.marginRight= "0";
					}
				</script>			
			</div>
		</div>
	</nav>
</header>