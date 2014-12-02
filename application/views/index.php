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
						<img src="<?=URL::base()?>/assets/img/logo-retina.png" alt="logo">
					</div>
					<ul class="menu">
						<li><a href="<?=URL::base()?>">Accueil</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Ventes et offres</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
			</header>

			<section>
				<h1>TEST</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod placeat hic illum repellendus debitis delectus eum cum. Sint eos excepturi autem laboriosam, nam fugit quae possimus, in, ut numquam dicta.</p>
				
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

				<div>
				<h2>Catégorie</h2>	
				<ul class="menu1">
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
				
			</footer>
	</body>
</html>