<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>E-commerce LEGO</title>
		<link rel="stylesheet" href="<?=URL::base()?>/assets/css/normalize.css">
		<link rel="stylesheet" href="<?=URL::base()?>/assets/css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="main">
			<header>
				<nav>
					<div class="img">
						<a href="<?=URL::base()?>"><img src="<?=URL::base()?>/assets/img/logo-retina.png" alt="lego"></a>
					</div>
					<ul class="menu">
						<li><a href="<?=URL::base()?>">Accueil</a></li>
						<li><a href="<?=URL::base()?>product/index">Produits</a></li>
						<li><a href="#">Ventes et offres</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
			</header>
			<div class="clearfix">
				<section>
					<div class="img1"><img src="<?=URL::base()?>/assets/img/lego_star_wars-2.png" alt="lego1" width="270" height="270"></div>
					
					<div class="bienv">
					<h1>Bienvenue au monde de LEGO</h1>
					<p>Explore le monde incroyable de LEGO, Il y a très longtemps dans une galaxie lointaine, 
						très lointaine... voici LEGO® Star Wars™. Cette gamme donne vie à tous les vaisseaux et personnages de la saga Star Wars préférés de votre enfant ainsi qu'à de nouveaux qu'il n'a jamais vus auparavant. 
						Ce thème offre de nombreuses possibilités de jeu passionnantes et des occasions d'apprendre et de se développer tout en construisant les véhicules les plus cool de la saga Star Wars. 
						Avec les ensembles LEGO Star Wars emblématiques, les enfants peuvent construire une galaxie d'aventures extraordinaires, en laissant libre cours à leur imagination. 
						Chaque boite contient des suggestions pour lancer le jeu et des heures d'amusement sans fin.</p>
					
					<p>Nos produits sont disponible.. <br>
						<a href="<?=URL::base()?>product/index"><img src="<?=URL::base()?>/assets/img/Legostarwars1-Logo.png" alt="panier" width="640" height="280"></a> </p>
					</div>
				</section>

				<aside>
				<div class="page">
					<div class="aside1">
						<?php if(isset($_SESSION['id'])==false): ?>
						<p><a href="<?=URL::base()?>user/login">Se connecter</a> | <a href="<?=URL::base()?>user/register">s'inscrire</a></p>
						<?php endif ?>

						<?php if(isset($_SESSION['name'])) :?>
						<h2>Bienvenue <strong><?= $_SESSION['name']?></strong></h2>
						<h2><a onclick="return confirm('Etes vous sûre de vouloir vous déconnectez?')" href="<?=URL::base()?>/user/logout">Déconnexion</a></h2>
						<?php endif ?>

					</div>

					<div>
					<h2>Catégorie</h2>	
					<ul class="menu1">
						<li><a href="<?=URL::base()?>product/index">Tout</a></li>
						<li><a href="#">Rebels</a></li>
						<li><a href="#">Microfighters</a></li>
						<li><a href="#">TYC</a></li>
						<li><a href="#">Clone Wars</a></li>
						<li><a href="#">Episodes I-VI</a></li>
						<li><a href="#">Exclusivités</a></li>
						<li><a href="#">L'ancienne République</a></li>
					</ul>

					</div>

				</div>
				</aside>
			</div>
		
			<footer>
				<nav>
					<ul class="menu2">
						<li><a href="<?=URL::base()?>">Livraison</a></li>
						<li><a href="#">Pièces manquantes</a></li>
						<li><a href="#">Mentions légales</a></li>
						<li><a href="#">A propos de nous</a></li>
					</ul>
				</nav>
				<h6> Copyright © Kanita88 2014. All rights reserved.
					<br>
					STAR WARS™ and all characters, names and related indicia are © 2014 Lucasfilm Ltd. & TM. All rights reserved.
				</h6>
			</footer>
		</div>	

	</body>
</html>