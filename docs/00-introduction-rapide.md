---
marp: true
theme: default
paginate: true
---

# Introduction Rapide à Alpine.js

## Objectif
Comprendre ce qu'est Alpine.js en moins de 2 minutes.

---

## 1. C'est quoi ? (Le "Pourquoi")

Alpine.js est un framework JavaScript minimaliste conçu pour ajouter de l'interactivité directement dans votre HTML.

> 💡 **Analogie** : "Alpine est à JavaScript ce que Tailwind est au CSS."

Au lieu d'écrire des scripts séparés pour gérer des écouteurs d'événements et des changements d'état, vous déclarez le comportement directement sur vos éléments HTML.

*   **Léger** : ~7kb gzippé (vs React/Vue qui sont plus lourds).
*   **Simple** : Pas de build step (npm run dev etc...) nécessaire pour démarrer, un simple CDN suffit.
*   **Philosophie** : "Locality of Behavior" (Le comportement reste à côté de la structure).

---

## 2. Comment ça marche ? (Le "Comment")

Pas de `document.querySelector` ni de classes complexes. Tout se passe avec des **directives** (commençant par `x-`).

### Exemple en un coup d'œil
Un bouton qui ouvre/ferme un menu.

**En Vanilla JS (Classique) :**
Il faudrait sélectionner le bouton, sélectionner le menu, ajouter un listener 'click', gérer une classe 'hidden'... Le code est loin du HTML.

---

### En Alpine.js :

```html
<div x-data="{ open: false }">
    <button @click="open = !open">Menu</button>
 
    <div x-show="open">
        Contenu du menu...
    </div>
</div>
```

1.  `x-data="{ open: false }"` : On déclare un petit bout de mémoire (état) directement ici.
2.  `@click="open = !open"` : Au clic, on inverse la valeur.
3.  `x-show="open"` : Si `open` est vrai, j'affiche. Sinon, je cache.

C'est tout. 👌
