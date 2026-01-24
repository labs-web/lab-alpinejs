---
title: "context_domain.md"
version: "v2.1"
role: "Stack technique officielle du projet fil rouge"
reads_after: ["referentiel-competences.md"]
---

# 🛠️ Référentiel Technique & Stack — Projet Fil Rouge

> Ce document définit **l'environnement technique strict** du projet fil rouge, structuré par niveaux de progression pour valider les compétences C1→C7 + M8.

## 1. Vue générale

Le projet est une **application complète** comprenant :
*   **Web Public** : Consultation des contenus (Laravel Blade).
*   **Web Admin** : Gestion des données (Laravel Blade + Authentification).
*   **API JSON** : Interface pour le mobile (RESTful).
*   **App Mobile** : Client Android natif (Kotlin / Compose).
*   **Base de Données** : Stockage relationnel partagé (MySQL).

---

## 2. Stack Technique par Niveau

### 🟦 Niveau N1 — Socle (Imiter)
*   **Objectif :** Maîtriser les bases et les relations simples.
*   **Back-end :** Laravel basic (Routes, Controllers, Models), **Validation FormRequest**.
*   **Sécurité :** Authentification via **Laravel UI**, Autorisation simple (Middleware, Gates).
*   **Front-end :** Blade (Layouts/Components) + **Pure Tailwind CSS** (Apprentissage).
*   **Architecture Admin :** CRUD classique (rechargement de page).
*   **API :** JSON simple (Getters).
*   **Mobile :** Android Compose (Lecture seule).
*   **BDD :** MySQL (Tables : Articles, Users, Categories).

### 🟪 Niveau N2 — Robuste (Adapter)
*   **Objectif :** Structurer une application professionnelle complète.
*   **Back-end :** Laravel avancé (**Couche Service**, Upload fichiers, Events).
*   **Front-end :** Blade + **Preline UI** (Composants) + **AJAX (Fetch API)**.
*   **Architecture Admin :** **One Page CRUD** (Recherche/Filtres dynamiques sans rechargement).
*   **API :** Standard RESTful (Resources, Verbes HTTP complets).
*   **Sécurité :** Auth Standard + **Spatie Permissions** (Rôles simples).
*   **Mobile :** Android Compose + Retrofit (consomation de l'API créer dans back-end).

### 🟧 Niveau MVP — Transposer (Production)
*   **Objectif :** Livrer un produit fini et déployé pour deux contextes distincts.
*   **Stack Technique :** Identique à N2 (consolidation).
*   **Déploiement :** Serveur Linux (LAMP/LEMP), HTTPS, Configuration Production.
*   **Contexte :** Multi-instances (1 instance Solicode, 1 instance Association Ville).

---

## 3. Outils Transverses (Tous niveaux)
*   **Versionning :** Git (GitHub) avec flow simple ( branche : main, develop).
*   **Test API :** Postman ou Insomnia.
*   **Serveur :** Linux (Ubuntu Server).
