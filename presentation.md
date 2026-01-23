---
marp: true
theme: default
paginate: true
---

# 🏔️ Découverte d'Alpine.js

### "Le Tailwind du Comportement"

---

## 🎯 Objectifs

- Comprendre la philosophie d'Alpine.js
- Manipuler les directives principales (`x-data`, `x-bind`, `x-on`)
- Créer de l'interactivité sans "Build Step" complexe

---

## 📚 Vocabulaire (Diction)

- **Déclaratif** : On décrit *ce qu'on veut*, pas *comment* le faire étape par étape.
- **Réactif** : L'interface se met à jour automatiquement quand les données changent.
- **Directive** : Attribut HTML spécial commençant par `x-` (ex: `x-on:click`).

---

## 🛠️ Pourquoi Alpine.js ?

> "Locality of Behavior"

Au lieu de séparer le HTML et le JS, on garde la logique **sur l'élément concerné**.

Idéal pour Laravel (Blade) et les projets qui ne sont PAS des SPA (Single Page Apps).

---
