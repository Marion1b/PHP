# Critères simplifiés de tests de l'accessiblité d'une page

- URL du site : 
- URL de la page :


## Images

### 1 Chaque image porteuse d'information a-t-elle une alternative textuelle ?

- [ ] Oui
- [ ] Non 

#### Comment tester ?

Chaque image (balise `<img>` ou balise possédant l’attribut WAI-ARIA `role="img"`) porteuse d’information a-t-elle une alternative textuelle ?


### 2 Pour chaque image porteuse d’information ayant une alternative textuelle, cette alternative est-elle pertinente ?

- [ ] Oui
- [ ] Non

#### Comment tester ?

- S’il est présent, le contenu de l’attribut `alt` est pertinent ;
- S’il est présent, le contenu de l’attribut `title` est pertinent ;
- S’il est présent, le contenu de l’attribut WAI-ARIA `aria-label` est pertinent ;
- S’il est présent, le passage de texte associé via l’attribut WAI-ARIA `aria-labelledby` est pertinent.

Une alternative textuelle pertinente décrit précisémment l'image. Par exemple "Affiche du film : Une jeune femme blonde observe des enfants jouer par la fenêtre en souriant" décrit une situation et son contexte alors que "Affiche du film" qui décrirait la même scène n'apporte aucune information.


## Couleur

### 3 Dans chaque page web, l’information ne doit pas être donnée uniquement par la couleur. Cette règle est-elle respectée ?

- [ ] Oui
- [ ] Non

#### Comment tester ?

1. Retrouver dans le document les informations données par la couleur dans un mot ou un ensemble de mots ;
2. Pour chacune de ces informations, vérifier qu’il existe un autre moyen de récupérer cette information (présence d’un attribut title, d’une icône ou d’un effet graphique de forme ou de position, un effet typographique…) ;
3. Si c’est le cas pour chaque information, le test est validé.

### 4 Dans chaque page web, le contraste entre la couleur du texte et la couleur de son arrière-plan est-il suffisamment élevé ?

- [ ] Oui
- [ ] Non

#### Comment tester ?

Utilisez l'outil suivant :

https://webaim.org/resources/contrastchecker/

Les textes de plus de 24px doivent passer le test Large Text WCAG AA.
Les textes de 24px ou moins doivent passer le test Normal Text WCAG AA.


## Multimédia

### 5 Chaque média pré-enregistré a-t-il, si nécessaire, une transcription textuelle ou une audiodescription ?

- [ ] Oui
- [ ] Non

#### Comment tester ?

1. Retrouver dans le document les médias temporels (éléments `<audio>`, `<video>` ou `<object>`) qui nécessitent une transcription textuelle ;
2. Pour chaque média temporel seulement audio, vérifier la présence d’une transcription textuelle :
- Soit accessible au moyen d’un bouton ou d’un lien adjacent (une URL ou une ancre) ;
- Soit adjacente clairement identifiable.
3. Si c’est le cas pour chaque média temporel, le test est validé.

## Liens

### 6 Chaque lien est-il explicite ?

- [ ] Oui
- [ ] Non

#### Comment tester ?

1. Retrouver dans le document les liens texte ;
2. Pour chaque lien texte, vérifier que ce qui permet d’en comprendre la fonction et la destination est :
- Soit l’intitulé du lien seul ;
- Soit le contexte du lien.
3. Si c’est le cas pour chaque lien texte, le test est validé.

## Formulaires

### 7 Chaque champ de formulaire a-t-il un label ?

- [ ] Oui
- [ ] Non

#### Comment tester ?

1. Retrouver dans le document les champs de formulaire ;
2. Pour chaque champ de formulaire, vérifier que le champ de formulaire remplit un des cas suivants:
- Possède un attribut WAI-ARIA aria-labelledby référençant un passage de texte identifié ;
- Possède un attribut WAI-ARIA aria-label ;
- Est associé à un élément <label> ayant un attribut for ;
- Possède un attribut title ;
3. Si c’est le cas pour champ de formulaire, le test est validé.


## Navigation

### 8 Chaque page dispose-t-elle de deux systèmes de navigation différents, au moins ?

- [ ] Oui
- [ ] Non

#### Comment tester

Vérifier si la page répond à l'un des cas suivants :

- Un menu de navigation et un plan du site sont présents ;
- Un menu de navigation et un moteur de recherche sont présents ;
- Un moteur de recherche et un plan du site sont présents.

### 9 Dans chaque page, le menu et les barres de navigation sont-ils toujours à la même place (sauf page d'accueil) ?

- [ ] Oui
- [ ] Non

### 10 Tous les éléments interactifs (liens, formulaires, boutons) de la page sont-ils accessibles en navigation au clavier ?

- [ ] Oui
- [ ] Non