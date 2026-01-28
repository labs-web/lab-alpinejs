---
description: Workflow de création des maquettes statiques HTML/CSS (UI-Kit).
---

# Workflow : Création UI

Ce workflow produit le code visuel statique.

## Trigger
Validation de `/conception-ui`.

## Étapes

### Étape 1 : Création des Templates de Page (Layouts)
- **Skill** : `createur-ui`
- **Action** : Créer la structure globale de la page (Header, Footer, Background vide).
- **Technologie** : HTML5 + Tailwind CSS.
- **Output** : Fichier `ui-kit/layouts/[NomLayout].html` définissant "l'ambiance".

### Étape 2 : Création des Composants
- **Skill** : `createur-ui`
- **Action** : Coder les éléments réutilisables (Boutons, Cards, Inputs) dans `ui-kit/`.
- **Technologie** : HTML5 + Tailwind CSS exclusivement.
- **Output** : Fichiers HTML autonomes et prévisualisables.

### Étape 3 : Mise à jour du UI Kit
- **Skill** : `createur-ui`
- **Action** : Ajouter le lien du nouveau composant dans le menu de `ui-kit/index.html`.
- **Objectif** : Maintenir la galerie de composants à jour et testable.

### Étape 4 : Assemblage de la Page
- **Skill** : `createur-ui`
- **Action** : Créer la page complète statique (avec fausses données).
- **Output** : Fichier HTML prévisualisable dans un navigateur.

### Checkpoint
Demander la validation visuelle (Design Review) à l'utilisateur AVANT de passer au backend.
