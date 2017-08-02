<html>
<head>
	<title>GCLF - <?php echo $pageTitle; ?></title>
	<link href="<?= $config['Base_URL'] ?>css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<header>
		<div class="links">
			<a href="<?= generateUrl('home') ?>">Accueil</a>&nbsp;&nbsp;
			<a href="<?= generateUrl('form-categorie') ?>">Gérer les catégories</a>&nbsp;&nbsp;
			<a href="<?= generateUrl('form-film') ?>">Ajouter un film</a>&nbsp;&nbsp;
		</div>
		<div class="search">
			<form action="<?= generateUrl('catalogue') ?>" method="get" id="headerSearch">
				<input type="text" class="searchInput" placeholder="Titre, acteur, etc." name="q" value="" />
				<input type="submit" class="searchSubmit" value="Rechercher"/>
			</form>
		</div>
		<div class="clearer"></div>
	</header>
