<!DOCTYPE html> <!-- début code html -->
<html>
	<head>
		<title><?= $titre  ?></title>
		 
		<meta charset="utf-8">
		<!-- Meta obligatoire pour les sites responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Fichiers CSS -->
		<link rel="stylesheet" type="text/css" href="public/css/main.css">
	</head>
	<body>

		<!-- début de nav bar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarNav">
			  <ul class="navbar-nav">
					<li class="nav-item active">
						<a class="navbar-brand <?php if ($nav == 'accueil') echo "positionNav"?>" href="index.php"  title="Vous vous trouvez sur cette page">Accueil</a>
					</li>
					<li class="nav-item active">
						<a class="navbar-brand <?php if ($nav == 'competence') echo "positionNav"?>" href="index.php?action=competence">Compétenses</a>
					</li>
					<li class="nav-item active">
						<a class="navbar-brand <?php if ($nav == 'ciivim') echo "positionNav"?>" href="index.php?action=ciivim">Le Ciivim</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 	Réalisations
						</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						 <a class="dropdown-item" href="http://www.code.coptos.fr">Mission MI6</a>
					</div>
					</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Rapport(s) de stage
							</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="public/stage/stage1.pdf">Compagnie Maleluka (1er stage)</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Procédure(s)
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="public/procedure/utilisation_git_github.pdf">Utilisation de Git et GitHub</a>
							<a class="dropdown-item" href="public/procedure/utilisation_git_csharp.pdf">Utilisation de Git sur Visual Studio (C#)</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		  <!--  fin de nav bar -->

<?= $contenu ?>




		<!-- début footer -->
		<footer>
			<div class="container-fluid">
				<section class="row">
					<div class="col-md-12 contact">
						<h2>Contact :</h2>
						<p>Nom de la responsable : PHILIPPE SAINT-ANTOINE Siméon</p>
						<p>Email : simeon.phsta@laposte.net</p>
					</div>
				</section>
			</div>
		</footer>
		<!-- fin footer -->

		<!-- Fichiers JS -->
		<script type="text/javascript" src="public/js/jquery-3.4.0.js"></script>
		<script type="text/javascript" src="public/js/bootstrap.js"></script>
		<script type="text/javascript" src="public/js/scripts.js"></script>
	</body>
</html><!-- fin code html -->











<!--
		site réalisé par
		Simeon PHILIPPE SAINT-ANTOINE
-->
