<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<form method="post" action="inscription.php">
    <div class="form-group">
        <label for="nom">Nom complet :</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div class="form-group">
        <label for="email">Adresse e-mail :</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="motdepasse">Mot de passe :</label>
        <input type="password" class="form-control" id="motdepasse" name="motdepasse" required>
    </div>
    <div class="form-group">
        <label for="datedenaissance">Date de naissance :</label>
        <input type="date" class="form-control" id="datedenaissance" name="datedenaissance" required>
    </div>
    <div class="form-group">
        <label for="nationalite">Nationalité :</label>
        <input type="text" class="form-control" id="nationalite" name="nationalite" required>
    </div>
    <div class="form-group">
        <label for="paysderesidence">Pays de résidence :</label>
        <input type="text" class="form-control" id="paysderesidence" name="paysderesidence" required>
    </div>
    <div class="form-group">
        <label for="niveaudetudes">Niveau d'études actuel :</label>
        <input type="text" class="form-control" id="niveaudetudes" name="niveaudetudes" required>
    </div>
    <div class="form-group">
        <label for="domainedetudes">Domaine d'études :</label>
        <input type="text" class="form-control" id="domainedetudes" name="domainedetudes" required>
    </div>
    <div class="form-group">
        <label for="intentions">Intention de poursuivre des études en France :</label>
        <input type="radio" id="oui" name="intentions" value="oui" required>
        <label for="oui">Oui</label>
        <input type="radio" id="non" name="intentions" value="non">
        <label for="non">Non</label>
    </div>
    <div class="form-group">
        <label for="financement">Source de financement des études :</label>
        <input type="text" class="form-control" id="financement" name="financement" required>
    </div>
    <div class="form-group">
        <label for="cv">CV / Curriculum Vitae :</label>
        <input type="file" class="form-control" id="cv" name="cv" required>
    </div>
    <div class="form-group">
        <label for="lettre">Lettre de motivation :</label>
        <textarea class="form-control" id="lettre" name="lettre" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Inscription</button>
</form>

</body>
</html>
