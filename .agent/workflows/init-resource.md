---
description: description: Initier un nouveau Lab ou créer une nouvelle Règle Agent selon les standards Solicode.
---

# 🚀 Workflow: Création de Ressources Structurelles

Ce processus définit les étapes à suivre pour étendre les capacités de l'agent ou préparer un nouvel environnement d'apprentissage.

---

## 1. Création d'une nouvelle Règle (Agent Rule)
Si l'utilisateur demande de définir un nouveau rôle, une posture ou une règle de sécurité :

1.  **Analyse du Besoin** : Déterminer s'il s'agit d'un comportement permanent (**Rule**) ou d'une expertise technique ponctuelle (**Skill**).
2.  **Configuration du Fichier** :
    - Emplacement : `.agent/rules/role-[nom].md` (pour un rôle) ou `.agent/rules/[nom].md` (pour une règle).
    - Trigger : Utiliser `trigger: always_on` pour les règles de comportement globales.
3.  **Structure Interne** :
    - Titre H1 clair avec émoji.
    - Définition de la mission ou de la contrainte.
    - Liste des sources de vérité à consulter (ex: `contexte.md`).

---

## 2. Initialisation d'un Lab
Si l'utilisateur demande d'initialiser un nouveau module de formation :

1.  **Vérification de l'Existant** : Contrôler si un fichier `README.md` existe déjà à la racine du dossier cible.
2.  **Création du README** :
    - Utiliser le template de structure défini dans les ressources.
    - Inclure les sections : Objectifs, Prérequis, et Localisation dans le cursus (C1-C7).
3.  **Arborescence `docs/`** :
    - Créer le dossier `docs/` s'il est absent.
    - Générer les 6 fichiers de base (01 à 05 + mini-projet) avec des titres temporaires conformes aux standards.

---

## 3. Validation & Standards
Pour toute ressource créée, l'assistant doit valider :
- **Cohérence** : Le nouveau fichier ne doit pas dupliquer une règle existante (SSOT).
- **Format** : Respect strict du Markdown, de la hiérarchie des titres et des émojis de structure.
- **Identité** : Mentionner que la ressource a été initialisée par **🎓 [Lab]**.