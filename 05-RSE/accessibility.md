--- 
theme: theme.json
author: Gaellan
date: May 23, 2024
paging: Page %d sur %d
---

# L'accessibilité web

## Définition

Faire en sorte que votre site puisse être consulté par tou-te-s

## Plan du cours

### Deux grands types d'accessibilité

### Les solutions techniques possibles pour chaque

### Design vs Accessibilité

### La législation en France

### Exercice pratique

### Pour aller plus loin

---

# Les deux grands types d'accessibilité

L'accessibilité c'est faire en sorte de rendre votre site utilisable par le plus grand nombre.

Pour palier à certaines difficultés que peuvent rencontrer les internautes, on va distinguer deux grands types ou deux grands axes d'accessibilité :

## L'accessibilité motrice

Comment se déplacer dans un site ou sur une page ?

## L'accessibilité cognitive

Comment consulter le contenu d'un site ou d'une page ?

---

# L'accessibilité motrice : la problématique

Si nous avons tendance à penser que tous les utilisateur-ice-s de nos sites peuvent utiliser une souris et un clavier ce n'est en vérité pas toujours le cas.
Pour celleux qui pour des raisons de coordination, de paralysies ou de toute forme d'altération des capacités motrices ne peuvent pas se servir des outils "classiques" de manipulation d'un ordinateur ou d'un téléphone, il nous faut prévoir des alternatives.

## Comment se déplacer sans souris ?

Lorsque pour n'importe quelle raison il est impossible de manipuler une souris, un trackpad ou autre dispositif similaire, on navigue souvent au clavier, le plus souvent à l'aide de la touche "Tabulation" (Parfois appellée Tab ou représentée par deux flêches). 

Pour tester rendez-vous sur https://bre01.sites.3wa.io/ et appuyez uniquement sur la touche Tab, vous devriez parcourir un par un tous les liens de la page.

## Comment se déplacer sans clavier ?

La plupart des technologies d'assistance telles que les contacteurs, agissent en "faisant croire" à l'ordinateur que la touche "Tabulation" a été appuyée ce qui permet d'utiliser le même comportement que pour une navigation au clavier.

---

# L'accessibilité motrice : les solutions

## La solution technique la plus simple : un HTML propre

La solution technique la plus simple est tout d'abord d'utiliser un HTML propre. Utiliser des boutons pour les boutons, des liens pour les liens, etc etc.

### L'impact du HTML sur l'accessibilité motrice

En HTML certains éléments sont considérés interactifs, ils peuvent avoir besoin d'une action de l'utilisateur-ice. Parmis ces éléments on trouve :

- les inputs `<input>`
- les liens `<a>`
- les boutons `<button>`
- ...

Par défaut un élément interactif peut attirer le focus de la page, il fait donc partie des éléments qui seront acessibles par la navigation au clavier. En revanche un élément "bricolé", par exemple au moyen d'une `<div>` n'est pas interactif par défaut, la navigation au clavier va donc l'ignorer.

## La solution technique de dernier recours : tabindex

Si vous ne pouvez pas, pour quelque raison que ce soit, modifier suffisamment le HTML pour le rendre accessible, vous allez peut-être devoir utiliser l'attribut `tabindex`.

### La documentation de tabindex 

https://developer.mozilla.org/fr/docs/Web/HTML/Global_attributes/tabindex

### Le principe

L'attribut universel `tabindex` permet de modifier l'ordre dans lequel la navigation au clavier va parcourir les éléments de votre page.

`tabindex` peut prendre trois types de valeur :

- une valeur négative : l'élément pourra capture le focus (vous pourrez utiliser dessus les méthodes JavaScript sur le focus) mais sera ignoré par la navigation au clavier

- 0 : l'ordre de lecture sera déterminé par le navigateur (généralement dans l'ordre du DOM)

- une valeur positive : La valeur va détrminer l'ordre de lecture de l'élément (si deux éléments ont la même valeur ils sont lus ans l'ordre du DOM)

#### Pourquoi en dernier recours ?

Si vous avez besoin d'utiliser `tabindex` c'est soit que l'on vous a imposé des contraintes qui rendent impossible la mise en place d'un HTML propre et sémantique, soit que vous avez un problème dans la sémantique de votre HTML. Assurez-vous donc que vous ne pouvez pas faire autrement avant d'utiliser `tabindex`.

---

# Exemple d'utilisation de tabindex

Imaginons que pour des raisons de design vous avez du bricoler un select à partir de différentes `<div`:

```html
<form method="..." action="...">
    <fieldset>
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" />
    </fieldset>
    <p>
        Sélectionnez un rôle
    </p>
    <div class="customSelect">
        <div>Admin</div>
        <div>Editeur</div>
        <div>Membre du site</div>
    <div>
    <input type="hidden" id="role" name="role" value="" />
</form>

```

>💡Lorsque vous utilisez un `input type="hidden"` le navigateur fait automatiquement en sorte de retirer cet input de la navigation au clavier.

Si vous testez le code ci-dessus vous verrez que la navigation au clavier ne s'arrêtera que sur l'`input type="text"`. 

---

# La solution de l'exemple tabindex

Testez ensuite le code ci-dessous :

```html
<form method="..." action="...">
    <fieldset>
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" />
    </fieldset>
    <p>
        Sélectionnez un rôle
    </p>
    <div class="customSelect" tabindex="0">
        <div tabindex="0">Admin</div>
        <div tabindex="0">Editeur</div>
        <div tabindex="0">Membre du site</div>
    <div>
    <input type="hidden" id="role" name="role" value="" />
</form>
```

La navigation au clavier s'arrêtera d'abord sur la `<div>` générale du select puis sur chacune des `<div>` filles.

CodePen de démonstration : https://codepen.io/gaellan/pen/JjxBKZL

---

# L'accessibilité cognitive : la problématique

Exactement comme nous avons tendance à penser que tout le monde peut utiliser une souris et/ou un clavier, nous avons tendance à partir du principe que tout le monde peut voir, entendre et parler. En plus de potentielles modifications de la vue, de la parole ou de l'audition peuvent s'ajouter des profils dits "neuro-atypiques" comme par exemple l'autisme, le TDAH ou les troubles dys.

Comment faire donc pour que tous nos utilisateurs et utilisatrices avec toute leur diversité puisse accéder à nos contenus et en profiter ?

En essayant au mieux de fournir des solutions alternatives qui prennent en compte cette diversité et en tâchant toujours de multiplier les moyens d'accès et de consultation des contenus.

---

# Accessibilité cognitive : troubles visuels

## Cécité

Lorsqu'une personne n'a pas ou plus l'usage de la vue, habituellement iel va utiliser un lecteur d'écran.

Une lecteur d'écran c'est un dispositif qui va se placer entre l'utilisateur et votre contenu pour le lui rendre accessible.

### Lecteur d'écran sonore

Le lecteur d'écran parcourt le contenu de votre page et le prononce à voix-haute.

Une vidéo de démonstration et explication des lecteurs d'écrans : https://youtu.be/jfih-ilTyGE?si=MWCycWtXwdRREaae

### Lecteur d'écran braille

Le lecteur d'écran parcourt votre contenu, le traduit en braille et l'envoie sur un afficheur braille.

Une vidéo de démonstration d'un lecteur braille : https://www.youtube.com/watch?v=Y1G4F5Cic1U&ab_channel=DesignGouv

## Champ de vision

Sans pour autant pouvoir parler de cécité il existe de nombreuses variations du champ de vision des utilisateur-ices. Certain-e-s ne percoivent qu'une moitié de l'écran, d'autre ont un rétrécissement qui fait qu'il ne voient que le centre de l'écran, d'autres, tout sauf le centre, etc etc.

Une solution possible et de proposer différentes mises en page de votre site qui place l'information à différents endroits. Attention cependant c'est une solution longue à mettre en place puisqu'il vous faudra faire de multiples layouts et ça sur tous les breakpoints.

## Daltonisme

Il existe de mutiples formes et de multiples degrés de daltonisme (une altération de la perception des couleurs), la solution la plus simple pour y palier est de proposer un design avec des contrastes les plus marqués possibles et de ne pas uniquement utiliser la couleur pour différencier les informations dans un contenu (si vos liens sont à la fois soulignés et en couleur cela les rend plus accessibles par exemple).

---

# L'accessibilité cognitive : neuro-divergences

Neuro-atypique c'est un terme parapluie qui regroupe de nombreuses variations par rapport à ce que l'on considère comme le fonctionnement "typique" du cerveau.

Je ne vais pas pouvoir en faire une liste exhaustive et surtout chacune des nombreuses divergences a presque autant de façon de se matérialiser qu'il y a d'invividu-e-s donc on va essayer de tracer un portrait grossier de bonnes pratiques utiles pour tou-te-s.

## Autisme dit "de haut niveau"

Anciennement appelé syndrôme d'Asperger (terme à ne plus utiliser, Asperger était un scientifique nazi adepte de l'eugénisme), l'autisme dit de haut-niveau est une forme de neuro-divergence qui va surtout nous interesser pour des questions d'accessibilité des contenus images, vidéos et des menus / boutons d'action.

Dans les troubles qui vont de paire avec l'autisme il y a souvent des soucis de discernement des visages et des expressions, donc si vous utilisez ce genre de visuels pour faire passer une information : utilisez possiblement une figcaption qui précise qui est représenté si sur le visuel et l'interprétation que l'on doit faire de son expression.

Il y a souvent aussi des troubles liés à la compréhension de l'implicite, donc lorsque vous avez besoin que l'utilisateur-ice effectue une action soyez précis-e dans la description de l'action à faire ("Cliquez sur ... pour").

## Troubles dys

Le trouble dys probablement le plus connu est la dyslexie, qui pose entre autres de nombreux problèmes de lecture. Il existe des polices de caractères faites pour soulager la dyslexie mais elles présentent deux problèmes : elles sont très coûteuses et peuvent rendre la lecture difficile pour les personnes non dys. Une solution alternative est d'utiliser au maximum des polices sans-serif, comme Arial ou Verdana.

L'utilisation d'un fil d'ariane est ágelement à recommander pour permettre plus facilement de savoir où l'on est ans les méandres du contenu (c'est très utile pour les personnes dysmnésiques : troubles de la mémoire).

## TDAH

Le TDAH, anciennement appelé hyperactivité est une forme de neuro-divergence qui peut entre autre altérer la concentration et la motivation de façon drastique. Il est particulièrement à garder à l'esprit lorsque l'on travaille avec des gros formulaires (d'inscription, de configuration etc etc).

Une bonne pratique est de découper vos formulaires en étapes et d'en sauvegarder les contenus pour que vos utilisateur-ices puissent interrompre la saisie et y revenir plus tard sans avoir à partir de 0.

---

# Design vs Accessibilité

## Le problème

Une des sources principales de code non accessibles ce sont les design qui si ils sont très esthétiques ne se soucient par contre pas du tout de l'implémentation qui va en être faite. Ou bien si ils s'en soucient, le problème vient ensuite des budgets, trop serrés pour avoir le temps de mettre en place des alternatives accessibles.

Dans un monde idéal, nous aurions tous le temps, le budget et les ressources nécéssaires pour faire les choses biens et pour tout le monde. La réalité est le plus souvent beaucoup moins idyllique.

## Les solutions

Discuter. Il est encore très rare de parler d'accessibilité dans les cursus de développement il est tout aussi rare de parler de design inclusif dans les parcours de designers UI et UX. Parlez avec vos collègues et échangez. Pour la partie budget, si vous sentez les personnes receptives : essayez toujours, des fois ça marche. Argumentez pour plus de temps, plus de R&D, plus de formation, etc etc.

## Et en attendant

En attendant il n'y a pas d'autres choix que de faire des compromis. Parfois en glissant de l'accessibilité sauvage (des liens "Accéder directement au contenu" pas prévus dans les cahiers des charges), parfois en envoyant juste un mail en rappelant que ce qui est prévu ne répond pas aux normes d'accessibilité, parfois en faisant de la pédagogie. Dans l'état actuel des choses : faites du mieux que vous pouvez, c'est toujours ça de gagné :)

---

# La législation en France

Les règles de l'accessibilité numérique en France sont définies dans le RGAA 4 (Référentiel Général d'Amélioration de l'Accessibilité) disponible ici : https://accessibilite.numerique.gouv.fr/

## Qui est concerné

- Les services publics
- Les entreprises avec délégation de service public
- Les entreprises privées dont le Chiffre d'Affaire réalisé en France dépasse 250 millions d'euros

## Qu'est-ce qui doit être fait

- Mise en conformité du site avec le RGAA
- Mise en place d'une déclaration d'accessibilité (un exemple : https://www.monparcourshandicap.gouv.fr/accessibilite-numerique)
- Mise en place d'un moyen de contact dédié à l'accessibilité
- Mention obligatoire du statut de conformité sur la page d'accueil
- Un schéma du plan de prise en compte de l'accessibilité sur les trois prochaines années (https://accessibilite.numerique.gouv.fr/obligations/schema-pluriannuel/)


## Les risques

- une sanction de 2 000 € pour les communes de moins de 5 000 habitants par infraction constatée
- une sanction de 20 000 € pour les autres entités concernées par infraction constatée

Il y a 106 critères de conformité, 106 * 20000 (2,12M) , ça peut monter vite.

---

# Exercice pratique

Auditer l'accessibilité du site du Théâtre National de Bretagne : https://www.t-n-b.fr/

Mettez en place un Google Doc partagé pour toute la promotion dans lequel vous mettrez vos observations et répartissez-vous le travail pour tenter d'auditer l'accessibilité du site du TNB.

💡Le TNB comme beaucoup de structures culturelles a une délégation de mission de service public et est donc concerné par la règlementation sur l'accessibilité.

Les pages à auditer :

https://www.t-n-b.fr/
https://www.t-n-b.fr/le-tnb/avec-vous/en-famille/gretel-hansel-et-les-autres
https://www.t-n-b.fr/programmation/subsections=cinema


---

# Des ressources pour aller plus loin

- La lutine du web (FR) : https://www.lalutineduweb.fr/
- ffood (FR) : https://www.ffoodd.fr/
- Accessiblog (FR) : https://accessiblog.fr/
- Le blog d'Access42 (FR) : https://access42.net/blog/
- Le blog d'Empreinte Digitale (FR) : https://blog.empreintedigitale.fr/

