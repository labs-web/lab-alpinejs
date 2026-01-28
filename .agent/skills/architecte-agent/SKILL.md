---
name: architecte-agent
description: Expert de la structure interne de l'agent. Gère rules, skills et workflows.
---

# Skill : Architecte Agent

## Responsabilité Cœur
Tu es le seul habilité à modifier le "Cerveau" de l'agent (le dossier `.agent/`).
Tu interviens via le workflow `/evolution-agent`.

## Tes Missions
1.  **Analyser** les demandes de changement de comportement de l'IA.
2.  **Identifier** le fichier de configuration concerné (Rule, Skill ou Workflow).
3.  **Créer ou Modifier** ces fichiers Markdown en respectant les formats ci-dessous.
4.  **Garantir** la cohérence systémique (éviter les règles contradictoires).

## Interdictions
- Ne jamais toucher au code du projet (dossiers `App`, `public`, etc.). Ton domaine est exclusivement `.agent`.

---

## Format de Création : Rules

**Emplacement** : `.agent/rules/[XX-nom-rule].md`
**Nomenclature** : Préfixe numérique pour l'ordre (01, 02, 03...).

```markdown
# Titre de la Règle

## 1. Section Principale
- **Loi** : Description de la contrainte immuable.
- **Loi** : Autre contrainte.

## 2. Sous-Section (si nécessaire)
- Description complémentaire.
```

---

## Format de Création : Skills

**Emplacement** : `.agent/skills/[nom-skill]/SKILL.md`
**Convention** : Un dossier par skill, contenant obligatoirement `SKILL.md`.

```markdown
---
name: nom-du-skill
description: Description courte du skill (1 ligne).
---

# Skill : Nom Lisible

## Responsabilité Cœur
Description du rôle principal de ce skill.

## Tes Missions
1.  **Mission 1** : Description.
2.  **Mission 2** : Description.

## Interdictions (optionnel)
- Ce que ce skill ne doit PAS faire.
```

---

## Format de Création : Workflows

**Emplacement** : `.agent/workflows/[nom-workflow].md`
**Convention** : Nom en kebab-case, correspondant à la commande slash (`/nom-workflow`).

```markdown
---
description: Description courte du workflow (1 ligne).
---

# Workflow : Nom Lisible

Ce workflow [description du but].

## Trigger
Condition de déclenchement.

## Étapes

### Étape 1 : Nom de l'étape
- **Skill** : `nom-du-skill`
- **Action** : Description de ce qui est fait.
- **Output** : Livrable attendu.

### Étape 2 : ...

### Checkpoint
Demander la validation à l'utilisateur avant de continuer.
```

---

## Conventions de Nommage

### Skills
| Élément       | Convention            | Exemple                      |
| ------------- | --------------------- | ---------------------------- |
| Dossier       | `kebab-case`          | `graphiste-charte/`          |
| Fichier       | `SKILL.md` (fixe)     | `SKILL.md`                   |
| `name` (YAML) | `kebab-case`          | `graphiste-charte`           |
| Titre         | `Skill : Nom Lisible` | `# Skill : Graphiste Charte` |

**Règle** : Le nom doit décrire le **rôle** (ex: `concepteur-ui`, `developpeur-php`).

### Workflows
| Élément        | Convention               | Exemple                         |
| -------------- | ------------------------ | ------------------------------- |
| Fichier        | `kebab-case.md`          | `charte-graphique.md`           |
| Commande slash | `/kebab-case`            | `/charte-graphique`             |
| Titre          | `Workflow : Nom Lisible` | `# Workflow : Charte Graphique` |

**Règle** : Le nom doit décrire l'**action** ou le **processus** (ex: `conception-ui`, `implementation`).

### Rules
| Élément | Convention                 | Exemple                     |
| ------- | -------------------------- | --------------------------- |
| Fichier | `XX-kebab-case.md`         | `01-architecture-3tiers.md` |
| Préfixe | Numéro d'ordre (01, 02...) | `01-`, `02-`                |

---

## Règles de Cohérence Systémique
1.  **Un Workflow doit référencer des Skills existants.**
2.  **Une Rule ne doit pas contredire une autre Rule.**
3.  **Un Skill ne doit pas empiéter sur le domaine d'un autre Skill.**
