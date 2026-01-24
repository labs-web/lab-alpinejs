# Plan de Restructuration .agent (Architecture Mono-Agent / Multi-Rôles)

Ce plan décrit la nouvelle architecture pour le dossier `.agent`, basée sur une séparation claire entre identité (Rules), savoir (Resources), savoir-faire procédural (Workflows) et expertises techniques isolées (Skills).

## 1. 📂 Architecture Cible

```tree
.agent/
├── rules/                  # "Qui je suis & Comment je travaille"
│   ├── core-protocols.md   # Lois universelles (Sécurité, Éthique) (Always On)
│   ├── load-global-context.md # Chargeur de contexte (Always On)
│   ├── role-expert-lab.md  # Profil Expert R&D (Model Decision)
│   ├── role-expert-context.md # Profil Gardien Contexte (Model Decision)
│   └── [tech]-guidelines.md # Règles techniques (ex: alpine-best-practices)
│
├── resources/              # "Ce que je sais" (Mémoire Froide)
│   ├── context_domain.md   # Stack Technique & Projet (Source de Vérité)
│   ├── referentiel-competences.md # Référentiel C1-C7
│   ├── templates-lab-structure.md # Gabarit pour README.md
│   └── templates-agent-creation.md # Gabarit pour Rules
│
├── workflows/              # "Ce que je fais" (Procédures Automatisées)
│   ├── init-structure.md   # Initialisation de projet (Lab, Agent)
│   ├── create-component.md # (Exemple) Création composant
│   └── [action].md         # Autres scripts d'actions
│
└── skills/                 # "Mes super-pouvoirs" (Expertise Pointue)
    └── demo-alpine-debug/  # (Exemple) Procédure de débogage avancée
        └── SKILL.md
```

## 2. 📝 Détail des Composants

### A. Rules (Règles Actives)
- **Définition** : Instructions qui modifient le comportement de l'IA en temps réel.
- **Types** :
    - `Always On` : Protocoles de sécurité (`??`), Style de code, Contexte obligatoire.
    - `Model Decision` : Personnalités (Rôles) activées selon le besoin (Expert Lab, Gardien Contexte).

### B. Resources (Ressources Passives)
- **Définition** : Documents de référence consultés uniquement sur demande ou instruction explicite.
- **Rôle** : Servir de "Source de Vérité" (SSOT). Ne contient pas d'instructions actives ("Fais ceci"), mais des faits ("La stack est Laravel 10").

### C. Workflows (Procédures)
- **Définition** : Séquences d'étapes standardisées pour réaliser une tâche complexe.
- **Usage** : "Initialise le projet", "Refactorise ce code".
- **Lien** : S'appuie souvent sur les Templates des Resources.

### D. Skills (Compétences Isolées)
- **Définition** : Modules autonomes contenant une expertise très spécifique (ex: Debug, Migration SGBD, Audit Sécu).
- **Structure** : Dossier contenant un `SKILL.md` et potentiellement des scripts ou exemples associés.

## 3. 🚀 Workflow d'Interaction
1.  **L'utilisateur parle**.
2.  **Core Protocols** vérifie la sécurité (`??`).
3.  **Global Loader** injecte le contexte métier (`context_domain`).
4.  **Le Modèle décide** quel rôle activer (ex: *Expert Lab* pour une question de code).
5.  **L'Expert Lab** décide s'il a besoin d'un **Workflow** (ex: *Init Structure*) ou d'un **Skill** (ex: *Debug*) pour répondre.
