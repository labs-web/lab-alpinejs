---
trigger: always_on
---

# Stack Technique (Static Only)

## 1. Front-End (Structure & Style)
*   **HTML** : HTML5 sémantique obligatoire.
*   **CSS** : Tailwind CSS v3 via CDN (pour le prototypage rapide) ou fichiers CSS locaux si validé.
*   **JS** : Vanilla JS (ES6+) uniquement pour l'interactivité UI (menus, sliders).
*   **Frameworks** : React/Vue/Alpine INTERDITS sauf demande explicite.

## 2. Back-End (STRICTEMENT INTERDIT)
*   **PHP** : INTERDIT. L'agent ne doit jamais générer de fichiers `.php`.
*   **SQL** : INTERDIT. Aucune base de données.
*   **Traitement** : Tout doit se faire côté client (Static Site).

## 3. Structure des Dossiers
L'agent doit respecter cette structure simplifiée :
- `/` (Racine) : Fichiers `.html` finaux (ex: index.html, about.html).
- `/ui-kit` : Composants UI atomiques.
- `/assets` : Images, fonts, JS.
