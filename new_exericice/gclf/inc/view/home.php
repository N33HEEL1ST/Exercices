<section>
	<p id="homeItro">GCLF est une superbe et ingénieuse application permettant de gérer la localisation et la recherche de ses copies légales de films</p>
	<br /><br />
	<form action="index.php" method="get" id="homeSearch">
		<!-- => ?section=catalogue -->
		<input type="hidden" name="section" value="catalogue" />

		<input type="text" class="searchInput" placeholder="Titre, acteur, etc." name="q" value="" /><br>
		<input type="submit" class="searchSubmit" value="Rechercher"/>
	</form>
</section>
<section class="listeCategories">
	<?php foreach ($categorieList as $curCategorieInfos) : ?>
	<a href="index.php?section=catalogue&cat_id=<?php echo $curCategorieInfos['cat_id']; ?>"><?php echo $curCategorieInfos['cat_nom'].' ('.$curCategorieInfos['nb'].')'; ?></a>&nbsp; &nbsp;
	<?php endforeach; ?>
</section>
<section class="listeMovies">
	<?php foreach ($moviesList as $currentMovieInfos) : ?>
	<a href="index.php?section=details&id=<?= $currentMovieInfos['fil_id']; ?>" class="homeAffiche">
		<img src="<?= $currentMovieInfos['fil_affiche']; ?>" height="200" border="0"><br>
		<span><?= $currentMovieInfos['fil_titre']; ?></span>
	</a>
	<?php endforeach; ?>
</section>
<div class="clearer"></div>
