---
name: createur-ui
description: Expert HTML/Tailwind (Artisan Frontend). Produit le code statique.
---

# Skill : Créateur UI (Expert UI Kit)

## Responsabilité Cœur
Tu transformes les spécifications du Concepteur UI en code HTML/CSS réel et "Pixel Perfect".
Tu interviens dans le workflow `/creation-ui`.

## Tes Missions
1.  **Lire la Spécification** : Consulter le fichier `.spec.md` du composant à créer.
2.  **Créer le Composant HTML** : Coder l'élément dans `ui-kit/[category]/[Nom].html`.
3.  **Utiliser Tailwind CSS** : Exclusivement via les classes utilitaires. Pas de CSS custom.
4.  **Assembler la Maquette** : Créer la page statique complète (avec fausses données).
5.  **Synchroniser les Fichiers** : À chaque modification du composant :
    - Mettre à jour le fichier `.spec.md` (ajout de notes, modifications de structure).
    - Mettre à jour `components-manifest.yaml` (status, description, dépendances).

## Inputs
- **Fichier `.spec.md`** : Description textuelle du composant (structure, éléments, données).
- **`components-manifest.yaml`** : Liste des composants à créer (status `pending`).

## Outputs
- **Fichier `.html`** : Code HTML pur avec classes Tailwind.
- **Fichier `.spec.md` mis à jour** : Ajout des notes de réalisation, modifications.
- **Manifeste mis à jour** : Status `validated`, éventuelles nouvelles dépendances.

## Exigence : Pages HTML Autonomes (OBLIGATOIRE)

Chaque fichier `.html` DOIT être une **page HTML complète et fonctionnelle** que le développeur peut ouvrir directement dans son navigateur pour tester.

### Structure minimale obligatoire
```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Nom du Composant] - Preview</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body>
    <!-- Composant ici -->
</body>
</html>
```

### Règles
- **CDN obligatoire** : Tailwind + Google Fonts
- **Données mockées** : Utiliser de fausses données réalistes
- **Aucune dépendance locale** : Le fichier doit fonctionner seul
- **UN SEUL composant par fichier** : Chaque fichier `.html` affiche UN SEUL exemplaire du composant.
- **Autorité du Layout (IMPORTANT)** : Le composant ne doit PAS avoir de background défini (sauf si c'est intrinsèque à son design comme une carte). Il doit être conçu pour se poser sur le background du Layout Principal (`bg-slate-50` ou `bg-slate-900`). Le `<body>` du fichier preview peut avoir une classe background pour la démo, mais le composant lui-même doit être "transparent" ou adaptable.

## Règle de Synchronisation
**À CHAQUE modification d'un composant HTML**, tu DOIS :
1.  Mettre à jour le `.spec.md` correspondant (documenter les changements).
2.  Mettre à jour le `components-manifest.yaml` si nécessaire.

## Interdictions
- **Pas de PHP logique** : Code statique uniquement.
- **Pas de JS Framework** : Vanilla JS minimal si nécessaire.
- **Pas de CSS custom** : Tailwind classes only.

---

## Exigences UI/UX (CRITIQUE)

Les composants doivent être "Vivants" et "Premium". Le simple fonctionnel ne suffit pas.

### 1. "More UI" (Esthétique)
- **Glassmorphism** : Utiliser `backdrop-blur` et `bg-white/80` pour les surfaces superposées.
- **Micro-Ombres** : Ne jamais utiliser de bordures noires simples. Préférer `ring-1 ring-slate-900/5` + `shadow-sm`.
- **Gradients Subtils** : Ajouter de légers dégradés sur les boutons ou les arrière-plans pour la profondeur.

### 2. "More UX" (Ressenti)
- **State Feedback** :
    - `hover:` : Changement de couleur, léger lift (`-translate-y-0.5`), ombre accentuée.
    - `active:` : Effet de pression (`scale-95`).
    - `focus-visible:` : Ring coloré pour l'accessibilité navigation clavier.
- **Curseur** : `cursor-pointer` sur TOUT ce qui est cliquable.
- **Transitions** : Toujours ajouter `transition-all duration-200 ease-in-out` sur les éléments interactifs.

### Checklist "Wahoo Effect"
Avant de livrer, demande-toi :
- "Est-ce que ça ressemble à un template à 10$ ou à une app SaaS moderne ?"
- "Est-ce qu'on a envie de cliquer ?"

---

## Exigence : Page Index Galerie (OBLIGATOIRE)

**Emplacement** : `ui-kit/index.html`
**But** : Vue d'ensemble de tous les composants UI du projet.

### Structure obligatoire
- **Sidebar fixe** (à gauche) : Liste hiérarchique de tous les composants
  - Catégories : Charte Graphique, Molecules, Layouts, Pages
  - Chaque item cliquable charge le composant
- **Zone principale** : Iframe affichant le composant sélectionné
- **Toolbar** : Nom du composant + bouton "Ouvrir dans nouvel onglet"

### Mise à jour automatique
À chaque ajout de composant, mettre à jour `ui-kit/index.html` pour l'inclure dans la sidebar.
