# Mini-Projet Bibliothèque

Dans ce projet nous allons tenter de faire une implémentation d'une bibliothèque en ligne.

## Étape 0

Commencez par créer un repository GitHub public et appelez-le `bre02-library`.

Dans votre PHPMyAdmin, créez une base de données `prenomnom_library`.


## Étape 1 : définir vos classes

Pour ce projet, je ne vais pas définir pour vous la liste des classes, vous allez devoir faire le travail de découper la problématique en texte et d'essayer du mieux possible de la retranscrire en code.

Dans cette bibliothèque nous avons des livres, rangés par catégorie.

N'importe qui sauf les bibliothéquaires peut venir dans la bibliothèque et lire un livre s'il est présent en rayon. N'importe qui peut remettre un livre qu'il vient de lire (mais pas d'emprunter) à sa place.

Seul les lecteurices qui ont une carte d'abonné-e peuvent emprunter les livres et les sortir de la bibliothèque. Un-e abonné-e peut emprunter jusqu'à 3 livres en même temps.

Lorsqu'un-e abonné-e ramène des livres empruntés iel les confie à lea bibliothéquaire, qui se charge de les noter comme rendus puis de les ranger à la bonne place.

Les bibliothéquaires peuvent créer des cartes d'abonné-e-s pour les lecteurices.


Vous allez devoir créer des classes avec leur attributs et méthodes pour représenter ce qui vient d'être expliqué. Ã vous de décider le niveau de détail et de complexité que vous voulez y mettre.


## Étape 2 : définir vos entités

Dans le cadre de ce mini-projet, une entité c'est une classe qui a un équivalent en base de données. Toutes vos classes ont-elles besoin d'une table ? (le réponse peut être oui comme elle peut être non à vous de déterminer le mieux pour votre projet).

Une fois que vous avez choisi, créez vos table dans la base de données et remplissez les (attention dans certaines tables pour pouvoir bien vérifier le fonctionnement il va falloir pas mal de données, vous avez le droit d'utiliser une IA pour vous aider à créer des données d'exemple).


## Étape 3 : définir vos requêtes

Maintenant que vous avez des tables et des données, il va falloir définir les requêtes que vous voulez effectuer, et les coder dans des fonctions en PHP.

Vous allez devoir écrire vos requêtes directement dans les méthodes correspondantes dans vos classes.


## Étape 4 : rajouter un front

Vous allez maintenant devoir rajouter un peu de frontend à votre bibliothèque. Sur une même page vous devez pouvoir visualiser :

- les livres disponibles sur les rayons
- le livre que vous êtes en train de lire sur place
- si vous êtes abonné-e les livres empruntés en votre possession
- les livres récupérés par lea bibliothéquaire et en attente de rangement

Toujours sur cette page vous devez pouvoir effectuer les actions suivantes :

- prendre un livre pour le lire
- demander à créer une carte d'abonné-e si vous n'en avez pas
- ranger un livre que vous lisez
- rendre vos livres empruntés
- emprunter des livres
- faire ranger la pile des livres rendus par lea bibliothéquaire
- saisir votre numéro d'abonné-e pour voir vos livres empruntés

