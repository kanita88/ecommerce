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

			<h1>Veuillez vous connecté à votre session.</h1>
			<br>
			<br>
			<form action="" method="post">
			<label for="emailOrName">votre Nom ou Addresse email</label><br>
			<input type="text" name="emailOrName" placeholder="Email or Username" size="35">
			<br>
			<label for="password">Mot de passe:</label><br>
			<input type="password" name="password" placeholder="Votre mot de passe" size="35">
			<br>
			<button type="submit">Envoyez</button>
			</form>
		</div>
		<p>Pas encore de compte ? <a href="<?=URL::base()?>user/register">Inscrivez-vous !</p>
		</section>
		
		<footer>
			
		</footer>
	</body>
</html>