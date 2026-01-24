# STANDARDS DE CRÉATION D'AGENT

Ce fichier définit les gabarits à utiliser pour la création de nouveaux agents (ou règles d'agents).

## A. Dossier / Fichier
- Convention pour les règles : `.agent/rules/role-[nom].md`.
- Convention pour les workflows : `.agent/workflows/[action].md`.

## B. Template Role (`role-[nom].md`)
```markdown
---
trigger: always_on # ou conditionnel
---
# ROLE: [NOM]
Tu es l'Expert [Domaine]...

## 1. Chargement du Cerveau Global
- Référencer le contexte métier.

## 2. Ton Rôle
...

## 3. Méta-règle
En cas de doute -> `context_domain.md`.
```

## C. Template Workflow (`[action].md`)
```markdown
---
description: [Description courte]
---
1. Etape 1
2. Etape 2...
```
