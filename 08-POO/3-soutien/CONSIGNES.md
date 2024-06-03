# Projet de soutien POO

## Étape 1 : créer les fichiers

Vous allez créer l'architecture de dossiers et fichiers suivants :

- model
  - Page.php
- managers
  - PageManager.php 
- config
  - autoload.php
  - Routing.php
- templates
  - page.phtml
  - layout.phtml
- index.php 

Le contenu de votre fichier `templates/layout.phtml` : 

```html
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Cinépotes</title>
        <meta name="title" content="Cinépotes" />
        <meta name="description" content="Critiques de films par une bande de potes" />
        <meta name="author" content="Gaëllan Sifflepignon" />
        <meta name="referrer" content="origin" />
        <meta name="og:title" content="Cinépotes" />
        <meta name="og:description" content="Critiques de films par une bande de potes" />
        <meta name="og:locale" content="fr_FR" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <?php
        // votre code ici
    ?>
</html>
```

Récupérez aussi le zip contenant les assets et placez-le dossier dans votre projet

## Étape 2 : la base de données

Créez une base de données et appelez-la `prenomnom_poo_soutien`.

Elle contient une table `pages` qui a 4 colonnes :

- id : int autoincrémenté
- title : varchar 255 (non null)
- content : varchar 6000 (non null)
- route : varchar 255 (non null)


## Étape 3 : Créer la classe Page

Dans le fichier `model/Page.php`, créez la classe Page.

Ses attributs correspondent aux colonnes de la table `pages`. Son id peut être null.
Ses attributs sont private et la classe a des getters et setters pour tous les attributs.

Dans le fichier `config/autoload.php`, ajoutez un `require_once` de votre classe Page.


## Étape 4 : Importer les données

Récupérez le fichier `pages.sql` et importez-le dans votre base de données.

## Étape 5 : Créer la classe PageManager

Dans le fichier managers/PageManager.php vous allez créer la classe PageManager. 

Elle a un seul attribut : $db qui est une instance de la classe PDO.
Dans son constructeur, elle remplit cet attribut $db avec une connexion vers votre base de données.


Elle contient trois méthodes publiques :

- getAllPages() : array qui va aller chercher dans la base de données le titre et la route de chaque page.

- getPageByRoute(string $route) : Page qui va aller chercher une page dans la base de données en fonction de la route passée en paramètres

- getAllRoutes() : array qui va chercher la liste de toutes les routes de pages présentes dans la base de données

Ajoutez un require_once de votre PageManager à votre fichier config/autoload.php

## Étape 6 : créer la classe Routing

Dans le fichier config/Routing.php vous allez créer une classe Routing, elle n'a pas d'attributs (attention il lui faut quand même un constructeur). 

Pour l'instant elle a une méthode publique dispatch(string $route) : void.

Dans la méthode dispatch vous allez instancier un PageManager, vous allez utiliser sa méthode getAllRoutespour récupérer la liste des routes qui existent.

Vous allez ensuite devoir vérifier que la route que dispatch a reçue en paramètres existe bien dans la base de données.

Si oui, utilisez la méthode getPageByRoute du PageManager pour instancier une Page, faites un var_dump de votre instance de classe ensuite.

Ajoutez un require_once de votre Routing à votre fichier config/autoload.php.

## Étape 7 : l'index.php

Dans votre index.php, vous allez vérifier si une route a été passée dans les paramètres $_GET, si oui, stockez-la dans une variable, si elle n'existe pas, créez la variable et donnez-lui la valeur "home".

Ensuite, créez une instance de la classe Routing et appelez sa méthode dispatch en lui passant la variable de votre route.

## Étape 8 : la méthode render

Nous allons ajouter une méthode render() : void à notre classe Page. C'est la méthode qui va nous permettre de déclencher l'affichage de notre page.

Dans cette méthode nous allons créer une variable $content qui va prendre la valeur du content de l'instance de classe où nous sommes. Le "Mon mien à moi" $content. Ensuite notre méthode va faire un require du fichier templates/layout.phtml.

## Étape 9 : les templates

Dans templates/layout.phtml, vous allez faire un require du fichier templates/page.phtml.

Dans templates/page.phtml vous allez faire un echo de la variable $content.
