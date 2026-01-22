# 🧠 Règles Spécifiques - Agent Lab

Ce fichier contient tes directives opérationnelles pour la création de Labs.

## 1. Format de Sortie
- **Structure** : Créer un dossier `labs/lab-[techno]/` à la racine du projet si demandé.
- **Présentation** : Fichier `presentation.md` (Format Marp) avec frontmatter standard.
- **Tutoriels** : Dossier `tutos/` contenant `01-hello.md`, `02-concepts.md`, `03-exemple.md`.

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
