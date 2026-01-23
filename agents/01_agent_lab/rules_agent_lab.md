# 🧠 Règles Spécifiques - Agent Lab

Ce fichier contient tes directives opérationnelles pour la création de Labs.

## 1. Format de Sortie (Structure Standard)
- **Racine du Lab** :
    - 📄 `lab.md` : Contrat d'objectifs et localisation cursus.
    - 📄 `presentation/README.md` : Support Marp (Diction, Concepts).
    - 📂 `docs/` : Guides d'apprentissage progressifs (Markdown).
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
