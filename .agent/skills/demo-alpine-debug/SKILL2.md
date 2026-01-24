---
name: demo-alpine-debug
description: Procédure avancée pour débugger les composants Alpine.js
---

# 🕵️ Skill: Alpine.js Debugging

Ce skill est activé quand l'utilisateur demande de l'aide pour comprendre pourquoi son composant Alpine ne réagit pas.

## 1. La Check-list Rapide (Quick Fix)
Avant de sortir l'artillerie lourde, vérifie toujours ces points :
1.  **Alpine est chargé ?** -> Vérifier `<script>` dans le `head` ou `app.js`.
2.  **Syntaxe :** -> Pas de `x-clik` (typo), parenthèses oubliées `Function()` ?
3.  **Nestin :** -> Le `x-data` englobe bien l'élément `x-on` ?

## 2. La technique "Magic Property" ($data)
Pour voir l'état courant d'un composant, propose d'injecter ce snippet temporaire dans le HTML :

```html
<!-- DEBUG PANEL -->
<pre x-text="JSON.stringify($data, null, 2)" class="bg-gray-100 p-2 text-xs border rounded"></pre>
```

## 3. La technique "Console Log" ($watch)
Si une variable change mais que l'UI ne bouge pas, ajoute un watcher dans le `x-init` :

```html
<div x-init="$watch('open', value => console.log('Open changed to:', value))">...</div>
```

## 4. Outils (DevTools)
Rappelle à l'utilisateur d'installer l'extension Chrome/Firefox **Alpine.js Devtools** pour une inspection visuelle.
