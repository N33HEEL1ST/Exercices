Notre projet toto (ou le projet projobjects) est actuellement ouvert à tout utilisateur.
Je souhaiterais que seuls les utilisateurs connectés puissent y accéder.
De plus, toutes les pages de modification/ajout/suppression doivent être réservées aux utilisateurs avec le role "admin"

Pour cela, créer une table users avec les champs nécessaires à la connexion (attention, password varchar(60) minimum + email avec "UNIQUE").

Ensuite, il faudra créer la page de signup. Après soumission du formulaire, il faudra valider les données (email valide, password de 8 caractères minimum) puis insérer en DB (password_hash()).

Il faudra créer la page de signin. Après soumission, il faudra vérifier l'existance de l'email en DB, puis vérifier le password correspondant (password_verify()).

Une fois connecté, il faut ajouter, au moins, l'id et le role de l'utilisateur.

Enfin, sur chaque page du site, il faudra tester que l'utilisateur est connecté. Sinon, on renvoit sur la page "signin". Et s'il est connecté, il faudra vérifier que l'utilisateur a un role suffisant (user ou admin).