---
description: description: Automatise la création d'un composant UI réutilisable (Blade + Alpine.js)
---

# 🚀 Workflow: Création de Composant UI

Ce processus guide l'assistant pour générer la structure de base d'un composant d'interface interactif au sein du projet Laravel.

---

## 1. Identification du Besoin
L'agent commence par interroger l'utilisateur pour définir le périmètre :
- **Nom du composant** : Demander le nom (ex: `Dropdown`, `Modal`, `Alert`, `Tabs`).
- **Fonctionnalité** : Identifier l'action principale (ex: bascule de visibilité, chargement asynchrone).

---

## 2. Création de la Structure (Blade)
L'agent doit créer un nouveau fichier dans le répertoire des composants :
- **Chemin** : `resources/views/components/[nom-du-composant].blade.php`.
- **Standard** : Utiliser la sémantique HTML correcte selon les directives techniques.

---

## 3. Injection du Boilerplate Technique
Le code généré doit fusionner les standards Blade et Alpine.js :

```html
<div x-data="{ open: false }" class="relative">
    <button @click="open = !open" 
            type="button" 
            class="px-4 py-2 bg-primary-500 text-white rounded"
            :aria-expanded="open">
        Toggle
    </button>

    <div x-show="open"
         @click.outside="open = false"
         x-transition
         x-cloak
         class="absolute mt-2 w-full bg-white border rounded shadow-lg z-10">
        {{ $slot }}
    </div>
</div>