# 🤖 Système Multi-Agents Solicode

Ce dossier contient les ressources et contextes pour les agents IA collaborant sur la création du contenu pédagogique et technique du projet Solicode.

## 📂 Structure du Dossier

### 1. Cerveau Partagé (`00_context_global/`)
Ce dossier contient la **source de vérité** commune à tous les agents.
*   `01_project_overview.md` : Vision pédagogique et répartition des rôles.
*   `02_referentiel_competences.md` : Liste des compétences (C1-C7) à couvrir.
*   `03_stack_technique.md` : Définition des niveaux techniques (N1-N3).
*   `04_core_rules.md` : Règles comportementales et techniques universelles.

### 2. Agents Spécialisés
Chaque sous-dossier correspond à un agent spécifique avec sa propre mémoire et ses instructions d'initialisation.

### 🏭 Méta-Agent
*   **`00_agent_factory/`** : **Architecte du Système**.
    *   Responsable de la création, de la standardisation et de la maintenance des autres agents.
    *   Gère et nettoie le `00_context_global`.

### 👷 Agents Opérationnels
*   **`01_agent_stack_niveaux/`** : **Expert Stack Technique**.
    *   Définit les paliers d'apprentissage (N1, N2, N3).
*   **`02_agent_projet_fil_rouge/`** : **Architecte Projet**.
    *   Conçoit le scénario métier et le projet support global.
*   **`03_agent_sprints/`** : **Planificateur Sprints**.
    *   Découpe le projet en versions livrables.
*   **`04_agent_uas/`** : **Ingénieur Pédagogique**.
    *   Structure les Unités d'Apprentissage et identifie les besoins en tutos.
*   **`05_agent_redaction_tutos/`** : **Rédacteur Technique**.
    *   Rédige les guides pas-à-pas.
*   **`06_agent_sessions/`** : **Organisateur Formation**.
    *   Planifie le déroulé des sessions (Mini-projets, Live Coding).
*   **`07_agent_qcm/`** : **Expert Évaluation**.
    *   Génère les QCM et les validations de compétences.

## 🚀 Comment Activer un Agent

Pour transformer une session d'IA générique en un Agent Spécialisé, suivez ces étapes :

1.  **Ouvrir le fichier d'initialisation** de l'agent souhaité (ex: `agents/01_agent_qcm/init_agent_qcm.md`).
2.  **Copier/Coller** le contenu dans le chat de l'IA (ou demander à l'IA de "Lire et s'initialiser avec ce fichier").
3.  L'agent chargera alors :
    *   Le contexte global (Vision, Compétences, Règles).
    *   Son contexte local (Règles spécifiques).
    *   Son rôle précis.

## 🎮 Mode d'Utilisation

Pour interagir efficacement et en toute sécurité avec les agents :

### 1. Mode Consultatif (Safe Mode) `?`
Terminez votre phrase par un point d'interrogation **`?`** pour forcer une réponse sans modification de fichiers.
*   **Exemple** : *"Analyse la cohérence de ce module ?"*
*   **Résultat** : L'agent réfléchit, propose, critique, mais **ne touche à rien**.

### 2. Mode Exécutif (Action Mode)
Utilisez l'impératif pour déclencher des actions réelles.
*   **Exemple** : *"Génère les fichiers pour ce module."*
*   **Résultat** : L'agent crée ou modifie les fichiers demandés.

## 🧠 Apprentissage Continu

Chaque agent possède un fichier `rules_agent_[NOM].md`.
*   C'est sa **mémoire à long terme**.
*   Si vous corrigez une erreur récurrente, demandez à l'agent de l'ajouter dans ce fichier.
*   À la prochaine initialisation, l'agent se souviendra de cette règle.
