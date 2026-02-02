---
description: Workflow Maître pour la création de site web statique en mode UI-First (Agile).
---

# Workflow : Processus de Développement (Static WebBuilder)

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

### Phase 2 : Création UI (Templates & Composants)
L'agent doit d'abord poser le décor avant les meubles.
5. **Templates** : Créer les structures de page (`ui-kit/layouts/`).
6. **Composants** : Créer les briques unitaires (`ui-kit/molecules/`).
7. **STOP** : Attendre validation des fichiers `.html` dans `ui-kit/`.

### Phase 3 : Assemblage & Livraison (Finalisation)
7. **Créer l'index** : Assembler les composants validés dans `index.html` (racine).
8. **Vérifier** : Responsive (Mobile/Desktop) et liens.
9. **STOP** : Livrable final (Dossier prêt à déployer).

## Loi Checkpoint
**INTERDICTION** de passer à la phase suivante sans "GO" explicite de l'utilisateur.
