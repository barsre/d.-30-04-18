<!doctype html>
<html lang="da">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Foodfein - Café i Århus C og Åbyhøj</title>
<meta name="description" content="Foodfein har placering i både Århus C på Sønder Allé 6 og Åbyhøj på Silkeborgvej 236a. Vi har åbent alle dage.">
<!-- Favicon -->
<?php include 'includes/favicon.php'?>
<!-- Google font -->
<?php include 'includes/fonts.php'?>
<!-- Bootstrap stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- Vores eget stylesheet til sidst, så vi kan overskrive ting fra Bootstrap etc. -->
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="js/googlemaps.js"></script>
</head>

<body>
<?php include 'includes/header.php'?>
<div class="container-fluid kontakt-bg">
		<section class="row kontakt">
			<div class="col-xs-12"><h1>Kontakt</h1></div>
			<div class="col-xs-12 kontakt-beskrivelse"><p>Brænder du inde med spørgsmål, ønsker du bestilling til din virksomhed eller større arrangementer?<br> 
			Så kontakt os gerne!</p></div>
			<div class="col-xs-12 col-md-4 kontaktformular">
				<form action="kontakt-complete.php">
					<div class="form-group">
						<label for="name">Navn</label>
						<input type="text" class="form-control" id="name" placeholder="Dit fulde navn" required>
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" id="email" placeholder="Din e-mail" required>
					</div>
					<div class="form-group">
						<label for="besked">Besked:</label>
						<textarea class="form-control" rows="5" id="besked" placeholder="Indtast besked" required></textarea>
					</div>
					<button type="submit" class="btn btn-default pull-right">Send</button>
				</form>
			</div>
			<address class="col-xs-12 col-sm-6 col-md-4 kontakt-info">
				<strong>Sønder Allé 6</strong>
				<p>8000 Aarhus C<br>
				Tlf. 72 44 44 23<br>
				<a href="mailto:info@foodfein.dk" target="_top">info@foodfein.dk</a></p>
				<strong>Silkeborgvej 236a</strong>
				<p>8230 Åbyhøj<br>
				Tlf. 22 66 72 44<br>
				<a href="mailto:info@foodfein.dk" target="_top">info@foodfein.dk</a></p>
			</address>
			<address class="col-xs-12 col-sm-6 col-md-4 kontakt-info">
				<strong>Erhverv</strong>
				<p>Allan Enevoldsen<br>
				Tlf. 21 45 66 13<br>
				<a href="mailto:allan@foodfein.dk" target="_top">allan@foodfein.dk</a></p>
				<strong>Regnskab</strong>
				<p>Allan Enevoldsen<br>
				Tlf. 21 45 66 13<br>
				<a href="mailto:regnskab@foodfein.dk" target="_top">regnskab@foodfein.dk</a></p>
			</address>
			<div class="col-xs-12 gmaps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2222.2421641543915!2d10.2029200326705!3d56.15291749874491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c3f9218a1b703%3A0x1a4a9ac35e07f7e7!2sfoodfein!5e0!3m2!1sen!2sdk!4v1513536644339" width="100%" height="700" frameborder="0"  allowfullscreen></iframe></div>
		</section>
</div>
<?php include 'includes/footer.php'?>
<?php include 'includes/global-scripts.php'?>
</body>
</html>