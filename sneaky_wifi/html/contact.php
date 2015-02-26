<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Contact us - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet"  type="text/css" href="assets/css/mon_css.css">
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="recherche.html">Recherche</a></li>
					<li><a href="bon_plans.html">Bon Plans</a></li>
					<li><a href="about.html">L'équipe</a></li>
					<li class="active"><a href="contact.html">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Contact</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contactez nous</h1>
				</header>
				
				<p>
					Vous connaissez un hotspot qui n'est pas sur notre site? Vous constatez que l'adresse qu'on donne est fausse? Vous voulez juste nous dire à quel point notre site et notre idée sont géniaux? Envoyez nous un message!
				</p>
				<br>
					<form method="post" action="contact.php">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Nom" name="Nom" required>
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Email" name="Email" required>
							</div>
							<div class="col-sm-4">
								<select class="form-control" id="question" name="question">
									<option value="1">Ajouter un HotSpot</option>
									<option value="2">Enlever un HotSpot</option>
									<option value="3">Autre</option>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Bliblablu..." class="form-control" rows="9" required></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label class="checkbox"><input type="checkbox"> Recevez les newsletters</label>
							</div>
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Send message" style="background:rgba(218, 63, 63, .8);">
							</div>
						</div>
					</form>
<?php
$mail = htmlspecialchars($_POST['Email']);
$nom = htmlspecialchars($_POST['Nom']);
$text = "Bonjour " . $nom . ",\nMeri de votre mail.\nNous allons traiter votre requete sous 48 heures et si les informations sont correctes nous effectuerons les changements necessaires.\nCordialement,\n\nL'equipe\n";
$from = "mesrat_n@etna-alternance.net";
$header = 'From' . $from;

function send_email($mail, $text, $header)
{
	$text = wordwrap($text, 70);
	if (mail($mail, "Sneaky Wifi", $text, $header, '-f mesrat_n@etna-alternance.net'))
		echo "<h3>Votre message a bien été envoyé, merci de votre participation.</h3>\n";
}

if ($_POST['question'] == 1 || $_POST['question'] == 2)
   	send_email($mail, $text, $header);

?>
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Addresse</h4>
					<address>
						15, rue Maurice GrandCoing </br> 94120 Ivry-sur-Seine
					</address>
					<h4>Phone:</h4>
					<address>
						+33 (0)1 44 08 00 22  
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	<section class="container-full top-space">
		<div id="map"></div>
	</section>

	<footer id="footer">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>	<a href="mailto:#">mesrat_n@etna-alternance.net</a><br>
								<a href="mailto:#">lin_d@etna-alternance.net<br>
								<a href="mailto:#">lim_c@etna-alternance.net</a><br>
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Projet</h3>
						<div class="widget-body">
							<img src="assets/images/logo_CodeCamp1.png" id="logo_codecamp">
							<img src="assets/images/etna.png" id="logo_etna">
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="recherche.html">Recherche</a> |
								<a href="about.html">L'équipe</a> |
								<a href="contact.html">Contact</a> 
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; Sneaky Wifi 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="../js/contact.js"></script>
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
</body>
</html>