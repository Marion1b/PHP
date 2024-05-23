# Correction Mini Projet UML

# Mini-projet UML : site e-commerce

Vous allez devoir représenter, en mode tableaux puis en mode graphique avec Google Drawings, le fonctionnement d'un site e-commerce.

Pour chaque étape gardez à la fois une copie de votre mode tableau et de votre mode graphique.


## Étape 1 : produits et catégories simples

Votre site vend des produits, qui ont :

- un id
- un nom
- un prix
- une catégorie

Vos catégories de produits ont :

- un id
- un nom
- un description


### Produits

| ID | Nom           | Prix | Catégorie |
| -- | ------------- | ---- | --------- |
| 1  | T-shirt rouge | 17   | 1         |
| 2  | Manteau bleu  | 28   | 2         |
| 3  | Bonnet rose   | 13   | 1         |


### Catégories

| ID | Nom               | Description                                      |
| -- | ----------------- | ------------------------------------------------ |
|  1 | Vêtements enfants | la description de la catégorie vêtements enfants |
|  2 | Vêtements adultes | la description de la catégorie vêtements adultes |


## Étape 2 : un produit, plusieurs catégories

Faites en sorte que vos produits puissent appartenir à plusieurs catégories

### Produits

| ID | Nom           | Prix |
| -- | ------------- | ---- |
| 1  | T-shirt rouge | 17   |
| 2  | Manteau bleu  | 28   |
| 3  | Bonnet rose   | 13   |

### Catégories

| ID | Nom               | Description                                      |
| -- | ----------------- | ------------------------------------------------ |
|  1 | Vêtements enfants | la description de la catégorie vêtements enfants |
|  2 | Vêtements adultes | la description de la catégorie vêtements adultes |


### Produits_Catégories

| Produit | Catégorie |
| ------- | --------- |
| 1       | 1         |
| 2       | 2         |
| 3       | 1         |



## Étape 3 : les utilisateurs et leur adresses

Nous allons ajouter des utilisateurs à votre site.

Un utilisateur a :

- un id
- un prénom
- un nom
- un email

Chaque utilisateurs a deux adresses : une de facturation, une de livraison.

Chaque adresse contient :

- un id
- un numero
- une rue
- un code postal
- une ville

### Utilisateurs

| ID | Nom    | Prénom | Email             | Livraison | Facturation |
| -- | ------ | ------ | ----------------- | --------- | ----------- |
| 1  | Doucet | Mari   | mari@kornog.bzh   | 1         | 2           |
| 2  | Froger | Hugues | hugues@kornog.bzh | 3         | 4           |

### Adresses

| ID | Numero | Rue                     | Code Postal | Ville          |
| -- | ------ | ----------------------- | ----------- | -------------- |
| 1  | 43     | rue Ernest Renan        | 29100       | Douarnenez     |
| 2  | 23     | boulevard Alexis Carrel | 35700       | Rennes         |


## Étape 4 : les commandes

Vos utilisateurs vont maintenant pouvoir passer commande sur votre site.

Chaque commande a :

- un utilisateur
- de 1 à l'infini de produits

### Produits

| ID | Nom           | Prix |
| -- | ------------- | ---- |
| 1  | T-shirt rouge | 17   |
| 2  | Manteau bleu  | 28   |
| 3  | Bonnet rose   | 13   |

### Catégories

| ID | Nom               | Description                                      |
| -- | ----------------- | ------------------------------------------------ |
|  1 | Vêtements enfants | la description de la catégorie vêtements enfants |
|  2 | Vêtements adultes | la description de la catégorie vêtements adultes |


### Produits_Catégories

| Produit | Catégorie |
| ------- | --------- |
| 1       | 1         |
| 2       | 2         |
| 3       | 1         |

### Utilisateurs

| ID | Nom    | Prénom | Email             | Livraison | Facturation |
| -- | ------ | ------ | ----------------- | --------- | ----------- |
| 1  | Doucet | Mari   | mari@kornog.bzh   | 1         | 2           |
| 2  | Froger | Hugues | hugues@kornog.bzh | 3         | 4           |

### Adresses

| ID | Numero | Rue                     | Code Postal | Ville      |
| -- | ------ | ----------------------- | ----------- | ---------- |
| 1  | 43     | rue Ernest Renan        | 29100       | Douarnenez |
| 2  | 23     | boulevard Alexis Carrel | 35700       | Rennes     |

### Commandes

| ID | Utilisateur |
| -- | ----------- |
|  1 | 1           |
|  2 | 1           |
|  3 | 2           |

### Commandes_produits

| Commande | Produit |
| -------- | ------- |
| 1        | 1       |
| 1        | 2       |
| 2        | 3       |
| 3        | 1       |
| 3        | 3       |
