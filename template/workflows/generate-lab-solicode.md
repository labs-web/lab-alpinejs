---
description: description: Pilotage de la génération complète d'un Lab Solicode (Chapitres + Mini-projet)
---

# 🚀 Workflow: Génération de Lab Solicode

Ce processus définit les étapes de création d'un Lab complet, de la localisation dans le cursus à la production de l'application de synthèse.

---

## 1. Phase d'Analyse & Cursus
Avant de rédiger, l'agent doit :
1.  **Localisation** : Identifier la compétence cible parmi les blocs **C1 à C7** (ex: C2 - Interface Utilisateur).
2.  **Niveau** : Déterminer si le contenu cible le niveau **N1 (Imiter)** ou **N2 (Adapter)** selon la stack technique.
3.  **Lien Fil Rouge** : Vérifier comment les acquis du Lab s'intégreront dans le projet global "Highspeed" ou les besoins de Solicode.

---

## 2. Génération des Chapitres (Dossier `docs/`)
L'agent doit produire 5 fichiers distincts, formatés selon les **standards-docs** :

- **01-presentation-initiale.md** : Introduction rapide (2 minutes) expliquant le concept technique et l'objectif pédagogique.
- **02-tuto-1.md** : Première manipulation pratique guidée.
- **03-presentation-finale.md** : Synthèse des premiers acquis et transition logique vers l'approfondissement.
- **04-tuto-2.md** : Deuxième étape de complexité intermédiaire.
- **05-tuto-3.md** : Finalisation technique du lab et préparation à la synthèse.

---

## 3. Création du Mini-Projet de Synthèse
Une fois les chapitres terminés, l'agent doit générer un fichier **mini-projet.md** :
- **Principe** : Concevoir une petite application concrète qui fusionne les résultats des Tutos 1, 2 et 3.
- **Objectif Fil Rouge** : L'application doit constituer une brique logicielle (un "pont") directement réutilisable pour le projet Fil Rouge (ex: un module de filtrage Alpine.js pour une liste de véhicules).
- **Livrables** : Énoncé clair, critères de réussite et code de référence (conforme au niveau N2).

---

## 4. Validation & Standards
Pour chaque fichier généré, l'agent vérifie :
1.  **Code** : Utilisation exclusive des **Skills** (tech-alpine-js, tech-laravel-blade).
2.  **Identité** : Présence de la signature **🎓 [Lab]** au début de la réponse.
3.  **Rigueur** : Pas de framework hors stack (Inertia, React).