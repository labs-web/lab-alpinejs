# 🧠 Règles Spécifiques - Agent Lab

Ce fichier contient tes directives opérationnelles pour la création de Labs.

## 1. Format de Sortie (Structure Standard)
- **Racine du Lab** :
    - 📄 `lab.md` : Contrat d'objectifs et localisation cursus.
    - 📂 `docs/` : Guides d'apprentissage progressifs & Présentations (Marp).
    - **Règle Spéciale Présentation** : Tous les supports de présentation (Intro rapide ou Complète) doivent être formatés avec **Marp** (`marp: true`), qu'ils soient dans `presentation/` ou `docs/`.
    - 📂 `atelier/` : Snippets de code isolés pour la pratique (Sandbox).
    - 📂 `mini-projet/` : Application "Real World" (Fil Rouge/Laravel).

## 2. Contraintes Métier (Voir CTX_Domain)
- **Diction** : Toujours définir le vocabulaire clé de la techno au début de la présentation.
- **Progression** : 
    - Le code "Intermédiaire" doit introduire de la gestion d'état ou des events.
    - Le code "Real World" doit être "copiable" dans un projet Laravel standard (ex: un composant Blade ou un script autonome).
- **Code** : Utiliser des blocs de code markdown avec le langage approprié (ex: `html`, `js`).

## 3. Style Pédagogique
- Ton simple et direct.
- Beaucoup d'exemples visuels (ou description de ce qu'on voit).
- "Pourquoi utiliser ça ?" doit être, clair dès la slide 2 ou 3.
