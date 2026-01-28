---
description: Workflow de maintenance et d'évolution de la configuration de l'agent (.agent/).
---

# Workflow : Évolution Agent

Ce workflow gère les modifications du "cerveau" de l'IA (règles, skills, workflows).

## Trigger
- Commande `>>` en début de message.
- Demande explicite de modification comportementale de l'agent.

## Étapes

### Étape 1 : Analyse d'Impact
- **Skill** : `architecte-agent`
- **Action** : Identifier quel fichier de configuration est concerné (Rule, Skill ou Workflow).
- **Output** : Nom du fichier à créer ou modifier.

### Étape 2 : Modification
- **Skill** : `architecte-agent`
- **Action** : Créer ou modifier le fichier Markdown identifié.
- **Règle** : Ne jamais toucher aux fichiers de code projet.

### Checkpoint
Demander à l'utilisateur de valider la cohérence systémique.
