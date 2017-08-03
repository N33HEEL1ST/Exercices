<section class="subHeader">
		<h1>Gestion des catégories</h1>
		<!-- je mets ce formulaire en method="get" car la donnée n'est pas à sécuriser
		et car on veut voir ?id=ID dans l'URL de la page pour la modification -->
		<form action="" method="get">
            <input type="hidden" name="section" value="category_add_edit" />
			<select name="id">
				<option value="0">ajouter une catégorie</option>
				<!-- je parcours les catégories pour remplir le menu déroulant des catégories -->
				<?php foreach ($categoriesList as $curCategorie) : ?>
				<option value="<?php echo $curCategorie['cat_id']; ?>"<?php echo $currentId == $curCategorie['cat_id'] ? ' selected="selected"' : ''; ?>><?php echo $curCategorie['cat_nom']; ?></option>
				<?php endforeach; ?>
			</select>
			<input type="submit" value="OK"/>
		</form>
	</section>
	<form action="" method="post">
		<fieldset>
			<input type="hidden" name="cat_id" value="<?php echo $currentId; ?>" />
			<table>
			<tr>
				<td>Nom :&nbsp;</td>
				<td><input type="text" name="cat_nom" value="<?php echo $cat_nom; ?>"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Valider"/></td>
			</tr>	
			</table>
		</fieldset>
	</form>