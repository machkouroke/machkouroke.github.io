<!DOCTYPE HTML>

<html>
	<?php include("header.php") ?>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper" >
					<div id="header" >

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">Tract Occasion</a></h1>
								<p style="color: white; font-weight: bold">Découvrez nous</p>
							</div>

						<!-- Nav -->
							<nav id="nav" style="color: green;">
								<ul>
									<li id="current"><a href="index.php">Accueil</a></li>
									<li><a href="services.php">Nos services</a></li>
									<li><a href="produits.php">Nos produits</a></li>
									<li><a href="presentation.php">Qui sommes nous</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">Presentation</div>
					<section id="intro" class="container">
						<p class="style1">Bienvenue chez Tract Occasion</p>
						<p class="style2">
				        Vous voulez effectuez une location ou une vente de tracteur? Vous etes au bon endroit
						</p>
						
					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Nous vous accueillons sur notre site Internet </div>
					<div id="main" class="container">

						<!-- Image -->
							<a href="#" class="image featured">
								<img src="images/pic01.jpg" alt="" />
							</a>

						<!-- Features -->
							<section id="features">
								
								<div style="color:dimgrey">
									<p>Sur Tract Occasion nous avons comme principale mission la vente et l'achat de tracteur et autre matériel agricole. Toutefois nous vous proposons d'autre services comme des formations proffesionnel et autre comme vous pouvez le voir <a href="services.php" style="color: red;">ici</a>.</p>
									<br />
									<p>Sur Tract Pool nous vous assurons la simplicité et la sécurité</p>
									<p>Pour l'achat d'un des matériel présent <a href="services.php" style="color: red;">ici</a>
										vous pouvez nous contacter à notre adresse email ou notre fax énuméré <a onClick="goToByScroll('footer-wrapper'); return false;">ci bas</a>.</p>
								</div>
								<div class="feature-list">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section  style="color:dimgrey">
												<h3 class="icon fa-comment">Service clients disponible 24h/24</h3>
												<p>Nos conseiller sont toujours disponible pour vos question contacter nous au besoin.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section style="color:dimgrey">
												<h3 class="icon fa-refresh">Mise à jour reguliere</h3>
												<p> Notre site est regulierement mise à jour pour toujours vous permettre de voir plus de contenu.</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section  style="color:dimgrey">
												<h3 class="icon fa-picture-o">Contemplez vos tracteur préféré</h3>
												<p>Nous disposons de différents tracteur représenté dans diverse phots</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section  style="color:dimgrey">
												<h3 class="icon fa-cog">Service de maintenace</h3>
												<p>Vous avez un problème avec l'un de nos prosuits contacter nous. Les réparation sont gratuite les deux premiers moi.</p>
											</section>
										</div>
									</div>
									
								</div>
								<ul class="actions actions-centered">
									<li><a href="services.php" class="button style1 big">Découvres nos services</a></li>
									<li><a  onClick="goToByScroll('footer-wrapper'); return false;" class="button style2 big">Contactez nous</a></li>
								</ul>
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3>Services</h3>
									<p>Nous disposons de nombreux services. parmi lesquels les réparation de tracteur et bien d'autre.</p>
									<ul class="actions">
										<li><a href="services.php" class="button style1">Découvrez les ici</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3>Produits</h3>
									<p>Nous disposons de nombreux tracteur destiné à la location ou à la vente</p>
									<ul class="actions">
										<li><a href="produits.php" class="button style1">Les voir</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Qui sommes nous</a></h3>
									<p>Vous souhaitez nous découvrir alors suivez le guide</p>
									<ul class="actions">
										<li><a href="presentation.php" class="button style1">Cliquer ici</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
			<?php include("footer.php") ?>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>