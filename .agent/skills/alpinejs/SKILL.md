---
name: Alpine.js Expert
description: Guide l'agent pour développer avec Alpine.js en suivant les principes de locality of behavior et réactivité déclarative
---

# Skill : Alpine.js Expert

## Objectif
Ce skill permet à l'agent de maîtriser le framework **Alpine.js** et de l'utiliser efficacement dans des contextes server-side (Laravel Blade, PHP, etc.) pour ajouter de l'interactivité sans la complexité des SPA.

## Philosophie Alpine.js

### Principes Fondamentaux
- **Locality of Behavior** : Le comportement reste proche de la structure HTML
- **Déclaratif > Impératif** : Toujours privilégier `x-data`, `x-bind`, `x-on` plutôt que `document.querySelector`
- **Légèreté** : ~7kb gzippé, pas de build step nécessaire
- **Réactivité** : La réactivité de Vue/React avec la simplicité de jQuery

> **Analogie** : "Alpine est à JavaScript ce que Tailwind est au CSS."

## Directives Essentielles

### 1. `x-data` : Le Cœur du Composant
Définit un composant et son état local.

```html
<div x-data="{ count: 0, open: false }">
    <!-- Tout ce qui est ici a accès à count et open -->
</div>
```

**Utilisation avancée : Composants réutilisables**
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

### 2. `x-show` : Visibilité (CSS)
Affiche/Masque un élément avec `display: none`.

```html
<div x-show="open">Je suis visible !</div>
```

**Avec transitions**
```html
<div x-show="open" x-transition>
    Apparition en douceur...
</div>
```

### 3. `x-if` : Conditionnel (DOM)
Ajoute/Retire physiquement l'élément du DOM. ⚠️ **Doit utiliser `<template>`**

```html
<template x-if="isAdmin">
    <button class="btn-danger">Supprimer le compte</button>
</template>
```

**Quand utiliser `x-if` vs `x-show` ?**
- `x-show` : Toggle fréquent (menu, modal)
- `x-if` : Contenu conditionnel lourd qui ne doit pas exister dans le DOM

### 4. `x-for` : Boucles
Itère sur un tableau. ⚠️ **Doit utiliser `<template>`**

```html
<ul>
    <template x-for="user in users" :key="user.id">
        <li x-text="user.name"></li>
    </template>
</ul>
```

### 5. `x-on` (ou `@`) : Écoute d'Événements
Écoute les événements DOM standards.

```html
<button @click="count++">Incrémenter</button>
<input @input="console.log($event.target.value)">
```

**Modificateurs utiles**
- `@click.outside` : Détecte les clics en dehors de l'élément
- `@keydown.escape` : Détecte la touche Échap
- `@keydown.window` : Écoute sur toute la fenêtre
- `@submit.prevent` : Empêche le comportement par défaut

### 6. `x-bind` (ou `:`) : Attributs Dynamiques
Lie la valeur d'un attribut HTML à une expression JS.

```html
<button :disabled="count > 5">Trop haut !</button>
<div :class="{ 'bg-red-500': hasError }"></div>
```

### 7. `x-model` : Binding Bidirectionnel
Synchronise un input avec une donnée.

```html
<input type="text" x-model="username">
<p>Bonjour, <span x-text="username"></span></p>
```

### 8. `x-text` / `x-html` : Contenu Dynamique
Injecte du texte ou du HTML dans un élément.

```html
<span x-text="count"></span>
<div x-html="richContent"></div>
```

### 9. `x-init` : Initialisation
Exécuté lors de l'initialisation du composant. Idéal pour les requêtes API.

```html
<div 
    x-data="{ posts: [] }" 
    x-init="posts = await (await fetch('/api/posts')).json()">
    <!-- Les posts sont chargés ici -->
</div>
```

### 10. `x-cloak` : Anti-FOUC (Flash of Unstyled Content)
Masque l'élément jusqu'à ce qu'Alpine soit prêt.

**Dans le `<head>` ou fichier CSS**
```html
<style>
    [x-cloak] { display: none !important; }
</style>
```

**Dans le HTML**
```html
<div x-data x-cloak>
    Je suis visible uniquement quand Alpine est prêt !
</div>
```

## Magic Properties (Propriétés Magiques)

### `$el` : Référence à l'Élément DOM
```html
<button @click="$el.innerHTML = 'Cliqué !'">Cliquez-moi</button>
```

### `$refs` : Accès aux Éléments Référencés
Alternative déclarative à `document.getElementById`.

```html
<div x-data>
    <input type="text" x-ref="usernameInput">
    <button @click="$refs.usernameInput.focus()">Focus</button>
</div>
```

### `$watch` : Observer des Changements
Surveille les changements d'une variable.

```html
<div 
    x-data="{ open: false }" 
    x-init="$watch('open', value => console.log('Menu:', value))">
    <button @click="open = !open">Basculer</button>
</div>
```

### `$dispatch` : Communication Entre Composants
Déclenche un événement personnalisé qui remonte vers les parents.

**Émetteur (enfant)**
```html
<button @click="$dispatch('notify', { message: 'Sauvegardé !' })">
    Sauvegarder
</button>
```

**Récepteur (parent)**
```html
<div @notify="alert($event.detail.message)">
   <!-- Le bouton est ici -->
</div>
```

### `$nextTick` : Attendre le Rendu
Force l'attente de la fin du rendu visuel.

```html
<div x-data="{ open: false }">
    <button @click="
        open = true; 
        $nextTick(() => $refs.searchInput.focus()); 
    ">Search</button>
    
    <input x-show="open" x-ref="searchInput">
</div>
```

## Patterns Courants

### 1. Dropdown Menu
```html
<div x-data="{ open: false }" class="relative">
    <button @click="open = !open">Options</button>
    
    <div 
        x-show="open" 
        @click.outside="open = false"
        x-transition
        class="absolute bg-white shadow-lg p-4">
        <a href="#">Éditer</a>
        <a href="#">Supprimer</a>
    </div>
</div>
```

### 2. Modale
```html
<div x-data="{ isOpen: false }">
    <button @click="isOpen = true">Ouvrir Modale</button>
    
    <div 
        x-show="isOpen" 
        class="fixed inset-0 bg-black/50 flex items-center justify-center">
        <div 
            @click.outside="isOpen = false"
            @keydown.window.escape="isOpen = false"
            class="bg-white p-8 rounded shadow-xl">
            <h2>Attention</h2>
            <p>Êtes-vous sûr ?</p>
            <button @click="isOpen = false">Fermer</button>
        </div>
    </div>
</div>
```

### 3. Chargement de Données Asynchrones
```html
<div 
    x-data="{ isLoading: true, users: [] }" 
    x-init="
        const response = await fetch('https://api.example.com/users');
        users = await response.json();
        isLoading = false;
    ">
    
    <!-- Spinner -->
    <div x-show="isLoading">Chargement...</div>
    
    <!-- Liste -->
    <ul x-show="!isLoading">
        <template x-for="user in users" :key="user.id">
            <li x-text="user.name"></li>
        </template>
    </ul>
</div>
```

### 4. Recherche avec Debounce
```html
<div x-data="{ 
    search: '', 
    results: [],
    async searchArticles() {
        const response = await fetch(`/api/search?q=${this.search}`);
        this.results = await response.json();
    }
}">
    <input 
        type="text" 
        x-model="search"
        @input.debounce.500ms="searchArticles()">
    
    <ul>
        <template x-for="article in results" :key="article.id">
            <li x-text="article.title"></li>
        </template>
    </ul>
</div>
```

## Bonnes Pratiques

### ✅ À Faire
1. **Utiliser `x-data` comme scope** : Chaque composant doit avoir son propre `x-data`
2. **Privilégier la déclaration** : Éviter `document.querySelector`, utiliser `x-ref` et `$refs`
3. **Extraire la logique complexe** : Utiliser `Alpine.data()` pour composants réutilisables
4. **Utiliser `:key` dans `x-for`** : Améliore les performances de rendu
5. **Gérer l'état de chargement** : Toujours afficher un loader lors de requêtes async
6. **Ajouter `x-cloak`** : Éviter le flash de contenu non stylisé

### ❌ À Éviter
1. **Ne pas mélanger jQuery et Alpine** : Choisir l'un ou l'autre
2. **Ne pas manipuler le DOM directement** : Laisser Alpine gérer la réactivité
3. **Éviter les états globaux complexes** : Alpine n'est pas Vuex/Redux
4. **Ne pas oublier `<template>` avec `x-for` et `x-if`** : Obligatoire !
5. **Ne pas surcharger `x-data` avec trop de logique** : Extraire dans `Alpine.data()`

## Contexte d'Utilisation Idéal

Alpine.js est parfait pour :
- 🎯 **Applications server-side** (Laravel Blade, PHP, Django, Rails)
- 🎯 **Enrichissement progressif** de pages HTML existantes
- 🎯 **Interactivité légère** (dropdowns, modales, tabs, accordions)
- 🎯 **Formulaires dynamiques** avec validation côté client
- 🎯 **Filtrage/recherche en temps réel**

Alpine.js n'est **PAS** idéal pour :
- ❌ SPA complexes avec routing (utilisez Vue/React)
- ❌ Applications temps réel avec WebSockets complexes
- ❌ Gestion d'état globale massive (utilisez Vuex/Redux)

## Installation

### Via CDN (Recommandé pour démarrer)
```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

### Via NPM (Pour projets avec build)
```bash
npm install alpinejs
```

```javascript
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()
```

## Ressources

- **Documentation Officielle** : [alpinejs.dev](https://alpinejs.dev)
- **GitHub** : [alpinejs/alpine](https://github.com/alpinejs/alpine)
- **Exemples Communautaires** : [Alpine Toolbox](https://www.alpinetoolbox.com)
- **Playground** : [alpinejs.dev/playground](https://alpinejs.dev/playground)

## Principes d'Application

Lorsque tu développes avec Alpine.js :
1. Suivre l'approche "Locality of Behavior" (comportement proche de la structure)
2. Privilégier Alpine pour toute interactivité côté client
3. Intégrer harmonieusement avec le backend (Laravel Blade, PHP, etc.)
4. Utiliser Tailwind CSS pour le styling (synergie naturelle avec Alpine)
5. Consulter `examples.md` et `cheatsheet.md` de ce skill pour des patterns avancés
