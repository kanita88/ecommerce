<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>BLOG</title>
		<link rel="stylesheet" href="<?=URL::base()?>/assets/css/normalize.css">
		<link rel="stylesheet" href="<?=URL::base()?>/assets/css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	</head>
	<body>

		<section>

			<h1><a href="#">Mon Site Ecommerce</a></h1>
			
		<div class="page">

			<?php if(isset($_SESSION['name'])) :?>
			<h1>Bienvenue <strong><?= $_SESSION['name']?></strong></h1>
			<h2><a href="<?=URL::base()?>/user/logout">Déconnexion</a></h2>
			<?php endif ?>

		</div>
			
		
		<footer>
			
		</footer>
	</body>
</html>