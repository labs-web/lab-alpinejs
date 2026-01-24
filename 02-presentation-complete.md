# 📘 Tutoriel 02 : Vue d’ensemble des Directives

Après le compteur, explorons les directives essentielles pour manipuler le DOM.

## 1. Visibilité : `x-show` vs `x-if`

### `x-show`
Bascule la propriété CSS `display: none`. L'élément reste dans le DOM.
```html
<div x-data="{ open: false }">
    <button @click="open = !open">Toggle</button>
    <div x-show="open">Je suis caché/affiché via CSS</div>
</div>
```

### `x-if`
Ajoute ou supprime physiquement l'élément du DOM. **Doit être placé sur une balise `<template>`.**
```html
<div x-data="{ open: false }">
    <button @click="open = !open">Toggle</button>
    <template x-if="open">
        <div>Je suis ajouté/supprimé du DOM</div>
    </template>
</div>
```

---

## 2. Binding d'Attributs : `x-bind` (ou `:`)
Permet de rendre dynamiques les attributs HTML (classes, styles, disabled, placeholder...).

```html
<div x-data="{ isRed: false }">
    <!-- Syntaxe longue : x-bind:class -->
    <!-- Syntaxe courte : :class -->
    <div :class="{ 'bg-red-500': isRed, 'bg-gray-200': !isRed }" class="p-4 transition">
        Boîte colorée
    </div>
    
    <button @click="isRed = !isRed">Changer couleur</button>
</div>
```

---

## 3. Binding Bidirectionnel : `x-model`
Synchronise un champ de formulaire avec une variable de données. Indispensable pour les formulaires.

```html
<div x-data="{ message: '' }">
    <input type="text" x-model="message" placeholder="Écrivez ici..." class="border p-2">
    
    <p>Vous avez écrit : <span x-text="message"></span></p>
</div>
```

---

## 4. Anti-Flash : `x-cloak`
Lorsque la page charge, Alpine met quelques millisecondes à s'initialiser. Pendant ce temps, vos éléments `x-show="false"` peuvent apparaître brièvement. C'est le FOUC (Flash of Unstyled Content).

**Solution :**
1.  Ajoutez ce CSS globalement :
    ```css
    [x-cloak] { display: none !important; }
    ```
2.  Ajoutez l'attribut `x-cloak` sur vos composants racines ou éléments cachés par défaut.
    ```html
    <div x-data="{ open: false }" x-cloak>
        <!-- ... -->
    </div>
    ```
