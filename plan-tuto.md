# Plan de Formation Alpine.js (5 Tutoriels)

Ce plan propose une progression pédagogique en 5 étapes pour maîtriser Alpine.js, du "Hello World" à une architecture d'application robuste.

## 🟢 Tutoriel 1 : Les Fondations - L'Approche Déclarative
**Objectif :** Comprendre la philosophie "JavaScript in HTML" et mettre en place l'environnement.
*   **Concepts clés :**
    *   Installation (CDN vs Module).
    *   Le scope du composant : `x-data`.
    *   Affichage de données : `x-text` vs `x-html`.
*   **Exercice :** Créer une carte de profil simple dont les informations sont stockées dans `x-data`.

## 🟢 Tutoriel 2 : Réactivité & Interactivité
**Objectif :** Rendre l'interface dynamique et réagir aux actions de l'utilisateur.
*   **Concepts clés :**
    *   Écoute d'événements : `x-on` (et raccourci `@`).
    *   Liaison d'attributs : `x-bind` (et raccourci `:`).
    *   Binding bi-directionnel : `x-model` (Inputs, Checkboxes).
*   **Exercice :** Créer un compteur interactif (incrémenter/décrémenter) et un champ de saisie qui met à jour un titre en temps réel.

## 🟪 Tutoriel 3 : Flux de Contrôle & Transitions
**Objectif :** Manipuler la structure du DOM conditionnellement et gérer des listes.
*   **Concepts clés :**
    *   Visibilité vs Existence : `x-show` vs `x-if`.
    *   Boucles : `x-for` (itération sur tableaux et objets).
    *   La touche "Waouh" : `x-transition` pour animer les changements d'état.
*   **Exercice :** Une mini Todo List filtrable avec animations d'ajout/suppression.

## 🟪 Tutoriel 4 : Architecture - Logique Déportée
**Objectif :** Nettoyer le HTML en extrayant la logique métier (Transition vers le code maintenable).
*   **Concepts clés :**
    *   Extraire la logique avec `Alpine.data()`.
    *   Le cycle de vie du composant : `init()`, `destroy()`.
    *   Les propriétés magiques contextuelles : `$el`, `$refs`.
*   **Exercice :** Refactoriser la Todo List du Tuto 3 en utilisant `Alpine.data` et ajouter un focus automatique avec `$refs`.

## 🟧 Tutoriel 5 : État Global & Communication (Real World)
**Objectif :** Gérer des données partagées entre composants et interagir comme une SPA légère.
*   **Concepts clés :**
    *   Store global : `Alpine.store()`.
    *   Communication inter-composants : `$dispatch` et écoute sur `window`.
    *   Réactivité avancée : `$watch` et `x-effect`.
*   **Exercice :** Créer un système de "Panier d'achat" où :
    1. Une liste de produits (composant A) ajoute des items.
    2. Une icône de panier dans le header (composant B) met à jour le total instantanément via le Store.
