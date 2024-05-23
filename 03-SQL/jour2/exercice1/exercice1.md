### Requête 1
Dans l'onglet SQL écrivez une requête qui permet de récupérer les noms, prénoms et adresses (street, zipcode et city) de chaque user

SELECT users.first_name, users.last_name, users.address, address.street, address.city, address.zipcode FROM users JOIN address ON users.address = address.id; 