<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./STYLES/bootstrap.min.css">
	<link rel="stylesheet" href="./STYLES/style.css">
	<title>Document</title>
</head>
<body> 
	<div class="wrapper">
		<div class="form-box login">
			<h2>Login</h2>
			<form action="#">
				<div class="input-box">
					<span class="icon"></span>
					<input type="email" required>
					<label for="email">E-mail</label>
				</div>
				<div class="input-box">
					<span class="icon"></span>
					<input type="password" required>
					<label for="password">Mots de passe</label>
				</div>
				<button class="btn"type="submit"> Valider</button>
				<div class="login_register">
					<p>Vous n'êtes pas inscrit ? <a href="./formulaire.php" class="register-link">Créer un compte</a></p>
				</div>
			</form>
		</div>

 </div>
</body>
<script src="./JS/bundle.min.js"></script>
<script src="./JS/bootstrap.min.js"></script>
<script src="./JS/popper.min.js"></script>
        <script src="./JS/script.js" ></script>
</html>