<?php

/*
EXERCICE 1
-----------
OK - implémenter l'interface "JsonSerializable" dans la classe VideoGame (poo2, avec héritage)
	http://php.net/manual/fr/class.jsonserializable.php
- écrire un script PHP qui va créer 2 instances de VideoGame puis va afficher à l'écran le JSON correspondant aux instances

EXERCICE++
-----------
- implémenter l'interface PHP "Serializable" dans la classe VideoGame
	http://php.net/manual/fr/class.serializable.php
- ne serializer que les propriétés titre, editeur et genre
- écrire le script PHP qui va créer une instance de JeuVideo puis la serializer dans un fichier texte
- écrire un autre script PHP qui va désérializer le contenu du fichier texte dans un objet, et vérifier qu'il est correct

EXERCICE-extra
---------------
- implémenter l'interface PHP "JsonSerializable" dans toutes les classes "enfant" de Jeu
*/