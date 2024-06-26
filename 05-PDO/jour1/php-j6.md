---
theme: theme.json
author: Gaellan
date: May 24, 2024
paging: Page %d sur %d
---

# Initiation au PHP

## Plan du cours

### PDO

### Executer une requête

### Se protéger des injections

---

# PDO

Le cours à propos de PDO sur Moodle : https://elearning.3wa.fr/mod/page/view.php?id=22313

PDO c'est ce qui va vous permettre de dialoguer avec votre base de données dans votre code PHP.

## Instancier la classe PDO

```php

$host = "db.3wa.io";
$port = "3306";
$dbname = "prenomnom_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "votre_username";
$password = "votre_password";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
```

---

# Exécuter une requête

## Récupérer le résultat d'un SELECT

### fetch

Si vous n'avez qu'une seule entrée à récupérer, utilisez `fetch`.

| id | first_name | last_name |
| -- | ---------- | --------- |
| 1  | Steve      | Rogers    |
| 2  | Clark      | Kent      |


```php
$query = $db->prepare('SELECT * FROM users WHERE id = :id');
$parameters = [
    'id' => $_GET['id']
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);
```

Si `$_GET['id']` vaut `2`, le résultat sera :

```php
$user = [
    'id' => 2,
    'first_name' => 'Clark',
    'last_name' => 'Kent'
];
```

---

### fetchAll

Si vous en avez plusieurs, utilisez `fetchAll`.

| id | first_name | last_name |
| -- | ---------- | --------- |
| 1  | Steve      | Rogers    |
| 2  | Clark      | Kent      |


```php
$query = $db->prepare('SELECT * FROM users');
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);
```

Le résultat serait :

```php
$users = [
    [
        'id' => 1,
        'first_name' => 'Steve',
        'last_name' => 'Rogers'
    ],
    [
        'id' => 2,
        'first_name' => 'Clark',
        'last_name' => 'Kent'
    ]
];
```


---

# Executer une requête 

Pour les requêtes qui ne contiennent pas de `SELECT`, pas besoin d'utiliser `fetch`, vous allez simplement executer la requête :

```php
$query = $db->prepare("INSERT INTO users (id, first_name, last_name) VALUES (NULL, ':first_name', ':last_name')");
$parameters = [
    'first_name' => 'Tony',
    'last_name' => 'Stark'
];
$query->execute($parameters);
```

Dans le cadre d'un `INSERT` si vous voulez récupérer l'id de ce que vous venez d'insérer, utilisez `lastInsertId` :

```php
$query = $db->prepare("INSERT INTO users (id, first_name, last_name) VALUES (NULL, ':first_name', ':last_name')");
$parameters = [
    'first_name' => 'Tony',
    'last_name' => 'Stark'
];
$query->execute($parameters);
$userId = $db->lastInsertId();
```

---

# Se protéger des injections

N'utilisez jamais directement quelque chose transmis par un utilisateur. Jamais. C'est une énorme faille de sécurité, probablement l'une des pires.

⛔️ Vraiment ne faites jamais ça. ⛔️

`'SELECT * FROM users WHERE id = ' . $_GET['id']`

⛔️ "Never ever ever !" (Taylor Swift) ⛔️ 


On utilise donc les paramètres et la préparation de requête. En faisant ça, PDO va se charger de nettoyer les données de ce qui pourrait y être nuisible.

Vous avez un exemple dans la démonstration de fetch, mais je le remets au cas où c'est important : 

```php
if (isset($_GET['id'])) {
    // je mets une placeholder dans la requête avec :
    $query = $db->prepare('SELECT * FROM users WHERE id = :id');

    // je prépare ma requête avec les paramètres
    $parameters = [
        'id' => $_GET['id']
    ];

    // PDO va cleaner les paramètres puis exécuter la requête
    $query->execute($parameters);
	
    $user = $query->fetch(PDO::FETCH_ASSOC);
}

```
