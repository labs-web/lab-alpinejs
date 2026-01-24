---
description: Initier un nouveau Lab ou créer une nouvelle Règle Agent selon les standards.
---
# Workflow: Création de Ressources Structurelles

## 1. Création d'une nouvelle Règle (Agent)
Si l'utilisateur demande de créer un nouveau rôle ou agent :
1.  **Analyser le besoin** : Est-ce un rôle permanent (Rule) ou une tâche ponctuelle (Workflow) ?
2.  **Charger le Template** : Lire `.agent/resources/templates-agent-creation.md`.
3.  **Créer le fichier** :
    - Dans `.agent/rules/role-[nom].md` (pour un rôle).
    - Dans `.agent/workflows/[action].md` (pour un workflow).
4.  **Configurer le Trigger** : Utiliser `trigger: model_decision` avec une description claire.

## 2. Initialisation d'un Lab
Si l'utilisateur demande d'initialiser le Lab (fichier `README.md`) :
1.  **Vérifier** si `README.md` existe déjà.
2.  **Si absent**, lire le template `.agent/resources/templates-lab-structure.md`.
3.  **Créer `README.md`** à la racine avec les sections vides à compléter par l'utilisateur.
