# Alpine.js - Cheatsheet Rapide

## Installation

### CDN (Production)
```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

### NPM
```bash
npm install alpinejs
```

```javascript
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()
```

## Directives Core

| Directive      | Syntaxe                   | Description                             | Exemple                            |
| -------------- | ------------------------- | --------------------------------------- | ---------------------------------- |
| `x-data`       | `x-data="{ key: value }"` | Déclare un composant avec état          | `<div x-data="{ open: false }">`   |
| `x-show`       | `x-show="expression"`     | Toggle `display: none`                  | `<div x-show="open">`              |
| `x-if`         | `x-if="expression"`       | Ajoute/Retire du DOM (sur `<template>`) | `<template x-if="isAdmin">`        |
| `x-for`        | `x-for="item in items"`   | Boucle (sur `<template>`)               | `<template x-for="user in users">` |
| `x-on` / `@`   | `@event="handler"`        | Écoute événement                        | `<button @click="count++">`        |
| `x-bind` / `:` | `:attr="value"`           | Lie attribut                            | `<input :value="name">`            |
| `x-model`      | `x-model="variable"`      | Binding bidirectionnel                  | `<input x-model="username">`       |
| `x-text`       | `x-text="expression"`     | Injecte texte                           | `<span x-text="count"></span>`     |
| `x-html`       | `x-html="expression"`     | Injecte HTML                            | `<div x-html="richContent"></div>` |
| `x-init`       | `x-init="code"`           | Exécuté à l'initialisation              | `x-init="loadData()"`              |
| `x-cloak`      | `x-cloak`                 | Masque avant init Alpine                | `<div x-cloak>`                    |
| `x-transition` | `x-transition`            | Ajoute transitions CSS                  | `<div x-show="open" x-transition>` |
| `x-ref`        | `x-ref="name"`            | Référence élément                       | `<input x-ref="emailField">`       |

## Modificateurs d'Événements

| Modificateur      | Description                     | Exemple                             |
| ----------------- | ------------------------------- | ----------------------------------- |
| `.prevent`        | `event.preventDefault()`        | `@submit.prevent="save()"`          |
| `.stop`           | `event.stopPropagation()`       | `@click.stop="toggle()"`            |
| `.outside`        | Détecte clic en dehors          | `@click.outside="close()"`          |
| `.window`         | Écoute sur `window`             | `@keydown.window.escape="close()"`  |
| `.document`       | Écoute sur `document`           | `@scroll.document="handleScroll()"` |
| `.once`           | Exécute une seule fois          | `@click.once="init()"`              |
| `.debounce`       | Debounce (300ms par défaut)     | `@input.debounce="search()"`        |
| `.debounce.500ms` | Debounce personnalisé           | `@input.debounce.500ms="search()"`  |
| `.throttle`       | Throttle (250ms par défaut)     | `@scroll.throttle="update()"`       |
| `.self`           | Uniquement si event.target = el | `@click.self="close()"`             |

## Modificateurs de Touches

| Modificateur             | Touche    | Exemple                          |
| ------------------------ | --------- | -------------------------------- |
| `.enter`                 | Enter     | `@keydown.enter="submit()"`      |
| `.escape`                | Escape    | `@keydown.escape="close()"`      |
| `.space`                 | Espace    | `@keydown.space="toggle()"`      |
| `.tab`                   | Tab       | `@keydown.tab="nextField()"`     |
| `.shift`                 | Shift     | `@keydown.shift="multiSelect()"` |
| `.ctrl`                  | Ctrl      | `@keydown.ctrl.s="save()"`       |
| `.cmd`                   | Cmd (Mac) | `@keydown.cmd.k="search()"`      |
| `.up/.down/.left/.right` | Flèches   | `@keydown.up="previous()"`       |

## Magic Properties

| Property    | Description             | Exemple                         |
| ----------- | ----------------------- | ------------------------------- |
| `$el`       | Élément DOM courant     | `@click="$el.remove()"`         |
| `$refs`     | Accès aux `x-ref`       | `$refs.emailInput.focus()`      |
| `$watch`    | Observer changements    | `$watch('count', v => log(v))`  |
| `$dispatch` | Émettre événement       | `$dispatch('saved', { id: 1 })` |
| `$nextTick` | Attendre rendu          | `$nextTick(() => focus())`      |
| `$root`     | Élément racine `x-data` | `$root.querySelector('input')`  |
| `$data`     | Accès aux données       | `$data.username`                |
| `$id()`     | ID unique               | `$id('dropdown')`               |
| `$store`    | Accès au store global   | `$store.cart.items`             |

## Transitions

### Durée
```html
x-transition.duration.500ms
```

### Types
```html
x-transition.opacity
x-transition.scale
x-transition.scale.50
```

### Personnalisées
```html
x-transition:enter="transition ease-out duration-300"
x-transition:enter-start="opacity-0 transform scale-90"
x-transition:enter-end="opacity-100 transform scale-100"
x-transition:leave="transition ease-in duration-300"
x-transition:leave-start="opacity-100 transform scale-100"
x-transition:leave-end="opacity-0 transform scale-90"
```

## Binding Classes/Styles

### Classes Conditionnelles
```html
:class="{ 'active': isActive, 'disabled': !canEdit }"
```

### Classes Dynamiques
```html
:class="count > 5 ? 'text-red-500' : 'text-green-500'"
```

### Styles Inline
```html
:style="{ color: isActive ? 'red' : 'blue' }"
```

## Composants Réutilisables

### Définir un Composant
```javascript
document.addEventListener('alpine:init', () => {
    Alpine.data('dropdown', () => ({
        open: false,
        
        toggle() {
            this.open = !this.open
        },
        
        close() {
            this.open = false
        }
    }))
})
```

### Utiliser le Composant
```html
<div x-data="dropdown">
    <button @click="toggle()">Menu</button>
    <div x-show="open" @click.outside="close()">...</div>
</div>
```

## Store Global (Alpine.store)

### Définir un Store
```javascript
document.addEventListener('alpine:init', () => {
    Alpine.store('cart', {
        items: [],
        total: 0,
        
        add(item) {
            this.items.push(item)
            this.total += item.price
        },
        
        remove(id) {
            const item = this.items.find(i => i.id === id)
            this.items = this.items.filter(i => i.id !== id)
            this.total -= item.price
        }
    })
})
```

### Utiliser le Store
```html
<div x-data>
    <p x-text="$store.cart.items.length"></p>
    <p x-text="`Total: ${$store.cart.total}€`"></p>
    <button @click="$store.cart.add({ id: 1, price: 10 })">Ajouter</button>
</div>
```

## Plugins Utiles

### Alpine Focus
```javascript
import focus from '@alpinejs/focus'
Alpine.plugin(focus)
```

```html
<div x-data x-trap="isOpen">...</div>
```

### Alpine Collapse
```javascript
import collapse from '@alpinejs/collapse'
Alpine.plugin(collapse)
```

```html
<div x-show="open" x-collapse>...</div>
```

### Alpine Intersect
```javascript
import intersect from '@alpinejs/intersect'
Alpine.plugin(intersect)
```

```html
<div x-intersect="loadMore()">...</div>
```

### Alpine Persist
```javascript
import persist from '@alpinejs/persist'
Alpine.plugin(persist)
```

```html
<div x-data="{ count: $persist(0) }">...</div>
```

## Patterns Courants

### Computed Properties
```javascript
x-data="{
    firstName: 'John',
    lastName: 'Doe',
    get fullName() {
        return `${this.firstName} ${this.lastName}`
    }
}"
```

### Watchers
```javascript
x-init="$watch('search', value => {
    console.log('Search changed:', value)
})"
```

### Init avec Fetch
```javascript
x-init="items = await (await fetch('/api/items')).json()"
```

### Debounced Search
```html
<input 
    x-model="query"
    @input.debounce.500ms="search()">
```

### Click Outside
```html
<div 
    x-show="open"
    @click.outside="open = false">
</div>
```

### Keyboard Shortcuts
```html
<div @keydown.window.ctrl.s.prevent="save()">
```

## Anti-Patterns à Éviter

❌ **NE PAS mélanger avec jQuery**
```html
<!-- Mauvais -->
<button onclick="$('#menu').toggle()">
```

✅ **Utiliser Alpine**
```html
<!-- Bon -->
<button @click="open = !open">
```

---

❌ **NE PAS manipuler le DOM directement**
```javascript
// Mauvais
document.getElementById('count').innerHTML = count
```

✅ **Laisser Alpine gérer**
```html
<!-- Bon -->
<span x-text="count"></span>
```

---

❌ **NE PAS oublier `<template>` avec `x-for`**
```html
<!-- Mauvais - NE FONCTIONNE PAS -->
<li x-for="item in items"></li>
```

✅ **Toujours utiliser `<template>`**
```html
<!-- Bon -->
<template x-for="item in items">
    <li x-text="item"></li>
</template>
```

## Débogage

### Afficher l'État
```html
<pre x-text="JSON.stringify($data, null, 2)"></pre>
```

### Logger les Changements
```javascript
x-init="$watch('count', value => console.log('Count:', value))"
```

### Inspecter avec DevTools
```javascript
// Dans la console
Alpine.version // Version d'Alpine
Alpine.$data(element) // Données d'un élément
```

## Ressources

- 📖 **Doc Officielle** : [alpinejs.dev](https://alpinejs.dev)
- 🎓 **Exemples Skill** : Voir `examples.md` pour cas d'usage avancés
- 🔧 **Guide Complet** : Voir `SKILL.md` pour documentation exhaustive
- 🌐 **Playground** : [alpinejs.dev/playground](https://alpinejs.dev/playground)

## Support TypeScript

```typescript
declare global {
    interface Window {
        Alpine: any
    }
}

import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()

export interface DropdownData {
    open: boolean
    toggle(): void
    close(): void
}

Alpine.data('dropdown', (): DropdownData => ({
    open: false,
    toggle() { this.open = !this.open },
    close() { this.open = false }
}))
```

---

**Astuce** : Imprime cette cheatsheet et garde-la à portée de main ! 🚀
