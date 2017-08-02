<form action="index.php" method="get">
	<input type="hidden" name="section" value="form-film" />
		<legend>Pré-remplir avec IMDb</legend>
		<fieldset>
			<input type="text" name="imdb" value="<?php echo $imdb; // on remplit le champ de recherche IMDb par les termes actuellement recherchés ?>" />
			<input type="submit" value="Rechercher" />
			<?php
			// Si aucun résultat, j'affiche l'information
			if ($noImdbResult) {
				echo '&nbsp;&nbsp;<strong>Aucun résultat</strong>';
			}
			// Sinon si on a fait une recherche et qu'on a plusieurs résultats, on les affiche
			else if (sizeof($imdbTitlesList) > 0) {
				echo '<br />Résultats :';
				foreach ($imdbTitlesList as $currentId=>$currentTitle) {
					echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?imdbId='.urlencode($currentId).'">'.$currentTitle.'</a>';
				}
			}
			?>
			<br />
		</fieldset>
	</form>

	<form action="" method="post">
		<legend>Gestion de film</legend>
		<fieldset>
			<input type="hidden" name="fil_id" value="<?php echo $currentId; ?>" />
			<table>
			<tr>
				<td>Titre :&nbsp;</td>
				<td><input type="text" name="fil_titre" value="<?php echo $fil_titre; ?>"/></td>
			</tr>
			<tr>
				<td>Catégorie :&nbsp;</td>
				<td><select name="cat_id">
					<option value="">choisissez</option>
					<?php foreach ($categoriesList as $curCategorie) : ?>
					<option value="<?php echo $curCategorie['cat_id']; ?>"<?php echo $cat_id == $curCategorie['cat_id'] ? ' selected="selected"' : ''; ?>><?php echo $curCategorie['cat_nom']; ?></option>
					<?php endforeach; ?>
				</select><?php if (!empty($imdbCategory)) echo '&nbsp;&nbsp;IMDb => '.$imdbCategory; ?></td>
			</tr>
			<tr>
				<td>Support :&nbsp;</td>
				<td><select name="sup_id">
					<option value="">choisissez</option>
					<?php foreach ($supportsList as $curSupport) : ?>
					<option value="<?php echo $curSupport['sup_id']; ?>"<?php echo $sup_id == $curSupport['sup_id'] ? ' selected="selected"' : ''; ?>><?php echo $curSupport['sup_nom']; ?></option>
					<?php endforeach; ?>
				</select></td>
			</tr>
			<tr>
				<td>Année :&nbsp;</td>
				<td><select name="fil_annee">
					<option value="">choisissez :</option>
					<?php for ($annee=date('Y');$annee>1930;$annee--) : ?>
					<option value="<?php echo $annee; ?>"<?php echo $fil_annee==$annee ? ' selected="selected"' : ''; ?>><?php echo $annee; ?></option>
					<?php endfor; ?>
				</select></td>
			</tr>
			<tr>
				<td>Synopsis :&nbsp;</td>
				<td><textarea name="fil_synopsis" rows="5" cols="100"><?php echo $fil_synopsis; ?></textarea></td>
			</tr>
			<tr>
				<td>Description :&nbsp;</td>
				<td><textarea name="fil_description" rows="12" cols="100"><?php echo $fil_description; ?></textarea></td>
			</tr>
			<tr>
				<td>Acteur(s)/Actrice(s)&nbsp;:&nbsp;</td>
				<td><input type="text" name="fil_acteurs" value="<?php echo $fil_acteurs; ?>"/></td>
			</tr>
			<tr>
				<td>Fichier :&nbsp;</td>
				<td><input type="text" name="fil_filename" value="<?php echo $fil_filename; ?>"/></td>
			</tr>
			<tr>
				<td>Affiche :&nbsp;</td>
				<td><input type="text" name="fil_affiche" value="<?php echo $fil_affiche; ?>"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="<?php if ($currentId > 0) { echo 'Modifier'; } else { echo 'Ajouter'; } ?>"/></td>
			</tr>
			</table>
		</fieldset>
	</form>
