--- 
theme: theme.json
author: Gaellan
date: May 23, 2024
paging: Page %d sur %d
---

# Le RGPD

## Définition

Le RGPD (Règlement Général pour la Protection des Données) c'est la règlementation européenne sur les données personnelles, leur traitment et leur protection.

## Objets du cours

Ce cours ne porte que sur les obligations vis à vis des utilisateurs et utilisatrices de votre site ou appli web. Si vous êtes chef d'entreprise vous avez également des obligations internes pour vos salariés, sous-traitants et clients.

## Plan du cours

### Un peu d'histoire

### Qu'est-ce qu'une donnée personnelle ?

### Les grands principes

### Les solutions techniques

---

# Un peu d'histoire

La commission Européenne a commencé en 2012 à travailler sur des directives d'encadrement du traitement des données personnelles pour moderniser son dernier règlement qui datait de 2012.

Le RGPD a été adopté et promulgué en 2016 pour une application dès le mois de mai 2018. À l'époque cela a provoqué une sorte de frénésie de mise en conformité plus ou moins bien faite, dont les résultats se font encore sentir aujourd'hui.

---

# Qu'est-ce qu'une donnée personnelle ?

La définition donnée par la CNIL (Commission Nationale de l'Informatique et des Libertés) est très large :

> « toute information se rapportant à une personne physique identifiée ou identifiable »

## Identifier une personne

Une personne peut être identifiée directement, par son nom et son prénom ou bien indirectement par une ou plusieurs données qui mises bout à bout peuvent mener à son identification : empreinte digitale, enregistrement de la voix, numéro de téléphone, ...

## Traitement des données

Encore une fois la définition de la CNIL est large :

> « est une opération, ou ensemble d'opérations, portant sur des données personnelles »

Pour être plus clair : si vous manipulez (écrire, lire, trier, supprimer, collecter) des données personnelles : c'est un traitement.

---

# Les grands principes

## Ne collecter que le nécéssaire

Le principe fondamental c'est de ne récolter que les données strictement nécéssaires au bon fonctionnement du service que vous proposez :

Par exemple une formulaire de contact sert à pouvoir recontacter quelqu'un. Vous avez donc à priori besoin :

- de savoir qui est cette personne : nom, prénom
- d'un moyen de contact : email, téléphone

Mais par contre sauf dans des cas très précis (vous êtes avocat-e, association de défense de droit, ...) vous n'avez pas besoin de connaitre l'apprtenance religieuse ou politique de votre contact et encore moins de la stocker.

### Durée de conservation

Vous n'avez pas on plus besoin de stocker certaines données indéfiniment. Toujours sur ce formulaire de contact : si cette personne n'a pas signalé vouloir par exemple s'abonner à votre newsletter, une fois la conversation terminée, vous n'avez à priori pas besoin de stocker ses informations plus longtemps qu'un an. Si elle veut vous recontacter elle vous les redonnera.

## Recueillir le consentement

Qu'elle que soit la raison (en langage RGPD on dit la finalité) de votre récolte de données vous devez vous assurer du consentement de la personne. Elle doit savoir quelles données vous aller récolter, pourquoi et combien de temps ous allez les converser.

## Protéger les données

Si les données sont considérées sensibles : lien avec une condition médicale, une source de discrimination (appartenance à une minorité), vous devez vous assurer de les protéger des fuites. Pour les données médicales l'hébergeur de votre site doit être certifié pour pouvoir les accueillir.

## Nommer un responsable

Vous devez nommer dans l'entreprise un responsable des données qui sera indiqué sur le site et qui doit être facile à contacter par les utilisateurs et utilisatrices.

## Les droits des utilisateur-ices

Vos utilisateurs et utilisatrices peuvent à tout moment demander à consulter les données personnelles les concernant que vous possédez et demander à les effacer.

---

# Les solutions techniques

Pour ce qui est des informations que vous devez fournir aux utilisateurs qui présentent les données que vous collectez, pourquoi et pour combien de temps il n'y a pas d'autre solution que de s'y pencher pour réiger les contenus et les mettre en place.

Par contre il existe des solutions techniques pour recueillir le consentement des utilisateur-ices de votre site concernant les cookies :

- Site from scratch : https://tarteaucitron.io/fr/
- WordPress ou Shopify : https://wordpress.org/plugins/cookiebot/
- Prestashop : https://prestahero.com/fr/178-banniere-cookie-prestashop-gratuite.html  
