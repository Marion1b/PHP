# Exercice Pratique PDO

## Étape 0 : Repository et base de données

Créez un repository GitHub public avec un README et appelez-le `bre02-php-j6`.
Clonez-le dans le dossier `sites/php` de votre IDE, puis placez-vous dans le dosssier du projet.

Vérifiez que votre base de données `php-j4` contient bien 4 users et 2 addresses.


## Étape 1 : Connexion

Créez un fichier `connexion.php`, il va contenir la connexion à votre base de données, les informations de connexion à votre base de données liées à l'IDE sont sur la page d'accueil du PHPMyAdmin.

Pour tester cette connexion, faites un run du fichier `connexion.php`, et faites un `var_dump` de la variable qui contient la connexion (généralement elle s'appelle `$db`).

### N'oubliez pas de sauvegarder

```sh
git add connexion.php
git commit -m "étape 1 : connexion"
git push
```


## Étape 2 : Récupérer tous les utilisateurs

Créez un fichier `get_all_users.php` : il va contenir une requête qui devra récupérer tous les utilisateurs de la base de données et les afficher avec un `var_dump`.

> N'oubliez pas de faire un require de `connexion.php` en haut de votre fichier pour avoir accès à votre base de données.

Pour tester, faites un run du fichier `get_all_users.php`.

### N'oubliez pas de sauvegarder

```sh
git add get_all_users.php
git commit -m "étape 2 : get all users"
git push
```


## Étape 3 : récupérer un utilisateur

Créez un fichier `get_single_user.php` : il va contenir une requête qui doit vous permettre de récupérer un utilisateur dont l'id sera passé à votre page dans les paramètres de l'URL.

> N'oubliez pas de faire un require de `connexion.php` en haut de votre fichier pour avoir accès à votre base de données.

Pour tester, faites un run de votre fichier `get_single_user.php` et ajoutez un id d'utilisateur à l'URL.

`get_single_user.php?id=3` devra afficher Jules César, `get_single_user.php?id=2` devra afficher Sarah Toustra, etc etc.

### N'oubliez pas de sauvegarder

```sh
git add get_single_user.php
git commit -m "étape 3 : get single user"
git push
```


## Étape 4 : récupérer un utilisateur et son adresse

Créez un fichier `get_user_with_address.php` : Il va contenir une requête qui doit vous permettre de récupérer un utilisateur dont l'id sera passé en paramètre de l'URL ainsi que les informations de son adresse.

> N'oubliez pas de faire un require de `connexion.php` en haut de votre fichier pour avoir accès à votre base de données.

Pour tester, faites un run de votre fichier `get_user_with_address.php` et ajoutez un id d'utilisateur à l'URL.

`get_user_with_address.php?id=3` devra afficher Jules César et son adresse, `get_user_with_address.php?id=2` devra afficher Sarah Toustra et son adresse.

### N'oubliez pas de sauvegarder

```sh
git add get_user_with_address.php
git commit -m "étape 4 : get single user with address"
git push
```


## Étape 5 : récupérer les utilisateurs et leurs adresses

Créez un fichier `get_users_with_addresses.php` : Il va contenir une requête qui doit vous permettre de récupérer un utilisateur dont l'id sera passé en paramètre de l'URL ainsi que les informations de son adresse.

> N'oubliez pas de faire un require de `connexion.php` en haut de votre fichier pour avoir accès à votre base de données.

Pour tester, faites un run de votre fichier `get_users_with_addresses.php`.


### N'oubliez pas de sauvegarder

```sh
git add get_users_with_addresses.php
git commit -m "étape 5 : get users with addresses"
git push
```


## Étape 6 : créer une adresse

Créez deux fichiers : `create-address.html` et `create-address.php`.

Dans `create-address.html`, créez un formulaire dont l'action est `create-address.php` et la méthode est `post`. Le formulaire doit contenir 3 champs : `street`, `city` et `zipcode` ainsi qu'un bouton de soumission du formulaire.

Dans `create-address.php` vous allez récupérez les informations du formulaire, puis les stocker dans des variables. Vous allez ensuite effectuer une requête qui permet de créer l'adresse dans la base de données.

> N'oubliez pas de faire un require de `connexion.php` en haut de votre fichier `create-address.php` pour avoir accès à votre base de données.

Pour tester, faits un run de votre fichier `create-address.html`, soumettez un formulaire puis vérifiez dans PHPMyAdmin que l'adresse est bien créée.


### N'oubliez pas de sauvegarder

```sh
git add create-address.html
git add create-address.php
git commit -m "étape 6 : create address"
git push
```


## Étape 7 : modifier une adresse

Créez deux fichiers : `edit-address.html` et `edit-address.php`.

Dans `edit-address.html`, créez un formulaire dont l'action est `edit-address.php` et la méthode est `post`. Le formulaire doit contenir 4 champs : `id`, `street`, `city` et `zipcode` ainsi qu'un bouton de soumission du formulaire.

Dans `edit-address.php` vous allez récupérez les informations du formulaire, puis les stocker dans des variables. Vous allez ensuite effectuer une requête qui permet de modifier l'adresse dans la base de données.

> N'oubliez pas de faire un require de `connexion.php` en haut de votre fichier `edit-address.php` pour avoir accès à votre base de données.

Pour tester, faits un run de votre fichier `edit-address.html` , soumettez un formulaire puis vérifiez dans PHPMyAdmin que l'adresse est bien modifiée.


### N'oubliez pas de sauvegarder

```sh
git add edit-address.html
git add edit-address.php
git commit -m "étape 7 : edit address"
git push
```


## Étape 8 : supprimer une adresse

Créez deux fichiers : `delete-address.html` et `delete-address.php`.

Dans `delete-address.html`, créez un formulaire dont l'action est `delete-address.php` et la méthode est `post`. Le formulaire doit contenir 1 champ : `id` ainsi qu'un bouton de soumission du formulaire.

Dans `delete-address.php` vous allez récupérez l'information du formulaire, puis la stocker dans une variable. Vous allez ensuite effectuer une requête qui permet de supprimer l'adresse dans la base de données.

> N'oubliez pas de faire un require de `connexion.php` en haut de votre fichier `delete-address.php` pour avoir accès à votre base de données.

Pour tester, faits un run de votre fichier `delete-address.html` , soumettez un formulaire puis vérifiez dans PHPMyAdmin que l'adresse est bien supprimée.


### N'oubliez pas de sauvegarder

```sh
git add delete-address.html
git add delete-address.php
git commit -m "étape 8 : delete address"
git push
```