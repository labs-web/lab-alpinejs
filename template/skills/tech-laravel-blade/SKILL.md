# 🚀 SKILL: Laravel Blade & Tailwind CSS Guidelines

Ce skill garantit la cohérence visuelle et l'intégrité structurelle des interfaces produites pour le projet Fil Rouge.

---

## 1. Architecture des Vues (Blade)

* **Partials** : Utiliser systématiquement la directive `@include('partials.name')` pour les éléments UI réutilisables.
* **Composants** : Éviter l'utilisation des composants Blade anonymes (`<x-name />`) sauf demande explicite, afin de maintenir une structure simple et lisible adaptée aux niveaux **N1/N2**.
* **Organisation** : Regrouper les fragments de code réutilisables dans un dossier `partials/` ou `includes/` pour assurer la propreté de l'arborescence.

---

## 2. Standards Tailwind CSS

* **Utility-First** : Proscrire l'usage des balises `<style>` ou des attributs `style="..."`. Toute la mise en forme doit reposer exclusivement sur les classes utilitaires Tailwind.
* **Mobile-First** : Définir les styles pour mobile par défaut, puis ajouter la réactivité via les modificateurs (ex: `block md:flex lg:grid`).
* **Cohérence** : Utiliser les couleurs et espacements définis dans le thème du projet (ex: `bg-primary-500`) pour garantir l'unité visuelle.

---

## 3. Structure & Sémantique

* **HTML Sémantique** : Choisir les balises correctes (ex: `<button>` pour les actions, `<a>` pour la navigation) pour assurer l'accessibilité et le référencement.
* **Directives Laravel** : Utiliser la syntaxe standard (`@if`, `@foreach`, `@auth`) pour garantir la clarté logique du template Blade.

---

## 4. Logique de Validation

Lors de l'utilisation de ce skill, l'assistant **🎓 [Lab]** doit vérifier :

1. Le code produit est directement intégrable dans une vue Blade existante sans modification majeure.
2. La structure respecte la hiérarchie définie dans le référentiel de compétences **C2 (Développer une interface utilisateur)**.
3. Aucun style CSS externe ou "inline" n'est introduit inutilement.
