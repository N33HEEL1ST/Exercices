On va ajouter une nouvelle page dans le projet toto : cities_students.php

Cette page va :
	- récupérer dans l'url l'id ($_GET) d'une ville de la DB
	- récupérer les informations sur cette ville (nom du pays inclus) (1 requête SQL)
	- récupérer les noms, prénoms, n°de session et lieu de formation de tous les students de cette ville (1 seconde requête SQL, sur plusieurs tables)
	- enfin, on affichera :
		* toutes les informations sur la ville
		* dans une <table>, tous les étudiants, leur n° de session et leur lieu de formation (pas de pagination)
		
Au niveau "parcours utilisateur" (UX), un clic sur le nom d'une ville (sur la home ou dans list.php) amènera sur cette nouvelle page.

Exemple d'URL :
http://localhost/projet_toto/cities_students.php?cityId=2

---------
En option
---------
- rendre le nom et prénom de chaque student cliquable. Le clic amène sur la page "détails" du student (la page détails est déjà faite)