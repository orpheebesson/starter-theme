# :checkered_flag: Starter theme

# :arrow_down: Installation

Téléchargez un logiciel d'environnement de développement, tel que XAMPP :

https://www.apachefriends.org/fr/index.html

Ouvrir l'application XAMPP et lancez les services Apache et MySQL.

Téléchargez WordPress en suivant le lien ci-dessous :

https://fr.wordpress.org/txt-install/

Allez dans `Ordinateur/Disque C:/xampp/htdocs` et coller le dossier WordPress que vous venez de télécharger.

Créer votre base de données locale sur :

http://localhost/phpmyadmin/

Nom de la base de données : _MON\_SITE_ par exemple

Ouvrir un navigateur et tapez _localhost_ dans votre barre d'URL.

Vous y trouverez la liste de vos projets web, avec notamment le site WordPress que vous venez d'installer.

Procédez à l'installation de votre site WordPress, en renseignant :

* Nom de la base de données (ex : _MON\_SITE_)
* Identifiant : _root_
* Mot de passe : laisser vide
* Adresse de la base de données : _localhost_
* Préfixe de vos tables (ex : _MON\_SITE\_wp\__)

Après l'installation réussie, vous devez fournir les informations nécessaires pour vous connecter au site :

* Titre du site (ex : _MON\_SITE_)
* Identifiant : _root_
* Mot de passe : _root_
* Cochez _Utilisation du mot de passe faible_
* Adrese de messagerie
* Cochez _Demander aux moteurs de recherche de ne pas indexer ce site_

À présent, vous devrez avoir un site WordPress fonctionnel, mais sans notre joli thème. C'est embêtant...

Clonez le thème grâce à la commande suivante :

`git clone https://github.com/orpheebesson/starter-theme.git`

Placez le dossier cloné dans :

`htdocs/MON_SITE/wp-content/themes/`

Vous devez maintenant activer le thème depuis le backoffice de WordPress dans _Apparence - Thèmes_.