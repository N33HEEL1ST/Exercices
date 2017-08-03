<section>
	<p id="homeItro">GCLF est une superbe et ingénieuse application permettant de gérer la localisation et la recherche de ses copies légales de films</p>
	<br /><br />
	<form action="<?= generateUrl('catalogue') ?>" method="get" id="homeSearch">
        <input type="text" class="searchInput" placeholder="Titre, acteur, etc." name="q" value="" /><br>
		<input type="submit" class="searchSubmit" value="Rechercher"/>
	</form>
</section>
<section class="listeCategories">
	<?php foreach ($categorieList as $curCategorieInfos) : ?>
	<a href="<?= generateUrl('catalogue') ?>?cat_id=<?php echo $curCategorieInfos['cat_id']; ?>"><?php echo $curCategorieInfos['cat_nom'].' ('.$curCategorieInfos['nb'].')'; ?></a>&nbsp; &nbsp;
	<?php endforeach; ?>
</section>
<section class="listeMovies">
	<?php foreach ($moviesList as $currentMovieInfos) : ?>
	<a href="<?= generateUrl('details', $currentMovieInfos['fil_id']) ?>" class="homeAffiche">
		<img src="<?= $currentMovieInfos['fil_affiche']; ?>" height="200" border="0"><br>
		<span><?= $currentMovieInfos['fil_titre']; ?></span>
	</a>
	<?php endforeach; ?>
</section>
<div class="clearer"></div>
