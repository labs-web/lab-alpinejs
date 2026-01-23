# 🧪 Lab Context

## 1. Objectif du Lab
Explorer **Alpine.js**, un framework JavaScript léger et déclaratif.
L'objectif est de maîtriser l'ajout d'interactivité dynamique dans des vues Blade (Laravel) sans la complexité d'une SPA.
Il permet de **remplacer ou compléter jQuery et le Vanilla JS complexe** par une approche plus déclarative.

**Localisation dans le Cursus :**
*   **Compétence validée** : `C3 (Développement Back-end)` - Enrichissement des Vues (Blade).
*   **Stack Technique** : Niveau **N2 (Adapter)** - Front.

    *   Objectif : Gestion d'état fluide et appels API (Fetch) sans lourdeur.

## 2. Travail à faire
1.  **Présentation (Marp)** :
    *   Philosophie : "Le Tailwind du comportement".
    *   Les directives clés : `x-data`, `x-bind`, `x-on`, `x-show`, `x-model`.
    *   Pourquoi l'utiliser dans un projet Laravel ?

2.  **Tutoriels Progressifs** :
    *   `00-introduction-rapide` : Présentation rapide, pourquoi et comment.
    *   `01-initialization` : Setup CDN et premier état réactif (Counter).
    *   `01-presentation-complete` : Vue d'ensemble exhaustive (Philosophie, Directives, Magie).
    *   `02-interactivity` : Gestion des évènements et visibilité (Dropdown/Modal).
    *   `03-async-data` : Consommation d'API avec `fetch` et `x-init`.

3.  **Application "Real World" (Fil Rouge)** :
    *   Créer une interface de **Filtrage dynamique** pour une liste d'éléments.
    *   Stack : HTML/Blade + Tailwind CSS + Alpine.js.
    *   Le but est de rendre une liste filtrable sans recharger la page.

## 3. Détails du Lab
*   **Version** : Alpine.js v3.x.
*   **Contrainte Pédagogique** : Commencer par l'approche CDN pour la simplicité, puis mentionner l'installation NPM.
*   **Focus** : "Locality of Behavior" (Comportement localisé dans le HTML).
