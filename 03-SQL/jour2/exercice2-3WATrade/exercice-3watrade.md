# 3WA Trade

Dans cet exercice vous allez devoir effectuer des requêtes pour trouver certaines informations dans la base de données 3wa_trade.

Une fois que votre requête fonctionne dans PHPMyAdmin, notez-la dans un fichier texte.

## 1

La liste de tous les utilisateurs ;

SELECT * FROM users ;

## 2 

La liste de tous les utilisateurs rangée par noms de famille ;

SELECT * FROM users ORDER BY last_name ASC;

## 3

Le dernier utilisateur inscrit ;

SELECT * FROM users ORDER BY registration_date DESC LIMIT 1;

## 4 

La liste de tous les utilisateurs fêtant leur anniversaire ce mois-ci ;

SELECT * FROM users WHERE MONTH(birthdate) = MONTH(CURDATE());

## 5

Le nombre total d'utilisateurs ;

SELECT COUNT(*) FROM users;

## 6

La liste de tous les utilisateurs associés à leurs villes respectives ;

SELECT *, addresses.street, addresses.number, addresses.complements, addresses.postal_code, addresses.city FROM users
JOIN addresses ON users.address_id = addresses.id;

## 7 

La liste de tous les utilisateurs vivant à une adresse sans numéro ;

SELECT *, addresses.street, addresses.number, addresses.complements, addresses.postal_code, addresses.city FROM users 
JOIN addresses ON users.address_id = addresses.id
WHERE addresses.number IS NULL;

## 8

La liste de tous les produits dont le prix est supérieur à 1 000 € ;

SELECT * FROM products WHERE price > 1000;

## 9

La liste des photos du produit le moins cher ;

SELECT 
	pictures.url 
FROM
    pictures
JOIN
    products ON pictures.product_id = products.id
ORDER BY
    products.price ASC
LIMIT 1;

## 10

La liste de tous les produits appartenant à la catégorie « Voyage » ;

## 11

La liste de tous les utilisateurs ayant effectué plus de dix commandes ;

SELECT 
	DISTINCT users.first_name, users.last_name, users.email 
FROM 
	orders
JOIN
	users ON orders.user_id = users.id
WHERE
	(SELECT 
     	COUNT(*) 
     FROM 
     	orders 
     WHERE 
     	orders.user_id = users.id) > 10;

## 12

La liste de tous les produits achetés par le premier utilisateur inscrit.

SELECT 
	products.name, 
    products.description, 
    products.price,
    users.first_name,
    users.last_name
FROM 
	products_orders
JOIN
	products ON products_orders.product_id = products.id
JOIN
    orders ON products_orders.order_id = orders.id
JOIN
	users ON orders.user_id = users.id
WHERE
    users.id = (SELECT id FROM users ORDER BY registration_date ASC LIMIT 1)
ORDER BY 
	users.registration_date DESC