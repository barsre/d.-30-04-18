<!doctype html>
<html lang="da">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Foodfein - Madcafé i Århus C og Åbyhøj</title>
<!-- Meta description, max 160 cifre. Skriv på https://www.lettercount.com/ først -->
<meta name="description" content="Foodfein - Madbutik i hjertet af Aarhus med fokus på sund og nærende mad. Lækre specialiteter, mad, kaffe og kage.">
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
</head>

<body>
<?php include 'includes/header.php'?>
<div class="container-fluid">
	<section class="row intro"> <!-- Introtekst -->
		<div class="col-xs-12">
			<h1>Vores passion er din mad</h1>
			<h2>Sund og nærende mad med et minimum af tilsætningsstoffer</h2>
			<div class="intro-btn"><a href="menukort.php">Se menukort</a></div>
		</div>
	</section>
	<section class="row nyheder"> <!-- Wrapper til alle nyhederne -->
		<article class="col-xs-12 col-sm-12 col-lg-4 nyhed">
			<div class="col-xs-12 col-sm-6 col-lg-12"><a href="menukort.php"><img src="images/gloegg.jpg" class="img-responsive" alt="Juletilbud hjemmelavet glögg"></a></div>
			<div class="col-xs-12 col-sm-6 col-lg-12">
			<h2>Hjemmelavet Glögg</h2>
			<p>Vi har produceret en ekstrakt, sødmefyldt med masser af julekrydderier og citrusfrugter.
			<br/><br/>
			Se hvilke retter, du kan få til vores hjemmelavede glögg.</p>
			<div class="laes-mere"><a href="menukort.php">&rarr; Læs mere</a></div>
			</div>
	  	</article>
		<article class="col-xs-12 col-sm-12 col-lg-4 nyhed">
			<div class="col-xs-12 col-sm-6 col-lg-12"><a href="menukort.php#julemenu"><img src="images/julefrokost.jpg" class="img-responsive" alt="Hold julefrokost hos foodfein"></a></div>
			<div class="col-xs-12 col-sm-6 col-lg-12">
			<h2>Julefrokost</h2>
			<p>Står I og skal holde den næste julefrokost, men mangler et sted at være?
			<br/><br/>
			Vi sørger for en lækker julemenu med plads til ca. 35-40 personer. Kontakt os og hør mere.</p>
			<div class="laes-mere"><a href="menukort.php#julemenu">&rarr; Læs mere</a></div>
			</div>
	  	</article>
		<article class="col-xs-12 col-sm-12 col-lg-4 nyhed">
			<div class="col-xs-12 col-sm-6 col-lg-12"><a href="menukort.php#nytaarsmenu"><img src="images/nytaarsmenu.jpg" class="img-responsive" alt="Nytårsmenu fra Foodfein 2017"></a></div>
			<div class="col-xs-12 col-sm-6 col-lg-12">
			<h2>Nytårsmenu</h2>
			<p>Vi har sammensat en lækker traditionel nytårsmenu på 3-4 retter.
			<br/><br/>
			Skynd jer at  bestille nu, da vi kun har et begrænset antal kuverter.</p>
			<div class="laes-mere"><a href="menukort.php#nytaarsmenu">&rarr; Læs mere</a></div>
			</div>
	  	</article>
	</section>
</div>
<?php include 'includes/footer.php'?>
<?php include 'includes/global-scripts.php'?>
</body>
</html>