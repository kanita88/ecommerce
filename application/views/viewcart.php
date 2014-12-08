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
				<section style="width:96%; ">
					
					<div class="bienv">
					<h1>Récapitulatif de votre panier</h1>
			<table style="width:100%">
			<thead>
				<th><h5>Nom du produit</h5></th>
				<th><h5>Quantiter commander </h5></th>
				<th><h5>Prix unitaire</h5></th>
				<th><h5>Prix Total</h5></th>
			</thead>
			<?php foreach ($products as $product): ?>
				<tr>
					<td><?= $product['name'] ?></td>
					<td><?= $product['quantity'] ?></td>
					<td><?= $product['price'] ?></td>
					<td><?= $product['price']*$product['quantity'] ?></td>

				</tr>
					
						
			<?php endforeach ?>

			<tfoot>
			<tr>
				<th colspan="3">Montant Total HT</th>
				<th> 
					
				</th>
			</tr>
			<tr>
				<th colspan="3">TVA (19.6 %)</th>
				<th> 
					
				</th>
			</tr>
			<tr>
				<th colspan="3">Montant Total TTC</th>
				<th> 
					
				</th>
			</tr>
		</tfoot>
		</table>

			</div>
			</section>
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