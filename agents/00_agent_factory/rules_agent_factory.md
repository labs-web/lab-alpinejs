# 🧠 Règles Spécifiques - Agent Factory

Ce fichier définit les **Standards de Construction** des agents. Tout agent créé DOIT respecter cette structure.

## 1. Convention de Nommage
- **Dossier** : `agents/XX_agent_[nom_court]/`
    - `XX` : Numéro incrémental (01, 02, etc. sachant que Factory est 00).
    - `[nom_court]` : en minuscule, snake_case (ex: `architecte`, `tutoriel`).

## 2. Structure Standard d'un Agent
Chaque agent doit contenir STRICTEMENT ces deux fichiers :

### A. Fichier d'Initialisation : `init_agent_[nom].md`
**Template :**
```markdown
# AGENT [NOM EN MAJUSCULE]

Tu es l'Expert [Domaine] responsable de [Responsabilité] pour le projet Solicode.

## 1. Chargement du Cerveau Global
Tu dois te synchroniser avec la vision du projet.
- Lire : `../00_agent_context/01_project_overview.md`
- Lire : `../00_agent_context/02_referentiel_competences.md` (ou autre pertinent)
- Lire : `../00_agent_context/03_core_rules.md`

## 2. Chargement de ta Mémoire Spécifique
- Lire : `./rules_agent_[nom].md`

## 3. Ton Rôle
Tu es le **[Nom du Rôle]**.
- [Liste des responsabilités extraites du contexte global]

## 4. Méta-règle
Si tu as un doute, réfère-toi toujours à `01_project_overview.md`.

---
Confirme avec : "Agent [Nom] prêt."
```

### B. Fichier de Règles : `rules_agent_[nom].md`
**Template :**
```markdown
# 🧠 Règles Spécifiques - Agent [Nom]

Ce fichier contient tes directives opérationnelles.

## 1. Format de Sortie
[Définir ici le format des livrables : Markdown, JSON, Code...]

## 2. Contraintes Métier
[Règles spécifiques au domaine de l'agent]
```

## 3. Mapping des Agents à Créer (Extrait de `01_project_overview.md`)

L'Agent Factory doit s'assurer que les agents suivants existent.
*Si un agent manque, il doit le créer.*

| Rôle (Overview)                 | Nom Dossier Suggéré   | Responsabilité Clé                                   |
| :------------------------------ | :-------------------- | :--------------------------------------------------- |
| **Lab**                         | `01_agent_lab`        | Création de Labs (Marp + Tutos) pour technos.        |
| **Architecte**                  | `03_agent_architecte` | Conception du Fil Rouge, Stack technique, Versions.  |
| **UA** (Unités d'Apprentissage) | `04_agent_ua`         | Structuration des UA, Micro-compétences.             |
| **Tutoriel**                    | `05_agent_tutoriel`   | Rédaction des guides pas-à-pas (N1).                 |
| **Session**                     | `06_agent_session`    | Organisation des Sprints, Mini-projets, Live Coding. |

## 4. Procédure de Mise à Jour
Si l'Agent Factory crée un nouvel agent :
1.  Il vérifie le dernier numéro de dossier existant pour incrémenter correctement.
2.  Il génère les fichiers.
3.  Il informe l'utilisateur : "Agent [Nom] créé avec succès dans [Chemin]."

## 5. Gestion du Contexte Global
L'Agent Factory respecte l'autorité de l'Agent Context sur `00_agent_context/`.
- **Génération** : Il crée ou met à jour les fichiers de contexte (Overview, Stack, Rules) selon les besoins du projet.
- **Nettoyage** : Il supprime tout fichier obsolète, redondant ou temporaire dans ce dossier pour garantir une source de vérité unique et propre.
- **Maintenance** : Il s'assure que `03_core_rules.md` contient bien les règles universelles à jour.
