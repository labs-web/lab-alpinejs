# Mini-Projet : Gestion d'Articles avec Alpine.js

## ✅ Organisation Professionnelle (Laravel + Vite)

### 📁 Structure du Projet

```
mini-projet/
├── app/
│   └── Http/Controllers/
│       └── ArticleController.php      # CRUD complet
├── resources/
│   ├── css/
│   │   └── app.css                    # Tailwind CSS
│   ├── js/
│   │   ├── app.js                     # Point d'entrée Alpine + Vite
│   │   ├── bootstrap.js               # Configuration Axios
│   │   └── alpine/
│   │       └── components/
│   │           └── articleManager.js  # Composant Alpine réutilisable
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php          # Layout principal (@vite)
│       └── articles/
│           └── index.blade.php        # Template propre (CRUD)
├── package.json                       # Alpine.js installé via NPM
└── vite.config.js                     # Configuration Vite
```

### ✨ Bonnes Pratiques Appliquées

#### 1. **Installation Alpine via Vite** ✅
```json
// package.json
{
  "dependencies": {
    "alpinejs": "^3.15.5"
  }
}
```

#### 2. **Séparation JS / Blade** ✅
- **Blade** : Template propre, minimal (97 lignes vs 183 avant)
- **JS** : Logique dans `resources/js/alpine/components/articleManager.js`

#### 3. **Vite en Production** ✅
```blade
<!-- resources/views/layouts/app.blade.php -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- ❌ Plus de CDN ! -->
```

#### 4. **Composants Alpine Organisés** ✅
```javascript
// resources/js/app.js
import Alpine from 'alpinejs';
import articleManager from './alpine/components/articleManager';

Alpine.data('articleManager', articleManager);
Alpine.start();
```

#### 5. **CSRF Token Configuré** ✅
```blade
<meta name="csrf-token" content="{{ csrf_token() }}">
```

### 🚀 Fonctionnalités CRUD

- ✅ **Recherche Dynamique** : Debounce 300ms
- ✅ **Filtrage par Statut** : Publié / Brouillon
- ✅ **Création** : Modale avec formulaire
- ✅ **Suppression** : Confirmation avant delete
- ✅ **Chargement Asynchrone** : Fetch API propre

### 🎯 Commandes

```bash
# Installation
composer install
npm install

# Migration
php artisan migrate --seed

# Développement
npm run dev           # Terminal 1 : Vite
php artisan serve     # Terminal 2 : Laravel
```

### 📊 Comparaison Avant/Après

| Aspect             | Avant ❌                       | Après ✅                            |
| ------------------ | ----------------------------- | ---------------------------------- |
| **Alpine.js**      | CDN                           | NPM + Vite                         |
| **Tailwind**       | CDN                           | NPM + Vite                         |
| **Code JS**        | Inline dans Blade (85 lignes) | Fichier séparé `articleManager.js` |
| **Template Blade** | 183 lignes                    | 97 lignes (-47%)                   |
| **Organisation**   | Tout mélangé                  | Séparation claire                  |
| **Production**     | CDN externe                   | Build optimisé Vite                |

### 🎨 Patterns Alpine Utilisés

- `x-data` : État du composant
- `x-model` : Binding bidirectionnel
- `@input.debounce.300ms` : Recherche avec debounce
- `x-for` : Boucle sur articles
- `x-show` : Affichage conditionnel
- `x-transition` : Animations modale
- `@click.outside` : Fermer modale en cliquant dehors

### 📚 Documentation

Voir `.agent/skills/alpinejs/` pour :
- **SKILL.md** : Guide complet Alpine + Laravel
- **examples.md** : Patterns avancés
- **cheatsheet.md** : Référence rapide

---

**Version** : 2.0 (Professional Laravel + Vite)  
**Alpine.js** : v3.15.5  
**Laravel** : v11.x
