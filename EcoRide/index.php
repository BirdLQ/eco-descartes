<?php
	require 'bddm-inc.php';
	session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>EcoRide</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<meta name="google-signin-scope" content="profile email">
    	<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    	<script src="https://apis.google.com/js/platform.js" async defer></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<div class="content">
							<div class="inner">
								<h1>Eco-Ride</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut faucibus turpis. Aenean sit amet dolor <br/>
								enean sit amet dolor suscipit massa sagittis vulputate ultrices eu enim. Donec ut convallis risus.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#contact">s'inscrire</a></li>
								<li><a href="#work">s'indentifier</a></li>
								<!--<li><a href="#about">About</a></li>-->
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>

						<div>
							<ul class="actions">
								<li><a href="#about" class="button primary">En savoir plus</a></li>
							</ul>
						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<!-- Work -->
							<article id="work">
								<h2 class="major">connexion</h2>
								<form method="post" action="#">
									<!--
									<ul class="icons">
										<li><a href="#" class="icon brands fa-google"><span class="label">Twitter</span></a></li>
									</ul>
								-->
									<div class="fields">
										<div class="field">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" value="" placeholder="nom.prenom@lycee-descartes.ma"/>
										</div>
										<div class="field">
											<label for="password">mot de passe</label>
											<input type="password" name="email" id="email" value="" placeholder="mot de passe"/>
										</div>
										<div class="field half">
											<input type="checkbox" id="copy" name="copy">
											<label for="copy">se souvenir de moi</label>
										</div>
									</div>
									<ul class="actions">
										<li><a href="#" class="button primary">suivant</a></li>
									</ul>
								</form>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">inscription</h2>
								<form action="signup.php" method="POST">
									<div class="fields">
										<div class="field">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" value="" placeholder="nom.prenom@lycee-descartes.ma"/>
										</div>
										<div class="field">
											<label for="password">mot de passe</label>
											<input type="password" name="mdp" id="mdp" value="" placeholder="mot de passe"/>
										</div>
									</div>
									<ul class="actions">
										<li><button type="submit" name="submit">s'inscrire</button></li>
									</ul>
								</form>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
								<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum dolor sit amet.</p>
							</article>

						<!-- About -->
							<article id="intro">
								<h2 class="major">informations</h2>
								<form method="GET">
									<div class="field">
										<label for="ville">ville</label>
										<select name="ville" id="ville">
											<?php
												if (isset($_GET['ville'])) {
													$v = $_GET['ville'];
													$_SESSION['ville'] = $v;
													echo "<option value=$v>$v</option>";
												} else {
													echo "<option value=''>-</option>
													<option value='Rabat'>Rabat</option>
													<option value='Témara'>Témara</option>
													<option value='Salé'>Salé</option>";
												};
											 ?>
										</select>
										<input type="submit" value="définir"/>
									</div>
								</form>
								</br>
								<form action="fill-about.php" method="GET">
									<div class="field">
										<label for="quartier">quartier</label>
										<select name="quartier" id="quartier">
											<?php
												require_once 'select.php';
											?>
										</select>
										<input type="submit" value="terminer"/>
									</div>
								</form>
								</br>
								<ul class="actions">
									<li><a href="#" class="button primary">Continuer</a></li>
								</ul>
							</article>
		</div>
				<!-- Footer -->
					<footer id="footer">
						<!--<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
							faudra les credite-->
						<p class="copyright">&copy; Untitled. Design: <a href="https://www.lycee-descartes.ac.ma">Descartes</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
