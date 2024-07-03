<!DOCTYPE html>
<html>
<head>
	<title>Management Consulting Services</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Formulaire de demande de visa étudiant</h2>
		<form method="post" action="insert.php">
        <div class="form-group">
				<label for="id_campus-france">Identifiant campus france </label>
				<input type="text" class="form-control" id="id_campus-france" placeholder="Entrez votre identifiant campus france" name="nom" required>
			</div>
			<div class="form-group">
				<label for="nom">Nom(s) et Prénom(s) </label>
				<input type="text" class="form-control" id="nom" placeholder="Entrez votre nom et prénom" name="nom" required>
			</div>
			<div class="form-group">
				<label for="numero_passeport">Numéro de passeport </label>
				<input type="text" class="form-control" id="numero_passeport" placeholder="Entrez votre numéro de passeport" name="numero_passeport" required>
			</div>
			<div class="form-group">
				<label for="date_obtention">Date d'obtention du passeport </label>
				<input type="date" class="form-control" id="date_obtention" name="date_obtention" required>
			</div>
            <div class="form-group">
				<label for="date_fin">Date de fin du passeport</label>
				<input type="date" class="form-control" id="date_fin" name="date_fin" required>
			</div>
			<button type="submit" class="btn btn-primary">Envoyer</button>
		</form>
	</div>
</body>
</html>
