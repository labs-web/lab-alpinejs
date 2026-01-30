---
type: rule
id: stack-technique
---
# Stack Technique

## Backend
- **Framework** : Laravel (PHP).
- **Templating** : Blade.

## Frontend
- **Framework JS** : Alpine.js.
- **CSS** : Tailwind CSS.
- **Build Tool** : Vite (standard Laravel).

## Architecture
- **MPA (Multi-Page Application)** : Le rendu est fait côté serveur (Blade), Alpine.js enrichit le DOM existant "sprinkles of interactivity".
- **Composants** : Utilisation de `x-data` pour isoler la logique des composants UI (Modales, Dropdowns, Listes dynamiques).

## Conventions
- Nommage des variables JS : CamelCase.
- Organisation Alpine : Extraire les objets de données complexes dans des fonctions ou des fichiers séparés si nécessaire, plutôt que de tout inliner dans le HTML.
