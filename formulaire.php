<?php

//require "../C-PEDAGOC/FUNCTION/function.php";

?>

<!DOCTYPE html>
<html lang="fr" dt>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./STYLES/main.css">
	<link rel="stylesheet" href="./STYLES/bootstrap.min.css">
	<title>Formulaire</title>
</head>
<body>
	<div id="main-content">	
	
	
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="title-p">Formulaire d'inscription</h3>
					</div>
					<div class="panel-corp">
						
					<form  action="../C-PEDAGOC/BD/Addcand.php" data-parsley-validate method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nom_candiat">Nom<span class="text-danger">*</span></label>
									<input type="text" name="nom_candiat" id="nom_candiat" class="form-control" placeholder="Konan" value="" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="prenom_candidat">Prenom<span class="text-danger">*</span></label>
									<input type="text" name="prenom_candidat" id="prenom_candidat" class="form-control" placeholder="Jean" value="" required="required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-group">
									<label for="Date_Naissance_candidat">Date de naissance<span class="text-danger">*</span></label>
									<input type="date" name="Date_Naissance_candidat" id="Date_Naissance_candidat" class="form-control" value="" required="required">
								</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-group">
										<label for="lieu_naissance">lieu de naissance<span class="text-danger">*</span></label>
										<input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control" value="" required="required">
									</div>
								</div>
							</div>							
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="sexe_candidat">Sexe<span class="text-danger">*</span></label>
									<select name="sexe_candidat" id="sexe_candidat" class="form-control" required="required">
										<option value="H" >Homme</option>
										<option value="F">Femme</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
							    <div class="form-group">
									<div class="form-group">
										<label for="pays">Pays</label>
										<input type="cont" name="pays" value="" id="pays" placeholder="Côte d'ivoire" class="form-control" >
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-group">
										<label for="adresse_candidat">Adresse</label>
										<input type="text" name="adresse_candidat" placeholder="Abidjan" value="" id="adresse_candidat" class="form-control">
								    </div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
							    <div class="form-group">
									<div class="form-group">
										<label for="contact_candidat">Contact</label>
										<input type="text" name="contact_candidat" value="" id="contact_candidat" class="form-control">
									</div>
							    </div>
						    </div>
                            <div class="col-md-6">
								<div class="form-group">
									<div class="form-group">
										<label for="email_candidat">E-mail</label>
										<input type="text" name="email_candidat" placeholder="abcd@gmail.com" value="" id="email_candidat" class="form-control">
								    </div>
								</div>
							</div>
						</div>
						<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
									<label for="formation_candidat">Choix de formation<span class="text-danger">*</span></label>
									<select name="formation_candidat" id="formation_candidat" class="form-control" required="required">
										<option value="master1" >Master 1</option>
										<option value="master2">Master 2</option>
									</select>
								</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
									<label for="type_formation_candidat">Type de formations<span class="text-danger">*</span></label>
									<select name="type_formation_candidat" id="type_formation_candidat" class="form-control" required="required">
										<option value="foad" >FOAD</option>
										<option value="presentiel">PRESENTIEL</option>
									</select>
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="specialite_candidat">Spécialité : </label> 
                            <select class="form-control" id="specialite_candidat" name="specialite_candidat" required>
                                <option value="ATIN">Analyse et traitement d’images numériques</option>
                                <option value="AGTE">Aménagement, gestion des terres et des écosystèmes</option>
                                <option value="CEDD">Climat, environnement et développement durable</option>
                                <option value="EASA">Eau, agriculture et sécurité alimentaire</option>
                                <option value="OLIT">Océan et Littoral</option>
                            </select>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
									<label for="diplome_candidat">Diplôme :</label>
                                    <input type="file" class="form-control" id="diplome_candidat" name="diplome_candidat" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
									<label for="photo_candidat">Photo de profil :</label>
                                    <input type="file" class="form-control" id="photo_candidat" name="photo_candidat" required accept="image/*">
							</div>
						</div>						
					</div>
					<hr>
					<div class="col-md-12">
						<input type="submit" class="btn btn-primary" value="Valider" name="valider">
				    </div>
					<p>Vous avez un compte ? <a href="./index.php" class="register-link">Connectez-vous !!</a></p>
				</form>
		
	</div>
</body>
</html>
