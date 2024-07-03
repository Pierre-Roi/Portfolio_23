<!DOCTYPE html>
<html>
<head>
	<title>Inscription à l'école</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Inscription à l'école</h1>
		<form method="post" action="validation_ecole.php">
			<div class="form-group">
				<label for="nom">Nom(s) et Prénom(s)</label>
				<input type="text" class="form-control" id="nom" name="nom" required>
			</div>
			<div class="form-group">
				<label for="date_naissance">Date de naissance</label>
				<input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
			</div>
            <div class="form-group">
				<label for="pays_naissance">Pays/ville de naissance</label>
				<input type="text" class="form-control" id="pays_naissance" name="pays_naissance" required>
			</div>
            <div class="form-group">
				<label for="pays_residence">Pays/ville de residence</label>
				<input type="text" class="form-control" id="pays_residence" name="pays_residence" required>
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
            <div class="form-group">
				<label for="telephone">Téléphone</label>
				<input type="tel" class="form-control" id="telephone" name="telephone" required>
			</div>
			<div class="form-group">
				<label for="ecole_choisie">Ecole choisie</label>
				<select class="form-control" id="ecole_choisie" name="ecole_choisie" required>
					<option value="">Sélectionner une ecole</option>
					<option value="imcp">IMCP</option>
					<option value="essni">ESSNI</option>
					<option value="iners">INERS</option>
				</select>
			</div>
            <div class="form-group">
				<label for="formation_choisie">Formation choisie</label>
				<select class="form-control" id="formation_choisie" name="formation_choisie" required>
					<option value="">Sélectionner une formation</option>
					<option value="sio">Sio</option>
					<option value="comptabilite">Comptabilité</option>
					<option value="digitalisation">Digitalisation</option>
				</select>
			</div>
            <div class="form-group">
				<label for="niveau_etude">Niveau d'étude</label>
				<select class="form-control" id="niveau_etude" name="niveau_etude" required>
					<option value="">Sélectionner un niveau d'étude</option>
					<option value="premiere_annee">1ère année</option>
					<option value="deuxieme_annee">2ème année</option>
					<option value="troisieme_annee">3ème année</option>
                    <option value="master_1">1ère année de master</option>
					<option value="master_2">2ème année de master</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">S'inscrire</button>
		</form>
	</div>
</body>
</html>

