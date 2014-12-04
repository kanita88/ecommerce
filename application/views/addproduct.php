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
				<div class="add">
					<h1>Ajouter un article</h1>
					<form action="">
					<label for="name">Nom de l'article:</label>
					<br>
					<input name="name" type="text" id="name" value="">	
					<br>
					<br>
					<label for="inputContent">Description:</label>
					<br>
					<textarea name="description" rows="10" cols="70" id="inputContent"></textarea>
					<br>
					<label for="inputFile">Photo du produits:</label>
					<br>
					<input name="files[]" multiple type="file" id="inputFile">
					<br>
					<br>
					<label for="categorie">Catégories:</label>
								<select name="categorie" id="categorie">
								<option value="re" selected>Rebels</option>
								<option value="mi">Microfighters</option>
								<option value="ty">TYC</option>
								<option value="cl">Clone Wars</option>
								<option value="ep">Episodes I-VI</option>
								<option value="ex">Exclusivités</option>
								<option value="la">L'ancienne République</option>
								</select>
					<br>
					<br>
					<label for="price">Prix:</label>
					<br>
					<input name="price" type="text" id="price" placeholder="prix en euros">
					<br>
					<br>
					<button type="submit" class="btn btn-default">Submit</button>

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