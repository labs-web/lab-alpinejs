# Alpine.js Best Practices

Ce skill définit les standards de syntaxe et de performance pour Alpine.js afin de garantir la maintenabilité des interfaces.

**1. Syntaxe Raccourcie (Shorthand)**

* Utiliser `@` au lieu de `x-on:` (ex: `@click="action"`).
* Utiliser `:` au lieu de `x-bind:` (ex: `:class="{ 'hidden': !open }"`).

**2. Prévention du Flash de Contenu (FOUC)**

* Ajouter systématiquement `x-cloak` aux éléments masqués au chargement.
* Vérifier la présence de la règle CSS `[x-cloak] { display: none !important; }`.

**3. Encapsulation**

* Logique simple : `x-data` en ligne autorisé.
* Logique complexe : Extraction obligatoire dans `Alpine.data()` pour la réutilisabilité.

---

### 🛠️ SKILL: tech-laravel-blade.md

# Laravel Blade & Tailwind CSS Guidelines

Garantit la cohérence visuelle et structurelle des templates du projet Fil Rouge.

**1. Architecture des Vues**

* Privilégier `@include('partials.name')` pour les éléments réutilisables.
* Éviter les composants `<x-name />` sauf demande explicite pour garder une structure simple (N1/N2).

**2. Standards Tailwind CSS**

* **Utility-First** : Aucune balise `<style>` ou style en ligne.
* **Mobile-First** : Priorité aux styles mobiles avec modificateurs de réactivité (ex: `md:flex`).

---

### 🛠️ SKILL: alpine-blade-integration.md

# Alpine.js & Blade Integration

Définit le couplage technique entre le serveur (Laravel) et l'interactivité client (Alpine).

**1. Passage de Données**

* Utiliser `json_encode` dans le `x-data` pour transmettre des données depuis Blade.
* Respecter la **Locality of Behavior** (LoB).

**2. Pattern "One Page CRUD" (Niveau N2)**

* Consommer les endpoints RESTful via la **Fetch API**.
* Gérer les états de chargement (`isLoading`) et les erreurs de manière fluide.

---

### 🛠️ SKILL: alpine-debugging.md

# Alpine.js Debugging

Méthodologie systématique pour diagnostiquer et résoudre les problèmes d'interactivité.

**1. Inspection de l'État ($data)**

* Injecter un panneau `<pre x-text="JSON.stringify($data, null, 2)">` pour visualiser les variables en temps réel.

**2. Surveillance Dynamique ($watch)**

* Utiliser `$watch` dans le `x-init` pour tracer les changements de variables dans la console.

**3. Outils Externes**

* Recommander l'usage de l'extension **Alpine.js DevTools** pour une inspection profonde.
