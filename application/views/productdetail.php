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
					
					<div class="bienv">
					<h1>Les produits en vente</h1>
						<ul class="productdetail">
							<li>
								<a href="">
								<img src="<?=URL::base()?>/assets/produits/<?= $product['photo'] ?>" alt="LegoStarWars" width="238" height="134">
								<h4><?= $product['name'] ?></h4>
								<p><?= $product['description'] ?></p>
								<p>Catégories : <?= $product['categorie'] ?></p> 
								<p>Prix : <?= $product['price'] ?> &euro;</p>
								</a>
								<form action="#">
								<label for="quantity">Quantité</label>
								<select name="quantity" id="quantity">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								</select>
								</form>
								<br>
								<a href="#"><img src="<?=URL::base()?>/assets/img/shopping_basket_add_256.png" alt="panier" width="45" height="45"></a>
							</li>
						</ul>
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
						<h2><a href="<?=URL::base()?>/user/logout">Déconnexion</a></h2>
						<?php endif ?>

					</div>

					<div class="aside2">
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

					<?php if(isset($_SESSION['id'])==true): ?>
					<p><a href="<?=URL::base()?>product/addproduct">Admin</a></p>
					<?php endif ?>
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