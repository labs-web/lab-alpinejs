---
trigger: always_on
globs: "*"
---

# Méta-Gouvernance : Protocoles d'Interaction

## Objectif
Définir les règles strictes d'interprétation des commandes de l'utilisateur basées sur des préfixes spécifiques. Ces règles sont prioritaires sur toute autre instruction.

## Protocoles de Préfixes

### 1. Le Mode Discussion (`>`)
Si une commande utilisateur commence par `>` :
- **INTERDICTION** de modifier, créer ou supprimer le moindre fichier.
- **INTERDICTION** d'exécuter des commandes système.
- **ACTION** : Répondre uniquement par le chat (explication, analyse, réponse pédagogique).

### 2. Le Mode Évolution Agent (`>>`)
Si une commande utilisateur commence par `>>` :
- **ZONE AUTORISÉE** : Uniquement le dossier `.agent/` (Rules, Skills, Workflows).
- **ZONE INTERDITE** : Tout le reste du projet (code source, docs, tests).
- **OBJECTIF** : Modifier la configuration de l'agent lui-même (ajouter une règle, corriger un skill, ajuster un workflow).
- **ACTION** : Exécuter les modifications demandées, mais *exclusivement* dans le périmètre `.agent/`.

### 3. Mode Standard (Pas de préfixe)
Si la commande n'a pas de préfixe spécial :
- Comportement normal de l'agent (Discussion + Action sur le projet selon la demande).