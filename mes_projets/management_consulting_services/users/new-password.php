<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Management Consulting Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_pwd1.css">

<style type="text/css">

#passwordInput{
/*width: 100%;*/
display: flex;
position: relative;
}
#passwordInput input[type="password"], #passwordInput input[type="text"]{
width: 100%;
padding: 10px;
border: 1px solid lightgrey;
font-size: 15px;

}

#passwordInput #showHide{
font-size: 12px;
font-weight: 600;
position: absolute;
color:red;
right: 10px;
top: 50%;
transform: translateY(-50%);
cursor: pointer;
user-select: none;
}
#passwordStrength{
width: 30%;
height: 5px;
margin: 5px 0;
display: none;
}
#passwordStrength span{
position: relative;
height: 100%;
width: 100%;
background: lightgrey;
border-radius: 5px;
}
#passwordStrength span:nth-child(2){
margin: 0 3px;
}
#passwordStrength span.active:before{
position: absolute;
content: '';
top: 0;
left: 0;
height: 100%;
width: 100%;
border-radius: 5px;
}
#passwordStrength span#poor:before{
background-color: #ff4757;
}
#passwordStrength span#weak:before{
background-color: orange;
}
#passwordStrength span#strong:before{
background-color: #23ad5c;
}
#passwordInfo{
font-size: 15px;
}
#passwordInfo #poor{
color: red;
}
#passwordInfo #weak{
color: orange;
}
#passwordInfo #strong{
color: green;
}
#showHide{
margin-top:-3px;
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Nouveau mot de passe</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div id="passwordStrength"><span id="poor"></span><span id="weak"></span><span id="strong"></span></div><div id="passwordInfo"></div>
                    <div class="form-group" id="passwordInput">
                        <input class="form-control" type="password" name="password" placeholder="Créer votre mot de passe" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" required>
                        <span id="showHide">Voir</span>
                    </div>
                    <div id="message">
                        <p id="length" class="invalid">Minimum <b>10 </b>caractères</p>
                         <p id="capital" class="invalid">Au moins <b>une lettre</b> majuscule</p>
                         <p id="letter" class="invalid">Au moins <b>une lettre</b> minuscule</p>
                         <p id="number" class="invalid">Au moins <b>un </b>chiffre</p>
                        </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirmer votre mot de passe" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Changer">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="javascript1.js"></script>   
</body>
</html>