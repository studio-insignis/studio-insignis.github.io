<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Contact | Interior Design</title>
			<link rel="stylesheet" href="css/style.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<meta name="language" content="NL">
			<meta name="description" content="Interieur design op z'n best">
			<meta name="keywords" content="interieur, design, interieurdesign">
			<meta name="web_author" content="Fanny Schouten">
			<meta name="author" content="Fanny Schouten">
			<script>
				$(document).ready(function(){
					$('#contact-form').keyup(function(){
						if($('#naam').val() !='' && $('#email').val() !='' && $('#bericht').val() !='') {
							$('#verzend').removeAttr('disabled');
						}
					});
				});
			</script>
		</head>
		<body>
			<header class="bg-light">
				<div class="container container-fluid">
					<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
						<a class="navbar-brand" href="index.html"><img src="images/logo.png" style="width:300px;"></a>
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="index.html">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="tabel.html">Tabel</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="afbeeldingen.html">Afbeeldingen</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="links.html">Links</a>
								</li>
								<li class="nav-item active">
									<a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link fa fa-facebook" href="#" style="padding:10px"></a><a class="nav-link fa fa-twitter" href="#" style="padding:10px"></a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>			
			<main class="bg-secondary">
				<div id="formulier">
					<h1 class="mt-4 mb-4">Contactformulier</h1>
					<?php
						if ($_SERVER['REQUEST_METHOD'] == 'POST') {
							echo '<div>';
								echo '<p>Dit zijn je ingevulde gegevens:</p>';
								echo '<h2>Naam: '. $_POST["name"] . '</h2>';
								echo '<h3>E-mailadres: ' . $_POST["email"] . '</h3>';
								if ($_POST["gender"] == 'male') {
									echo '<p>Geslacht: <a class="fa fa-male"></a></p>';
								} elseif ($_POST["gender"] == 'female') {
									echo '<p>Geslacht: <a class="fa fa-female"></a></p>';
								};
								echo '<p>Bericht: ' . $_POST["bericht"] . '</p>';
							echo '</div>';
						} else {
								echo '<p>Vul uw gegevens in</p>';
						};
					?>
					<form id="contact-form" name="contact-form" action="#" method="POST">
						<div class="form-group">
							<label for="naam">Naam</label>
							<input type="text" name="name" class="form-control" id="naam" required>
						</div>
						<div class="form-group">
							<label for="email">Emailadres</label>
							<input type="email" name="email" class="form-control" id="email" required>
						</div>
						<fieldset class="form-group">
							<label for="geslacht">Geslacht</label><br />
							<input type="radio" name="gender" value="male" checked>Man<br>
							<input type="radio" name="gender" value="female">Vrouw<br>
						 </fieldset>
						 <div class="form-group">
							<label for="bericht">Uw bericht:</label>
							<textarea class="form-control" name="bericht" id="bericht" rows="3" required></textarea>
						 </div>
						<button id="verzend" type="submit" class="btn btn-primary" disabled="true">Verzenden</button>
					</form>
				</div>
			</main>
			<footer class="bg-light">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-sm-12 py-3">
							<a href="#">Algemene voorwaarden</a><br />
							<a href="overons.html">Over ons</a><br />
							<a href="sitemap.html">Sitemap</a>
						</div>
						<div class="col-xl-4 col-sm-12 py-3">
							<p>
								Interior Design<br />
								Hoofdstraat 123<br />
								1234 AB Hoofdstad
							</p>
						</div>
						<div class="col-xl-4 col-sm-12 py-3">
							<p>
								<a class="fa fa-phone" style="padding-right:5px"></a>06-12345678<br />
								<a class="fa fa-envelope" style="padding-right:5px"></a>info@interiordesign.nl
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>