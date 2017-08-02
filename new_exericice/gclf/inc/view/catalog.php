<?= generateUrl('details') ?><section class="pagination">
	<?php
	if ($currentPage >= 2) {
	?>
	<a href="?section=catalogue&page=<?php echo $currentPage-1; ?>&q=<?php echo $searchTerms; ?>&cat_id=<?php echo $categorieId; ?>">&lt; précédent</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php
	}
	if (sizeof($filmList) >= 4) {
	?>
	<a href="?section=catalogue&page=<?php echo $currentPage+1; ?>&q=<?php echo $searchTerms; ?>&cat_id=<?php echo $categorieId; ?>">suivant &gt;</a>
	<?php
	}
	?>
</section>
<section class="filmList">
	<?php
	// Si la variable $filmList existe et si elle contient plusieurs lignes
	if (isset($filmList) && sizeof($filmList) > 0) {
		foreach ($filmList as $currentFilmInfos) {
		?>
		<article>
			<div class="content">
				<a href="<?= generateUrl('details', $currentFilmInfos['fil_id']) ?>"><img src="<?php echo $currentFilmInfos['fil_affiche']; ?>" border="0" /></a>
				<div class="titre">
					#<?php echo $currentFilmInfos['fil_id']; ?>&nbsp;
					<a href="<?= generateUrl('details', $currentFilmInfos['fil_id']) ?>"><?php echo $currentFilmInfos['fil_titre']; ?></a>
				</div>
				<div class="synopsis">
					<?php echo $currentFilmInfos['fil_synopsis']; ?>
				</div>
			</div>
			<div class="actions">
				<a class="btn" href="<?= generateUrl('details', $currentFilmInfos['fil_id']) ?>">Détails</a><br />
				<a class="btn" href="index.php?section=film_add_edit&id=<?php echo $currentFilmInfos['fil_id']; ?>">Modifier</a><br />
			</div>
		</article>
		<?php
		}
	}
	?>
</section>
