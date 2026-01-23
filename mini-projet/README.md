# Mini-Projet : Gestion d'Articles avec Alpine.js

Ce projet Laravel démontre l'intégration d'**Alpine.js** dans un contexte "Monolithique" (Blade).
Il implémente une interface de gestion d'articles (CRUD) **sans rechargement de page** pour les actions courantes, grâce à l'interactivité d'Alpine.

## Fonctionnalités Clés

*   **Recherche Dynamique** : Filtrage par titre en temps réel (Debounce) via API.
*   **Filtrage par Statut** : Sélection (Tous / Publiés / Brouillons) mettant à jour la liste.
*   **Modale de Création** : Formulaire dans une modale animée (`x-show` / `x-transition`) pour créer des articles sans quitter la page.
*   **Suppression Asynchrone** : Suppression d'éléments de la liste avec confirmation.

## Stack Technique

*   **Back-end** : Laravel 10+ (Controllers API-friendly).
*   **Front-end** : Blade + Alpine.js (v3) + Tailwind CSS.
*   **Approche** : "Locality of Behavior" (Tout le JS est dans `index.blade.php`).

## Installation et Démarrage

1.  **Installation des dépendances**
    ```bash
    composer install
    npm install
    ```

2.  **Configuration Environnement**
    ```bash
    cp .env.example .env
    php artisan key:generate
    touch database/database.sqlite
    # configurer DB_CONNECTION=sqlite dans .env
    ```

3.  **Migration**
    ```bash
    php artisan migrate --seed
    ```

4.  **Lancement**
    ```bash
    npm run dev
    php artisan serve
    ```

## Structure du Code

*   `resources/views/articles/index.blade.php` : Contient tout le composant Alpine `articleManager`.
*   `app/Http/Controllers/ArticleController.php` : Gère les requêtes normales ET les requêtes AJAX/JSON.
