# 🛠️ SKILL: Alpine.js & Blade Integration

Ce skill permet de créer des interfaces dynamiques et réactives au sein des vues Laravel Blade, en respectant les standards de performance et de maintenabilité du projet Fil Rouge.

---

## 1. Passage de Données (Blade vers Alpine)

Pour transmettre des données du serveur vers le client, utiliser systématiquement la directive `json_encode` pour garantir l'intégrité des types.

* **Standard** : Passer les données via l'attribut `x-data`.

```html
<div x-data="dropdown({{ json_encode($initialData) }})">
    </div>

```

* **Principe** : Respecter la **Locality of Behavior** (LoB) en gardant la définition de l'état au plus proche de l'élément HTML.

---

## 2. Pattern "One Page CRUD" (Niveau N2)

Le niveau **N2** impose des interactions fluides sans rechargement de page pour les listes et les filtres.

* **Architecture** : Centraliser la logique de recherche et de filtrage dans un objet `Alpine.data`.
* **Communication API** : Utiliser la **Fetch API** pour consommer les endpoints RESTful du contrôleur Laravel.
* **Gestion des États** : Afficher des indicateurs de chargement (`isLoading`) et gérer les erreurs de réseau proprement.

---

## 3. Communication avec le Serveur (Fetch & REST)

Les appels API doivent être conformes aux standards définis dans le référentiel technique :

* **Verbes HTTP** : Respecter les méthodes (GET pour la lecture, POST pour la création, PUT/PATCH pour l'édition, DELETE pour la suppression).
* **Protection** : Inclure systématiquement le token **CSRF** dans les headers pour les requêtes de modification.
* **Format** : Les réponses attendues du serveur doivent être au format JSON via les **Laravel Resources**.

---

## 4. Logique de Validation & Qualité

Avant de valider une intégration, vérifier les points suivants :

* **Syntaxe Shorthand** : Utilisation de `@click` et `:class` obligatoirement.
* **Zéro FOUC** : Présence de `x-cloak` sur les éléments masqués au chargement.
* **Encapsulation** : Si la logique dépasse 10 lignes, elle doit être extraite dans un fichier `app.js` ou un bloc de script dédié via `Alpine.data`.

---

## 5. Intégration Blade Avancée

* **Stacks & Pushes** : Utiliser `@push('scripts')` pour injecter la logique JS spécifique à une vue dans le layout principal.
* **Blade Components** : Préférer l'inclusion de partials (`@include`) pour les éléments simples, mais utiliser les composants (`<x-component />`) pour les éléments UI complexes si nécessaire.

