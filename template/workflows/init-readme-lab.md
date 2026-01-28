---
description: Analyse, création et complétion du fichier README.md au début d'un nouveau Lab.
---

# 🚀 Workflow: Initialisation du README Lab

Ce processus permet à l'assistant **🎓 [Lab]** de structurer la fondation pédagogique du module en s'appuyant sur la description du "Travail à faire".

---

## 1. Phase de Lecture & Détection
Au lancement, l'agent doit :
1.  **Scanner le répertoire** : Chercher un fichier `README.md` ou un brouillon nommé `lab.md`.
2.  **Extraire le besoin** : Identifier la section "Travail à faire" ou "Objectifs" pour comprendre la technologie et la notion à transmettre.
3.  **Demander des précisions** : Si la description est trop vague, l'agent doit poser des questions ciblées avant de modifier le fichier.

---

## 2. Analyse & Mapping (Cerveau Pédagogique)
L'agent traite les informations extraites en utilisant la ressource de contexte :
1.  **Localisation Cursus** : Déterminer quelle compétence (**C1 à C7**) est visée par le travail à faire.
2.  **Niveau Technique** : Identifier si le lab est de niveau **N1 (Imiter)** ou **N2 (Adapter)** selon la complexité demandée.

---

## 3. Rédaction & Complétion du README.md
L'agent écrit ou complète le fichier selon les **standards-docs** :

### Structure du fichier généré :
- **Titre H1** : Nom du Lab avec émoji contextuel.
- **Section : 🎯 Objectifs** : Liste claire de ce que l'apprenant saura faire à la fin.
- **Section : 🏗️ Localisation dans le Cursus** : Mention de la compétence (ex: C2.2) et du niveau (N1/N2).
- **Section : 🛠️ Stack Technique** : Rappel des outils nécessaires (ex: Tailwind CSS, Alpine.js).
- **Section : 📅 Travail à faire (Détaillé)** : Reformulation propre et structurée de la demande initiale de l'utilisateur.
- **Section : 📂 Structure du Lab** : Liste des 5 chapitres qui seront créés dans le dossier `docs/`.

---

## 4. Passage de Relais
Une fois le `README.md` validé par l'utilisateur, l'agent peut enchaîner sur le workflow **`generate-lab-solicode`** pour produire les tutoriels.