# 🌍 Contexte Global : Conception de Programme de Formation

## 1. Vision du Projet
Le but est de concevoir un programme de formation complet pour le développement Web et Mobile (Solicode). Ce programme structure l'apprentissage autour d'un **Projet Fil Rouge** découpé en Sprints, soutenu par des **Unités d'Apprentissage (UA)** et des **Tutoriels**.

L'objectif est d'industrialiser la création de ces contenus pédagogiques grâce à une chaîne de production automatisée par des Agents IA.

## 2. Workflow de Production (Chaîne de Valeur)
Le processus de création suit un workflow strict en 7 étapes, assuré par des agents spécialisés.
*Pour les détails des flux d'entrées/sorties, voir : `agents/00_agent_context/02_workflow_production.md`.*

### Phase 1 : Cadrage & Conception Technique
1.  **Agent Stack par Niveaux** (`agent_stack_niveaux`)
    *   *Rôle* : Structure la stack technique en paliers progressifs (N1 Imiter, N2 Adapter, N3 Transposer).
2.  **Agent Projet Fil Rouge** (`agent_projet_fil_rouge`)
    *   *Rôle* : Conçoit le scénario métier global et l'architecture du projet support.
3.  **Agent Sprints** (`agent_sprints`)
    *   *Rôle* : Découpe le projet Fil Rouge en versions livrables (Sprints) incrémentales.

### Phase 2 : Ingénierie Pédagogique
4.  **Agent Conception UA** (`agent_uas`)
    *   *Rôle* : Analyse les Sprints pour identifier les Unités d'Apprentissage (UA) et structurer les besoins en tutoriels.
5.  **Agent Rédaction Tutos** (`agent_redaction_tutos`)
    *   *Rôle* : Produit les guides pas-à-pas et les contenus pédagogiques détaillés.

### Phase 3 : Organisation & Évaluation
6.  **Agent Sessions** (`agent_sessions`)
    *   *Rôle* : Assemble les ressources pour définir le planning des sessions (Mini-projets, Live Coding).
7.  **Agent QCM** (`agent_qcm`)
    *   *Rôle* : Crée les évaluations (QCM et exercices) pour valider les acquis.

## 3. Architecture Multi-Agents
Le système fonctionne comme une chaîne de montage (Pipeline). Chaque agent :
1.  Lit ses **INPUTS** (livrables de l'agent précédent ou référentiels).
2.  Traite l'information selon son rôle (Expertise).
3.  Génère des **OUTPUTS** standardisés dans les dossiers du projet.

## 4. Contenu du Dossier Global (`agents/00_agent_context/`)
Ce dossier est la **Source de Vérité** statique pour tous les agents :
*   `01_project_overview.md` : (Ce fichier) Vision et liste des acteurs du workflow.
*   `02_workflow_production.md` : Description détaillée des flux entre agents.
*   `03_core_rules.md` : Règles fondamentales et éthique des agents.
*   `04_contexte_pedagogique.md` : Méthodologie pédagogique (N1/N2/N3).
*   `05_contexte_filiere.md` : Contexte technique de la filière.
