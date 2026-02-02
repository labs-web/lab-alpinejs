---
description: Workflow Maître pour la création de site web statique en mode UI-First (Agile).
---

# Workflow : Processus de Développement (Laravel TALL)

Ce workflow orchestre le cycle de vie complet, de l'idée au déploiement.

## Trigger
Demande utilisateur : "Crée une landing page", "Ajoute une section features".

## Phases Séquentielles (Checkpoints Obligatoires)

### Phase 0 : Charte Graphique (Fondations)
*Condition : Uniquement si non définie.*
1. Lancer le workflow `/charte-graphique`.
2. **STOP** : Attendre validation visuelle de la charte.

### Phase 1 : Conception UI (Wireframe)
3. Lancer le workflow `/conception-ui`.
4. **STOP** : Attendre validation du concept.

### Phase 2 : Création Maquette Statique (UI-Kit)
L'agent crée les maquettes statiques en HTML/CSS pur pour valider le design sans contraintes Backend.
*Localisation : Dossier `ui-kit/` (Hors dossier Laravel `resources/`)*
5. **Templates** : Créer les structures de page (`ui-kit/layouts/`).
6. **Composants** : Créer les briques unitaires (`ui-kit/molecules/`).
7. **STOP** : Attendre validation des fichiers `.html` dans `ui-kit/`.

### Phase 3 : Intégration Laravel (TALL Stack)
Portage du code statique vers l'architecture Laravel.
*Stratégie : Intégration sans abstraction excessive (Pas de composants Blade, usage de Partials).*
8. **Layouts Blade** : Convertir `ui-kit/layouts/` en Master Layouts (`resources/views/layouts/app.blade.php`).
9. **Partials** : Extraire les blocs récurrents (Header, Footer, Nav) dans `resources/views/partials/`.
10. **Pages** : Intégrer le contenu de `ui-kit/molecules/` dans les vues (`resources/views/pages/`) avec `@extends` et `@include`.
11. **Routes** : Définir les routes d'accès dans `routes/web.php`.
12. **STOP** : Validation fonctionnelle via `php artisan serve`.

### Phase 4 : Logique Métier & Backend (Dynamisation)
Transformation des vues statiques en pages dynamiques connectées à la logique Laravel.
13. **Controllers** : Créer les contrôleurs (`php artisan make:controller`) et déplacer la logique des routes.
14. **Données & Modèles** : Passer les données dynamiques aux vues (Tableaux ou DB).
15. **Alpine.js** : Connecter les données Backend aux composants Alpine (`x-data="backendData"`).
16. **STOP** : Validation des flux de données et de l'interactivité.

## Loi Checkpoint
**INTERDICTION** de passer à la phase suivante sans "GO" explicite de l'utilisateur.
