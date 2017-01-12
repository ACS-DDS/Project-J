<style type="text/css">
	
	a, a:hover {
	text-decoration: none;
	color:white;
	font-size: 18px;
}


ul, li{	
	list-style-type: none;
}

nav > ul  {	
	display: inline-block;
}

nav > ul > li > ul{
	position: absolute;
	padding-left: 0;
}
nav > ul > li > ul > li > ul {

	padding-left: 0;
}


#sous_titre, #sub {
	display: none;
}

nav > ul > li:hover #sous_titre {
	display: block;
}

nav > ul > li > ul > li:hover #sub {
	display: block;
}






</style>

<nav>
	<ul>
		<li id="title"><a href="http://corentinp.dijon.codeur.online/Project_J/connexion/index.php">Accueil</a></li>
	</ul>
	<ul>
		<li id="titre"><a href="http://corentinp.dijon.codeur.online/Project_J/catalogue/catalogue.php">Bois</a>
			<ul>
				<li id="sous_titre"><a href="http://corentinp.dijon.codeur.online/Project_J/catalogue/planche.php">Planches</a></li>
			</ul>
		</li>
	</ul>
</nav>