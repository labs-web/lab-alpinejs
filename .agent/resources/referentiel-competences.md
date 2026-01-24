---
title: "referentiel-competences.md"
version: "v1.0"
---

# Référentiel de compétences

---

## C1 — Concevoir et gérer un projet d'application (UI/UX & Modélisation)

- **Description courte**  
  Transformer une idée de projet en une vision claire : comprendre le contexte, les utilisateurs et les fonctionnalités, puis produire un dossier d’analyse et de conception exploitable par l’équipe technique.

### Micro-compétence C1.1 — Design Thinking & Maquettage
- **Activité** : Résoudre un problème complexe en centrant la démarche sur l'humain.
- **Tâches clés**
  - **Empathie** : Mener des recherches pour comprendre les douleurs des utilisateurs.
  - **Définition** : Synthétiser les besoins sous forme de problématique claire (POV).
  - **Idéation** : Brainstormer et esquisser des solutions (Crazy 8's, Storyboard).
  - **Prototype** : Créer une maquette interactive (Low-Fi/High-Fi) de la solution.
  - **Test** : Faire valider le prototype par un utilisateur ou un pair.
- **Livrables attendus**
  - Carte d'Empathie ou Persona.
  - Énoncé du Problème (Problem Statement).
  - Croquis d'idéation.
  - Prototype interactif (Figma/Xd).
  - Grille de feedback utilisateur.

### Micro-compétence C1.2 — Modélisation UML & Technique
- **Activité** : Traduire les livrables du Design Thinking en langage technique standardisé (UML).
- **Tâches clés**
  - Transformer les **Besoins Utilisateurs** et le **Prototype** en **Diagramme de Cas d'Utilisation** (Acteurs = Personas, Cas = Fonctionnalités prototype).
  - Identifier les **Objets Métier** du prototype (données manipulées) pour construire le **Diagramme de Classes**.
  - Déduire les **relations** entre entités (associations, cardinalités) à partir des règles de gestion implicites des maquettes.
- **Livrables attendus**
  - Diagramme de Cas d'Utilisation (issu des User Stories).
  - Diagramme de Classes (issu du domaine métier).
  - Dictionnaire de données (issu des champs maquettes).
  - Dossier C1 consolidé (Design + Tech).

---

## C2 — Développer une interface utilisateur (Front-End)

- **Description courte**  
  Créer l'interface visible de l'application, en s'assurant qu'elle est responsive, accessible et interactive.

- **Tâches clés**
  - **Intégration** : Transformer les maquettes C1 en code HTML/CSS (Tailwind).
  - **Logique Client** : Animer l'interface et gérer les états locaux (Alpine.js / JS Vanilla).
  - **Accessibilité** : Respecter les normes HTML sémantiques.

- **Livrables attendus**
  - Vues Blade / HTML intégrées.
  - Scripts JS fonctionnels.

---

## C3 — Développer la partie Back-End (Base de données & Serveur)

- **Description courte**  
  Construire le coeur logique de l'application, gérer les données et les règles métier côté serveur.

- **Tâches clés**
  - traduire le **diagramme de classes** en tables MySQL ;
  - créer les **migrations Laravel** (tables, colonnes, clés primaires / étrangères) ;
  - configurer les **relations Eloquent** (hasOne / hasMany / belongsTo / manyToMany) ;
  - créer des **seeders / factories** pour les données de test ;
  - écrire des **requêtes Eloquent / Query Builder** (CRUD, filtres, tri, pagination) ;
  - tester ces requêtes via **Artisan / Tinker** ou des **contrôleurs simples**.

- **Livrables attendus**
  - schéma SQL cohérent avec le modèle C1 ;
  - migrations Laravel fonctionnelles ;
  - modèles Eloquent configurés (relations) ;
  - seeders / factories pour les données de test ;
  - exemples de requêtes (scripts, contrôleurs, notes de test).

---

## C4 — Organiser le travail et collaborer (Méthode & DevOps)

- **Description courte**  
  Mettre en place une organisation de travail d’équipe simple et robuste : Git, branches, pull requests et suivi des tâches visuel.

- **Tâches clés**
  - utiliser **Git** au quotidien (clone, commit, push, pull) ;
  - travailler avec des **branches** par fonctionnalité ;
  - créer et traiter des **pull requests** (revue de code, commentaires) ;
  - suivre les tâches dans un **tableau Kanban** (ToDo / Doing / Done) ;
  - appliquer quelques **pratiques agiles** (petits objectifs, points réguliers).

- **Livrables attendus**
  - dépôt Git propre (branches claires, historique lisible) ;
  - règles d’équipe simples (naming, PR, validation) ;
  - tableau de tâches à jour ;
  - traces de revues de code (PR commentées).

---

## C5 — Développer la partie mobile

- **Description courte**  
  Construire une application Android (Kotlin / Compose) connectée à l’API du projet fil rouge, pour afficher et manipuler les données principales.

- **Tâches clés**
  - installer et configurer **Android Studio** et un émulateur ;
  - coder des **écrans Compose** (liste, détail, formulaires simples) ;
  - consommer l’**API back-end** (requêtes HTTP, JSON, mapping de modèles) ;
  - gérer les **états d’interface** (chargement, succès, erreur) ;
  - mettre en place une **navigation simple** entre les écrans.

- **Livrables attendus**
  - projet Android fonctionnel lié au projet fil rouge ;
  - écrans principaux (liste, détail, création / édition simple) ;
  - code de consommation d’API (service / repository) ;
  - mini-guide d’installation / lancement de l’app.

---

## C6 — Assurer la qualité (tests, données, outils) et la sécurité

- **Description courte**  
  Installer une culture de test minimale et sécuriser l'application contre les vulnérabilités courantes.

- **Tâches clés**
  - préparer des **données de test** (seeders, jeux de données) ;
  - définir quelques **cas de test clés** (succès, erreurs, cas limites) ;
  - exécuter des **tests manuels structurés** sur les fonctionnalités importantes ;
  - introduire des **tests automatisés simples** (selon le contexte) ;
  - analyser les **erreurs** et documenter les corrections.
  - Appliquer les correctifs de sécurité (XSS, CSRF, Injection SQL).

- **Livrables attendus**
  - jeux de données de test documentés ;
  - liste de cas de test (checklists, tableaux) ;
  - résultats de tests (captures, notes, rapports simples) ;
  - liste de bugs / corrections prioritaires.

---

## C7 — Déployer et exploiter l’application

- **Description courte**  
  Mettre l’application en ligne dans un environnement utilisable, suivre son bon fonctionnement et documenter la procédure de déploiement.

- **Tâches clés**
  - préparer un **environnement serveur** (local, distant ou simulé) ;
  - déployer l’**application Web + API** ;
  - configurer les éléments essentiels (URL, virtual host, variables d’environnement) ;
  - vérifier le fonctionnement via des **tests réels** et les **logs** ;
  - documenter les **étapes de déploiement** pour les rejouer.

- **Livrables attendus**
  - environnement de déploiement opérationnel ;
  - application Web + API accessible ;
  - documentation de déploiement (guide, commandes, checklist) ;
  - notes de tests post-déploiement.
  
---

## M8 — Veille technologique et labs

- **Description courte**  
  Explorer de nouveaux outils ou pratiques, réaliser de petits labs et partager les découvertes avec le groupe, en lien avec le projet fil rouge quand c’est possible.

- **Tâches clés**
  - repérer un **outil, framework ou bonne pratique** à explorer ;
  - réaliser un **mini-lab** ou une petite démo ;
  - documenter les **points clés** (intérêt, limites, contexte d’usage) ;
  - présenter la découverte à l’oral ou via un **court document** ;
  - relier cette exploration au **projet fil rouge** si possible.

- **Livrables attendus**
  - mini-lab ou démo fonctionnelle ;
  - courte note de veille (fiche, slide, page markdown) ;
  - partage (présentation courte ou démo au groupe).
