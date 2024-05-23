# Exercice Bonus PHP J4 - Exploration de la base de donnée de la 3WATrade

## Étape 1 : Récupération des sources

Récupérer le fichier source 3watrade.sql.

Editez le pour remplacer le préfixe du nom de la base de donnée `huguesfroger_` par votre nom d'utilisateur phpmyadmin respectif.


## Étape 2 : Importation de la base de données dans PHPMyAdmin

Dans une base de données `prenomnom_3watrade` vous allez importer les sources précédemment éditées.


## Étape 3 : Exploration des tables

Depuis l'interface graphique consulter via le `Concepteur` la structure des tables et des relations.


## Étapes 4 : les requêtes SELECT

En utilisant l onglet pour saisir directement les requêtes SQL vous allez devoir écrire des requêtes SELECT qui permettent d'obtenir les informations suivantes :

### Requête 1

Le nom, la description et le prix de chacun des produits.

SELECT name, description, price FROM products; 

### Requête 2

Le nom, la description et le prix de chacun des produits des produits de moins de 42€ du plus cher au moins cher.
SELECT "name", "description", "price" FROM "products" WHERE "price" < 42; 

### Requête 3

Le nom de la ville, le code postal, le numéro de rue et l'intitulé de la rue des adresses.
SELECT city, postal_code, number, street FROM addresses; 

### Requête 4

Le nom de la ville, le code postal, le numéro de rue et l'intitulé de la rue des adresses dont le nom de la ville commence par A.
SELECT city, postal_code, number, street FROM addresses WHERE city LIKE "A%"; 

### Requête 5

La liste de tous les utilisateurs
SELECT * FROM `users`; 

### Requête 6

La liste de tous les utilisateurs rangée par date de naissance
SELECT * FROM `users` ORDER BY birthdate ASC; 

### Requête 7

La liste de tous les utilisateurs rangée par date de naissance de plus de 5O ans
SELECT * FROM `users` WHERE FLOOR(DATEDIFF(CURRENT_DATE, birthdate) / 365)>50 ORDER BY birthdate ASC;

### Requête 8

La liste de tous les utilisateurs rangée par date de naissance, de plus de 5O ans et en ajoutant une colonne nommé "Age" pour afficher leur âge calculé actuel

SELECT * FROM `users` WHERE FLOOR(DATEDIFF(CURRENT_DATE, birthdate) / 365)>50 ORDER BY birthdate ASC;

ALTER TABLE `users`
ADD  age INT;

UPDATE `users`
SET age = FLOOR(DATEDIFF(CURRENT_DATE, birthdate) / 365)