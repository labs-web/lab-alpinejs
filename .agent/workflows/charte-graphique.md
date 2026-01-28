---
description: Workflow de création et validation de la charte graphique du projet.
---

# Workflow : Charte Graphique

Ce workflow définit l'identité visuelle AVANT tout design ou code.

## Trigger
Appelé par `/processus-developpement` (Phase 0) ou à la demande.

## Étapes

### Étape 1 : Vérification
- **Skill** : `graphiste-charte`
- **Action** : Vérifier si `ui-kit/charte-graphique/charte.md` existe.
    - **Si OUI et validé** : Passer directement au workflow suivant.
    - **Si NON** : Passer à l'étape 2.

### Étape 2 : Création de la Charte
- **Skill** : `graphiste-charte`
- **Action** :
    1. Créer le fichier `ui-kit/charte-graphique/charte.md` :
        - Palette de couleurs (principales + neutres)
        - Typographie (police, tailles, poids)
        - Espacements (tokens)
        - Bordures et ombres
    2. Créer le fichier `ui-kit/charte-graphique/index.html` :
        - Une page de démonstration utilisant la charte définie.
- **Output** : Fichiers `charte.md` et `index.html` dans `ui-kit/charte-graphique/`.

### Checkpoint
- Demander la validation de la charte par l'utilisateur.
- ⛔ **INTERDICTION** : Ne pas continuer sans "GO" explicite.
