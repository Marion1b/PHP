# Exercice d'utilisation de PHPMyAdmin

## Étape 1 : Création de la base de données

Dans PHPMyAdmin, vous allez créer une base de données appellée `prenomnom_phpj4` et vous lui donnerez l'interclassement `utf8_general_ci`.

## Étape 2 : Création de la table users

Dans votre base de données `prenomnom_phpj4` vous allez créer une table appellée `users`.

Elle aura les colonnes suivantes : 

- un `id` qui est un int autoincrémenté
- un `first_name` qui est un varchar d'une longueur maximal de 255 et ne peut pas être null
- un `last_name` qui est un varchar d'une longueur maximal de 255 et ne peut pas être null
- un `email` qui est un varchar d'une longueur de 255 et ne peut pas être null
- une `biography` qui est un varchar d'une longueur de 511 et peut être null
- un `created_at` qui est un datetime et ne peut pas être null

## Étape 3 : Créer des données depuis l'interface

Depuis l'interface graphique vous allez créer deux nouveaux utilisateurs : 

- Alain Pératif, dont l'email est alain.peratif@demo.fr, créé le 23-03-2024 à 01:00:00, et dont la biographie est "aime bien donner des ordres".

- Sarah Toustra, dont l'email est nietszche_lover@hotmail.com, créée le 25-12-2012 à 23:42:00 et qui n'a pas de biographie

## Étape 4 : Créer des données avec des requêtes SQL

Dans l'onglet pour saisir directement des requêtes, vous allez créer 2 utilisateurs : 

- Jules César dont l'email est ceo@empyre.rom, créé le 12-07-2020 à 18:57:00 et dont la biographie est "Veni Vedi Vici"

- Garfield Redhair dont l'email est garfield@cat.com, créé le 25-12-2012 à 23:42:00 dont la biographie est "I hate mondays"

## Étapes 5 : les requêtes SELECT

En utilisant l onglet pour saisir directement les requêtes SQL vous allez devoir écrire des requêtes SELECT qui permettent d'obtenir les informations suivantes :

### Requête 1

Le nom et prénom de chacun des utilisateurs.

SELECT first_name, last_name FROM users; 

### Requête 2

Toutes les informations des utilisateurs triés du plus récemment créé au plus anciennement créé.

SELECT * FROM users ORDER BY created_at DESC; 

### Requête 3

Le nom et le prénom du dernier utilisateur créé.

SELECT first_name, last_name FROM users ORDER BY created_at DESC LIMIT 1; 

### Requête 4

Toutes les informations des utilisateurs qui ont une biographie.

SELECT * FROM users WHERE biography IS NOT NULL; 

### Requête 5

Le nom et prénom des utilisateurs n'ayant pas de biographie.

SELECT first_name, last_name FROM users WHERE biography IS null; 

### Requête 6

L'adresse email de chacun des utilisateurs

SELECT email FROM users; 

### Requête 7

La liste des prénoms des utilisateurs par ordre alphabétique

SELECT first_name FROM users ORDER BY first_name ASC; 

### Requête 8

Les prénoms des deux derniers utilisateurs dans l'ordre alphabétique du nom de famille.

SELECT first_name FROM users ORDER BY last_name DESC LIMIT 2; 

### Requête 9 

En cherchant sur https://sql.sh/ cherchez un moyen d'obtenir le nombre total d'utilisateurs.

SELECT COUNT(*) FROM users; 

### Requête 10

En cherchant sur https://sql.sh/ cherchez un moyen d'obtenir la liste des dates de création des utilisateurs (sans doublon).

SELECT DISTINCT created_at FROM users; 