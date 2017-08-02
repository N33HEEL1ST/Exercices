Dans le projet en équipe "Gestion des copies légales de films" ou "ImDB", nous avons 2 formulaires :
	- ajout/modification d'une catégorie
	- ajout/modification d'un film
	
1) Modifier le formulaire de catégorie pour que tout se fasse en Ajax
	* intercepter la soumission du formulaire
	* serializer les données du formulaire pour les envoyer en Ajax sur le fichier "ajax/categories.php"
	* dans ce nouveau fichier, placer le traitement des données en POST et insérer ou modifier en DB (reprendre le code existant)
	* la réponse du fichier "ajax/categories.php" sera l'id si tout a fonctionné, 0 sinon
	* après la réponse du fichier "ajax/categories.php", côté javascript, afficher une alerte pour informer l'utilisateur
	* dans le cas d'une insertion :
		** soit rediriger sur la page avec le bon ID => ?id=42
		** soit donner une valeur à l'input hidden correspondant à l'ID
		
2) Faire de même avec le formulaire d'ajout/modification de film

---------
En option
---------
3) Faire de même avec 1 ou 2 formulaires du projet "projobjects"