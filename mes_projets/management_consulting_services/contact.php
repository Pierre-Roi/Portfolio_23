<?php
//Base de donnée
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$connexion = mysqli_connect("localhost", "root", "", "mcs") or die("Erreur de connexion: " . mysqli_error($connexion));
	$result = mysqli_query($connexion, "INSERT INTO contact (name, email, subject, message) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $message. "')");
	if($result){
		$db_msg = "Vos informations de contact sont enregistrées avec succés.";
		$type_db_msg = "success";
	}else{
		$db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
		$type_db_msg = "error";
	}
	
}
//l'envoie du mail
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$toEmail = "n.roi.s.p@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $message, $mailHeaders)) {
	    $mail_msg = "Vos informations de contact ont été reçues avec succés.";
		$type_mail_msg = "success";
	}else{
		$mail_msg = "Erreur lors de l'envoi de l'e-mail.";
		$type_mail_msg = "error";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Management Consulting Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>

<style>
h3{
	text-align:center;
	font-size:20px;
}
span{
	color:red
}
.successMessage{
    background-color: #7acc7d;
    border: #2b5a2d 1px solid;
    padding: 5px 9px;
    color: #262b26;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.9em;
}
.errorMessage{
    background-color: #e64141;
    border: #da1414 1px solid;
    padding: 5px 10px;
    color: #fdf7f7;
    border-radius: 4px;
}
.info{
    font-size: 0.9em;
    color: #d67262;
    letter-spacing: 2px;
    padding-left: 5px;
}
</style>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<ul class="top_bar_contact_list">
									<li><div class="question">Avez-vous des questions ?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>0033 6 18 83 68 77</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>infos.mcs@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button" style="width:250px;"><a href="users/signup-user.php">Inscrivez-vous ou connectez-vous</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
							<a href="#">
									<div class="logo_text"><h4>Management<span> Consulting Services</span></h4></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
							<ul class="main_nav">
									<li><a href="ecoles.php"><h5>Ecoles/Universités</h5></a></li>
									<li><a href="prestations.php"><h5>Nos prestations</h5></a></li>
									<li><a href="organise.php"><h5>S'organiser</h5></a></li>
									<li><a href="arrive_france.php"><h5>Une fois en France</h5></a></li>
									<li><a href="plus_mcs.php"><h5>Les + de mcs</h5></a></li>
									<!--<li><a href="contact.php"><h5>Contact</h5></a></li>-->
								</ul>

								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<!--<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>-->
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Rechercher dans Management Consulting Services" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>		
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<!--<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>-->
		<nav class="menu_nav">
		<ul class="main_nav">
									<li class="active"><a href="ecoles.php"><h5>Ecoles/Universités</h5></a></li>
									<li><a href="prestations.php"><h5>Nos prestations</h5></a></li>
									<li><a href="organise.php"><h5>S'organiser</h5></a></li>
									<li><a href="arrive_france.php"><h5>Une fois en France</h5></a></li>
									<li><a href="plus_mcs.php"><h4>Les + de mcs</h4></a></li>
									<!--<li><a href="contact.php"><h5>Contact</h5></a></li>-->
								</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Accueil</a></li>
								<li>Contact</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">
		
		<!-- Contact Map -->

		<div class="contact_map">

			<!-- Google Map -->
			
			<div class="map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<div id="map"></div>
					</div>
				</div>
			</div>

		</div>

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">Contacter-nous</div>
							<form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post" class="comment_form">
							<div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
            </div>
								<div>
									<label for="name" class="form_title">Nom(s) et Prénom(s)</label>
									  <input type="text" id="name" name="name" class="comment_input" placeholder="Entrer votre nom et prénom"/>
								</div>
								<div>
									<label for="email" class="form_title">Adresse e-mail</label>
 									 <input type="email" id="email" name="email" class="comment_input" placeholder="Entrer votre adresse mail">
								</div>

								<div>
									 <label for="subject" class="form_title">Sujet</label>
									   <input type="text" id="subject" name="subject" class="comment_input" placeholder="Demande de renseignement"/>
								</div>

								<div>
									<label for="message" class="form_title">Message</label>
									  <textarea id="message" name="message" class="comment_input comment_textarea" placeholder="Saisissez votre message..."></textarea>
								</div>
								<div>
									<input type="submit" name="send" value="Envoyer" class="comment_button trans_200"/>
								</div>
							</form>

						</div>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Nos informations de contact</div>
							<div class="contact_info_text">
								<p>Nos services sont à votre écoute du Lundi au Vendredi (24h/24h) 7jours / 7jours </p>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Contact direct</div>
								<ul class="location_list">
									<li>+33 6 18 83 68 77</li>
									<li>infos.mcs@gmail.com</li>
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Siège</div>
								<ul class="location_list">
									<li>Paris 10</li>
									<li>Ile de France</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">En partenariat avec Campus France</div>
							<div class="newsletter_subtitle">Un établissement public chargé de la promotion de l’enseignement <br> supérieur français à l’étranger et de l’accueil des étudiants <br> et des chercheurs étrangers en France.</div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" placeholder="Entrer votre E-mail" required="required">
								<button type="submit" class="newsletter_button">S'abonner</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	
	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">M<span>CS</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Nous rejoindre pour partager avec nous nos divers activités sur les réseaux sociaux</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
				
								<div class="footer_section footer_contact">
									<div class="footer_title">Nos Coordonnées</div>
									<div class="footer_contact_info">
										<ul>
											<li>E-mail : Infos.mcs@gmail.com</li>
											<li>Téléphone :  0033 6 18 83 77</li>
											<li>Siège : Paris 10e (Ile de France)</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Raccourci</div>
									<div class="footer_links_container">
										<ul>
										<li><a href="index.php">Accueil </a></li>
											<li><a href="prestations.php">Prestations </a></li>
											<li><a href="plus_mcs.php">Les + de mcs</a></li>
											<li><a href="contact.php">Contact</a></li>
											<li><a href="ecoles.php">Ecoles/Universités</a></li>
											<li><a href="organise.php">S'organiser</a></li>
											<li><a href="arrive_france.php">Une fois en France</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Plateformes</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
										<div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
									</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"> Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <a href="confidentialite.php">Politique de confidentialités</a> <i class="fa fa-legale-o" aria-hidden="true"></i> | <a href="">Gestion des cookies</a> </div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Mentions légales</a></li>
								<li><a href="#">Conditions générales d'utilisation</a></li>
								<li><a href="#">Accessibilité des services en ligne</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>
</body>
</html>