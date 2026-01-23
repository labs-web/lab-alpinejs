---
marp: true
theme: default
paginate: true
---

# 🏔️ Alpine.js : La Présentation Complète

Une vue d'ensemble exhaustive pour maîtriser le framework.

---

## 1. Philosophie & Origines

### Le Problème du "Vanilla JS"
- Sélectionner des éléments (`document.querySelector`)
- Ajouter des Event Listeners manuellement
- Gérer l'état (classes CSS, attributs) manuellement
- **Résultat** : Code spaghetti, séparation forcée entre HTML et Comportement.

### La Solution Alpine
- Apporter la réactivité de Vue/React...
- ...avec la simplicité de jQuery...
- ...directement dans le HTML.

> "Your JavaScript is in your HTML, and that's okay."

---

## 2. Les Directives Fondamentales (État & Affichage)

### `x-data` : Le Cœur
Définit un composant et son état local (objet JS).
```html
<div x-data="{ count: 0, open: false }">
    <!-- Tout ce qui est ici a accès à count et open -->
</div>
```

### `x-show` : Visibilité
Affiche/Masque un élément (CSS `display: none`) selon une condition.
```html
<div x-show="open">Je suis visible !</div>
```

### `x-text` / `x-html` : Contenu
Injecte du texte ou du HTML.
```html
<span x-text="count"></span>
```

---

## 3. L'Interactivité

### `x-on` (ou `@`) : Écouter
Écoute les événements DOM standards.
```html
<button @click="count++">Incrémenter</button>
<input @input="console.log($event.target.value)">
```

### `x-bind` (ou `:`) : Attributs
Lie la valeur d'un attribut HTML à une expression JS.
```html
<button :disabled="count > 5">Trop haut !</button>
<div :class="{ 'bg-red-500': hasError }"></div>
```

### `x-model` : Binding Bidirectionnel
Synchronise un input avec une donnée.
```html
<input type="text" x-model="username">
<p>Bonjour, <span x-text="username"></span></p>
```

---

## 4. Structures de Contrôle

### `x-if` : Conditionnel (DOM)
Ajoute/Supprime l'élément du DOM (>< `x-show`).
*Nécessite une balise `<template>`.*
```html
<template x-if="isAdmin">
    <button>Supprimer</button>
</template>
```

### `x-for` : Boucles
Itère sur un tableau.
*Nécessite une balise `<template>`.*
```html
<ul>
    <template x-for="item in items">
        <li x-text="item.name"></li>
    </template>
</ul>
```

---

## 5. La "Magie" (Magic Properties)

Des aides contextuelles fournies par Alpine.

- **`$el`** : L'élément DOM courant.
- **`$refs`** : Accéder aux éléments marqués par `x-ref`.
- **`$watch`** : Surveiller les changements d'une variable.
- **`$dispatch`** : Émettre un événement personnalisé (communication enfant > parent).
- **`$nextTick`** : Exécuter du code après la mise à jour du DOM.

```html
<div x-init="$watch('count', value => console.log(value))"></div>
```

---

## 6. Cycle de Vie & Chargement

### `x-init`
Exécuté lors de l'initialisation du composant.
```html
<div x-data="{ posts: [] }" x-init="posts = await (await fetch('/api')).json()">
    ...
</div>
```

### `x-cloak`
Attribut CSS pour cacher le HTML brut avant qu'Alpine ne se charge.
```css
[x-cloak] { display: none !important; }
```
```html
<div x-data x-cloak>
    Chargé !
</div>
```

---

## 7. Organisation du Code

Pour ne pas surcharger le HTML, on peut extraire la logique :

```javascript
document.addEventListener('alpine:init', () => {
    Alpine.data('dropdown', () => ({
        open: false,
        toggle() { this.open = !this.open }
    }))
})
```

```html
<div x-data="dropdown">
    <button @click="toggle">Menu</button>
</div>
```

---

## Conclusion

Alpine.js est l'outil parfait pour enrichir des pages rendues côté serveur (Laravel, Django, Rails) sans la complexité d'une SPA complète.

**Prêt pour la pratique ?** -> Tuto 1
