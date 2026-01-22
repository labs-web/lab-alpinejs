# 🔄 Workflow de Production des Agents

Ce document décrit le flux de données circulant entre les différents agents du système. Chaque agent correspond à une **activité clé** du processus pédagogique.

## 1. Agent Conception Stack par Niveau
*   **Slug** : `agent_stack_niveaux`
*   **Activité** : Analyse la stack technique globale pour définir des paliers d'apprentissage progressifs. Il structure les technologies à maîtriser en trois niveaux (N1 Imiter, N2 Adapter, N3 Transposer) afin de guider la complexité du projet.
*   **📥 INPUT (Entrées)** :
    *   `01_referentiels/stack_technique.md` (Version brute/globale).
*   **🏭 TRAITEMENT** : Structuration de la stack technique en niveaux progressifs.
*   **📤 OUTPUT (Livrables)** :
    *   `01_referentiels/stack_par_niveaux.md` : Stack ciblée pour chaque niveau.

## 2. Agent conception projet file rouge
*   **Slug** : `agent_projet_fil_rouge`
*   **Activité** : Conçoit l'architecture globale d'un projet "Fil Rouge" qui servira de support à toute la formation. Il définit un scénario métier complet et engageant qui couvre l'ensemble des compétences et technologies du référentiel.
*   **📥 INPUT (Entrées)** :
    *   `01_referentiels/` :
        *   `referentiel-competences.md`
        *   `stack_par_niveaux.md`
*   **🏭 TRAITEMENT** : Conception du projet Fil Rouge complet.
*   **📤 OUTPUT (Livrables)** :
    *   `02_projet-fil-rouge/projet_fil_rouge.md` : Vision globale du projet.

## 3. Agent Découpage Projet file rouge en Sprints
*   **Slug** : `agent_sprints`
*   **Activité** : Découpe le projet Fil Rouge en sprints fonctionnels et incrémentaux (ex: Web Public, Admin, API). Chaque sprint correspond à une version livrable et testable du produit, facilitant l'apprentissage par étapes.
*   **📥 INPUT (Entrées)** :
    *   `02_projet-fil-rouge/projet_fil_rouge.md` : Le projet global.
    *   `01_referentiels/stack_par_niveaux.md` : Les critères techniques.
*   **🏭 TRAITEMENT** : Découpage du projet en Sprints fonctionnels.
*   **📤 OUTPUT (Livrables)** :
    *   `03_sprints/` :
        *   `v*-*.md`

## 4. Agent Conception UA
*   **Slug** : `agent_uas`
*   **Activité** : Analyse chaque sprint pour identifier les besoins en tutoriels et structurer les Unités d'Apprentissage (UA). Il comble les manques pédagogiques (pré-requis) et organise les contenus pour assurer une progression fluide des compétences.
*   **📥 INPUT (Entrées)** :
    *   `03_sprints/` : Fonctionnalités de la version.
    *   `01_referentiels/` : Compétences visées.
*   **🏭 TRAITEMENT** : Macro-Conception des tutoriels et structuration des UA.
*   **📤 OUTPUT (Livrables)** :
    *   **Vue par Version** (`04_tutos_uas/versions/`) :
        *   `[version_name].md` : Liste des tutos et UA pour cette version.
    *   **Vue par Compétence** (`04_tutos_uas/competences/`) :
        *   `[competence_code].md` : Index des UA validant cette compétence.

## 5. Agent Rédaction Tutoriels
*   **Slug** : `agent_redaction_tutos`
*   **Activité** : Rédige des guides pratiques pas-à-pas et des supports de cours clairs pour chaque Unité d'Apprentissage. Il vulgarise les concepts techniques pour permettre aux apprenants de réaliser les fonctionnalités demandées en autonomie partielle.
*   **📥 INPUT (Entrées)** :
    *   `04_tutos_uas` : Plan des tutos à rédiger.
*   **🏭 TRAITEMENT** : Rédaction de guides pratiques et supports.
*   **📤 OUTPUT (Livrables)** :
    *   `05_rédaction-tutos/` : Contenu rédigé des tutoriels.

## 6. Agent Organisation Sessions
*   **Slug** : `agent_sessions`
*   **Activité** : Assemble les ressources (Sprints, Tutos) pour construire le déroulé détaillé des sessions de formation. Il définit le planning des activités : mini-projets d'entraînement (N3), prototypage guidé (N2) et démonstrations en Live Coding.
*   **📥 INPUT (Entrées)** :
    *   `03_sprints/` : Objectifs de réalisation.
    *   `04_tutos_uas/` : Ressources pédagogiques.
*   **🏭 TRAITEMENT** : Structuration du programme des sessions (Planning, Mini-Projets, Live Coding).
*   **📤 OUTPUT (Livrables)** :
    *   `06_sessions-formation/` : Planning et livrables de la session.

## 7. Agent Élaboration QCM
*   **Slug** : `agent_qcm`
*   **Activité** : Crée des évaluations théoriques (QCM) et pratiques pour valider les acquis de chaque module. Il génère des questions ciblées sur les Unités d'Apprentissage pour vérifier la compréhension des concepts clés.
*   **📥 INPUT (Entrées)** :
    *   `06_sessions-formation/` 
*   **🏭 TRAITEMENT** : Élaboration d'évaluations JSON et rapports.
*   **📤 OUTPUT (Livrables)** :
    *   `07_evaluations/` : JSON QCM et rapports.
