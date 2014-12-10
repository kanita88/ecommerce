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
				<section style="width:96%; ">
					
			<div class="bienv">
			<h1>Récapitulatif de votre panier</h1>
			<form action="<?=URL::base()?>product/" method = "POST">
				<table style="width:100%">
				<thead>
					<th><h5>Nom du produit</h5></th>
					<th><h5>Quantité demandée</h5></th>
					<th><h5>Prix à l'unité</h5></th>
					<th><h5>Prix total</h5></th>
					<th><h5>Supprimer un article</h5></th>
				</thead>
				<?php $total=0; ?>
				<?php foreach ($products as $product): ?>
					<tr>
						<td><a href="<?=URL::base()?>product/detail/<?= $product['id'] ?>"><?= $product['name'] ?>
							<p><?= substr ($product['description'],0,50)."<br>"."Plus de détail..."; ?></p>
							</a>
						</td>
						<td><?= $product['quantity'] ?></td>
						<td><?= $product['price'].' €' ?></td>
						<td><?= ($product['price']* $product['quantity']).' €' ?></td>
						<td><form action="<?=URL::base()?>product/deleteCart/<?= $product['id'] ?>">
						<button><img src="<?=URL::base()?>/assets/img/30136.png" alt="corbeille" width="45" height="45"></button>
						</form></td>

					</tr>
					<?php $total+=$product['price']*$product['quantity']; ?>	
							
				<?php endforeach ?>

				<tfoot>
				<tr>
					<th colspan="3">Montant Total HT</th>
					<th> 
						<?= number_format($total/1.20,2).' €' ?>
					</th>
				</tr>
				<tr>
					<th colspan="3">TVA (19.6 %)</th>
					<th> 
						<?= number_format($total/1.20*0.20,2).'€' ?>
					</th>
				</tr>
				<tr>
					<th colspan="3">Montant Total TTC</th>
					<th> 
						<?= number_format($total,2).'€' ?>
					</th>
				</tr>
				<tr>
					<th colspan="3">Mode d'expédition</th>
					<th> 
					
						<select name="quantity" id="quantity">
						<option value="1" selected>Standard: GRATUIT</option>
						<option value="2">Express: 29,00 &euro;</option>
						</select>
		
					</th>
					</tr>
				</tfoot>
				</table>
				<div class="order">
				<p><a href="<?=URL::base()?>checkout/"><img src="<?=URL::base()?>/assets/img/91ib-6sv8ut6ai5bq-p4id5.png" alt="panier" width="220" height="80"></a></p>
				</div>
			</form>
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