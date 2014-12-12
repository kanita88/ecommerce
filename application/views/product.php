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
						<li><a href="<?=URL::base()?>funzone/">Jeux en ligne</a></li>
						<li><a href="<?=URL::base()?>contact/">Contact</a></li>
					</ul>
				</nav>
			</header>
			<div class="clearfix">
				<section>
					
					<div class="bienv">
					<h1>Les produits en vente</h1>
						<ul class="products">
							<?php  foreach ($products as $product): ?>
							<li>
								<img src="<?=URL::base()?>assets/produits/<?= $product['photo'] ?>" alt="lego1" width="238" height="134">
								<a href="<?=URL::base()?>product/detail/<?= $product['id'] ?>">
								<h4><?= $product['name'] ?></h4>
								<p><?= substr ($product['description'],0,200)."<br>"."Voir plus..."; ?></p>
								<p>Catégories : <?= $product['categorie'] ?></p> 
								</a>
								<p>Prix : <?= $product['price'] ?> &euro;</p>
								
								<form action="<?=URL::base()?>product/addcart/<?= $product['id'] ?>" method = "POST">
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
								<br>
								<button ><img src="<?=URL::base()?>/assets/img/shopping_basket_add_256.png" alt="panier" width="45" height="45"></a>
								</button>
								</form>
							</li>
							
							<?php endforeach; ?>
						</ul>
					</div>
					<!-- pagination -->
					
					<div class="pagination">
						<p><a href="#" class="button prev" onclick="return false;">Back</a></p>
    					<p><a href="#" class="button next blue" onclick="return false;">Next</a></p>
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

					<p><img src="<?=URL::base()?>/assets/img/Blue_laser.png" alt="panier" width="220" height="30"></p>

					<div class="aside2">

					<h2>Mon panier</h2>
				
					<?php if(isset($_SESSION['Cart']) && !empty($_SESSION['Cart'])): ?>

						<?php foreach ($_SESSION['Cart'] as $id_product => $quantity): ?>
							<?php $product = $productManager->getProduct($id_product) ?>
							<p class="p1">Vous avez ajouté le produit:</p>
							<p><?= $product['name'] ?></p>
							<p>Quantité : <?= $quantity ?></p>
							<form action="<?=URL::base()?>product/deleteCart/<?= $product['id'] ?>">
								<button class="sup">Supprimer cet article</button>
							</form>
						
							
						<?php endforeach ?>

						<div class = "recap">
							<a href="<?=URL::base()?>product/viewcart"><button>Récapitulatif de votre panier</button></a>
						</div>
					<?php endif ?>
					
					 
					<p><img src="<?=URL::base()?>/assets/img/Blue_laser.png" alt="panier" width="220" height="30"></p>

					<h2>Catégorie</h2>	
					<ul class="menu1">
						<li><a href="<?=URL::base()?>product/index">Tout</a></li>
						<li><a href="<?=URL::base()?>product/categorie/rebels">Rebels</a></li>
						<li><a href="<?=URL::base()?>product/categorie/microfighters">Microfighters</a></li>
						<li><a href="<?=URL::base()?>product/categorie/tyc">TYC</a></li>
						<li><a href="<?=URL::base()?>product/categorie/clone wars">Clone Wars</a></li>
						<li><a href="<?=URL::base()?>product/categorie/Episodes I-VI">Episodes I-VI</a></li>
						<li><a href="<?=URL::base()?>product/categorie/Exclusivités">Exclusivités</a></li>
						<li><a href="<?=URL::base()?>product/categorie/L'ancienne République">L'ancienne République</a></li>
					</ul>
					<?php if(isset($_SESSION['admin'])==true): ?>
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