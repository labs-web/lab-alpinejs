# 🧠 STRATÉGIE & GOUVERNANCE (CTX_Strategy)

> Ce fichier regroupe la Vision Global, le Workflow de Production et les Règles Fondamentales du projet.
> C'est la constitution politique et structurelle du système.

---

# PARTIE 1 : VISION DU PROJET (ex 01_project_overview)

## 1. Vision du Projet
Le but est de concevoir un programme de formation complet pour le développement Web et Mobile (Solicode). Ce programme structure l'apprentissage autour d'un **Projet Fil Rouge** découpé en Sprints, soutenu par des **Unités d'Apprentissage (UA)** et des **Tutoriels**.

L'objectif est d'industrialiser la création de ces contenus pédagogiques grâce à une chaîne de production automatisée par des Agents IA.

## 2. Workflow de Production (Chaîne de Valeur)
Le processus de création suit un workflow strict, assuré par des agents spécialisés.
(Voir Partie 2 pour les détails).

### Phase 0 : Recherche & Développement (Labs)
0.  **Agent Lab** (`agent_lab`)
    *   *Rôle* : Produit des Labs exploratoires (Marp + Tutos) pour maîtriser une techno spécifique avant intégration.

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

---

# PARTIE 2 : WORKFLOW DE PRODUCTION (ex 02_workflow_production)

Ce document décrit le flux de données circulant entre les différents agents du système. Chaque agent correspond à une **activité clé** du processus pédagogique.

## 1. Agent Conception Stack par Niveau
*   **Slug** : `agent_stack_niveaux`
*   **Activité** : Analyse la stack technique globale pour définir des paliers d'apprentissage progressifs (N1/N2/N3).
*   **📥 INPUT** : `01_referentiels/stack_technique.md`
*   **📤 OUTPUT** : `01_referentiels/stack_par_niveaux.md`

## 2. Agent conception projet file rouge
*   **Slug** : `agent_projet_fil_rouge`
*   **Activité** : Conçoit l'architecture globale d'un projet "Fil Rouge".
*   **📥 INPUT** : `referentiel-competences.md`, `stack_par_niveaux.md`
*   **📤 OUTPUT** : `02_projet-fil-rouge/projet_fil_rouge.md`

## 3. Agent Découpage Projet file rouge en Sprints
*   **Slug** : `agent_sprints`
*   **Activité** : Découpe le projet Fil Rouge en sprints fonctionnels (Versions).
*   **📥 INPUT** : `02_projet-fil-rouge/projet_fil_rouge.md`
*   **📤 OUTPUT** : `03_sprints/v*-*.md`

## 4. Agent Conception UA
*   **Slug** : `agent_uas`
*   **Activité** : Identifie les UA et le plan des tutoriels.
*   **📥 INPUT** : `03_sprints/`, `01_referentiels/`
*   **📤 OUTPUT** : `04_tutos_uas/versions/`, `04_tutos_uas/competences/`

## 5. Agent Rédaction Tutoriels
*   **Slug** : `agent_redaction_tutos`
*   **Activité** : Rédige des guides pratiques pas-à-pas.
*   **📥 INPUT** : `04_tutos_uas`
*   **📤 OUTPUT** : `05_rédaction-tutos/`

## 6. Agent Organisation Sessions
*   **Slug** : `agent_sessions`
*   **Activité** : Définit le planning des sessions (Mini-projets, Live Coding).
*   **📥 INPUT** : `03_sprints/`, `04_tutos_uas/`
*   **📤 OUTPUT** : `06_sessions-formation/`

## 7. Agent Élaboration QCM
*   **Slug** : `agent_qcm`
*   **Activité** : Crée des évaluations théoriques et pratiques.
*   **📥 INPUT** : `06_sessions-formation/`
*   **📤 OUTPUT** : `07_evaluations/`

---

# PARTIE 3 : RÈGLES FONDAMENTALES (ex 03_core_rules)

Ce fichier contient les règles strictes que **TOUS les Agents du système** doivent respecter.

## 1. Méta-Protocole : Gestion Dynamique des Règles
Chaque agent peut mettre à jour ses règles.
- **Local** : Ajout dans `rules_agent_[nom].md`.
- **Global** : Ajout dans ce fichier (`CTX_Strategy.md` - section règles).

## 2. Éthique et Qualité
- **Rigueur** : Ne jamais inventer une information technique sans vérification.
- **Format** : Toujours produire du Markdown propre.

## 3. Protocole de Consultation Sûre (?)
- **Déclencheur** : Commande finissant par **`?`**.
- **Action** : Analyser, Répondre, **NE PAS MODIFIER DE FICHIER**, Ajouter `(🔒 Réponse consultative : Aucune modification...)`.
