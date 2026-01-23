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

## 2. Les Directives Fondamentales (1/2)

### `x-data` : Le Cœur
Définit un composant et son état local (objet JS).
```html
<div x-data="{ count: 0, open: false }">
    <!-- Tout ce qui est ici a accès à count et open -->
</div>
```

---

## 2. Les Directives Fondamentales (2/2)

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

## 3. L'Interactivité (1/2)

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

---

## 3. L'Interactivité (2/2)

### `x-model` : Binding Bidirectionnel
Synchronise un input avec une donnée.
```html
<input type="text" x-model="username">
<p>Bonjour, <span x-text="username"></span></p>
```

---

## 4. Structures de Contrôle (1/3) : Le concept de `<template>`

En HTML standard, la balise `<template>` est un mécanisme pour détenir du contenu HTML côté client qui **n'est pas rendu** lors du chargement de page.

Alpine utilise ce mécanisme pour ses directives structurelles (`x-if`, `x-for`).

### Pourquoi ?
Alpine a besoin d'un "modèle" inerte (non affiché) pour savoir quoi créer ou supprimer dynamiquement.

---

## 4. Structures de Contrôle (2/3) : `x-if`

### `x-if` : Conditionnel (DOM)
Ajoute ou retire physiquement l'élément du DOM (contrairement à `x-show` qui utilise CSS `display: none`).

```html
<div x-data="{ isAdmin: false }">
    
    <label>
        <input type="checkbox" x-model="isAdmin"> Mode Admin
    </label>

    <!-- Si isAdmin est faux : le bouton n'existe PAS dans le DOM -->
    <template x-if="isAdmin">
        <button class="btn-danger">Supprimer le compte</button>
    </template>

</div>
```

---

## 4. Structures de Contrôle (3/3) : `x-for`

### `x-for` : Boucles
Itère sur un tableau pour créer de multiples éléments.

```html
<ul>
    <!-- Pour chaque user, Alpine clone ce <li> -->
    <template x-for="user in users">
        <li x-text="user.name"></li>
    </template>
</ul>
```

---

## 5. Cycle de Vie & Chargement (1/2) : `x-init`

### `x-init`
Exécuté automatiquement lors de l'initialisation du composant. 
Idéal pour lancer des requêtes ou configurer des écouteurs.

```html
<div x-data="{ posts: [] }" 
     x-init="posts = await (await fetch('/api/posts')).json()">
    <!-- Les posts sont chargés ici -->
</div>
```

---

## 5. Cycle de Vie & Chargement (2/2) : `x-cloak`

### Le Problème (FOUC)
Le HTML s'affiche parfois avant que JS ne soit prêt, révélant du contenu brut.

### La Solution
Ajoutez ce style dans le `<head>` de votre page (dans une balise `<style>` ou un fichier CSS) :

```html
<style>
    [x-cloak] { display: none !important; }
</style>
```
```html
<div x-data x-cloak>
    Je suis visible uniquement quand Alpine est prêt !
</div>
```

---

## 6. La "Magie" (Magic Properties) (1/4)

Alpine fournit des propriétés magiques (commençant par `$`) pour accéder à des fonctionnalités avancées.

### `$el`
Référence à l'élément DOM courant.
```html
<button @click="$el.innerHTML = 'Cliqué !'">Cliquez-moi</button>
```

---

## 6. La "Magie" (Magic Properties) (2/4)

### `$refs`
Accède aux éléments marqués par `x-ref` (alternative déclarative à `document.getElementById`).
```html
<div x-data>
    <input type="text" x-ref="usernameInput">
    <button @click="$refs.usernameInput.focus()">Focus</button>
</div>
```

---

## 6. La "Magie" (Magic Properties) (3/4)

### `$watch`
Surveille les changements d'une variable et déclenche une action.
*(Souvent utilisé dans `x-init`)*

```html
<div x-data="{ open: false }" 
     x-init="$watch('open', value => console.log('Le menu est : ' + value))">
    <button @click="open = !open">Basculer</button>
</div>
```

---

## 6. La "Magie" (Magic Properties) (4/5)

### `$dispatch` : Communication Enfant -> Parent
Permet de déclencher un événement personnalisé (CustomEvent) qui "remonte" (bubbles) vers les éléments parents.
Très utile pour faire communiquer deux composants entre eux.

**L'émetteur (Enfant) :**
```html
<button @click="$dispatch('notify', { message: 'Sauvegardé !' })">
    Sauvegarder
</button>
```

**Le récepteur (Parent) :**
```html
<div @notify="alert($event.detail.message)">
   <!-- Le bouton est ici -->
</div>
```

---

## 6. La "Magie" (Magic Properties) (5/5)

### `$nextTick`
Alpine met à jour le DOM de façon asynchrone pour la performance.
Si vous essayez de manipuler un élément *juste après* avoir changé une donnée, il n'est peut-être pas encore visible.

`$nextTick` force l'attente de la fin du rendu visuel.

```html
<div x-data="{ open: false }">
    <button @click="
        open = true; 
        // Sans nextTick, le input est encore caché => focus() échoue
        $nextTick(() => $refs.searchInput.focus()); 
    ">Search</button>

    <input x-show="open" x-ref="searchInput">
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

**Prêt pour la pratique ?** -> [Tuto 2 : Interactivité](./03-interactivity.md)
