# Skill Alpine.js Expert

## 📋 Description

Ce skill transforme l'agent en expert **Alpine.js**, capable de développer des interfaces interactives en suivant les meilleures pratiques du framework.

Alpine.js est un framework JavaScript minimaliste (~7kb) qui apporte la réactivité de Vue/React directement dans le HTML, sans build step. Idéal pour enrichir des applications server-side (Laravel, PHP, Django) avec de l'interactivité légère.

## 🎯 Objectifs du Skill

L'agent sera capable de :

1. ✅ **Comprendre la philosophie Alpine.js** (Locality of Behavior, approche déclarative)
2. ✅ **Maîtriser toutes les directives** (`x-data`, `x-show`, `x-if`, `x-for`, etc.)
3. ✅ **Utiliser les Magic Properties** (`$refs`, `$watch`, `$dispatch`, `$nextTick`, etc.)
4. ✅ **Implémenter des patterns courants** (dropdown, modale, tabs, accordion, etc.)
5. ✅ **Intégrer Alpine avec Laravel Blade** (passer données PHP, CSRF, routes)
6. ✅ **Gérer des données asynchrones** (fetch API, états de chargement)
7. ✅ **Suivre les bonnes pratiques** et éviter les anti-patterns

## 📁 Structure du Skill

```
.agent/skills/alpinejs/
├── SKILL.md           # Documentation principale du skill (REQUIS)
├── README.md          # Ce fichier (Documentation du skill)
├── examples.md        # Exemples pratiques et cas d'usage avancés
└── cheatsheet.md      # Référence rapide (syntaxe, directives, patterns)
```

### Fichiers

#### 1. `SKILL.md` (Principal)
- **Philosophie Alpine.js**
- **Toutes les directives** avec explications et exemples
- **Magic Properties** détaillées
- **Patterns courants** (dropdown, modale, etc.)
- **Bonnes pratiques** et anti-patterns
- **Installation** et ressources

#### 2. `examples.md`
- **Cas d'usage avancés** pour applications réelles
- Gestion CRUD complète (recherche, filtrage, création, suppression)
- Modales avec validation
- Tabs, Accordion, Toast notifications
- Infinite scroll
- **Intégration Laravel Blade** (CSRF, routes, données PHP)

#### 3. `cheatsheet.md`
- **Référence rapide** pour consultation ultra-rapide
- Tableaux de directives, modificateurs, magic properties
- Patterns en one-liner
- Anti-patterns à éviter
- Support TypeScript

## 🚀 Utilisation du Skill

### Activation Automatique

Le skill est automatiquement activé lorsque l'agent détecte :
- Des fichiers Blade (`.blade.php`)
- Des mentions d'Alpine.js dans le code
- Des demandes explicites de l'utilisateur

### Commandes Suggérées

```bash
# Créer un composant dropdown Alpine
"Crée un dropdown avec Alpine.js"

# Ajouter une recherche avec debounce
"Ajoute une recherche en temps réel avec debounce 500ms"

# Créer une modale de confirmation
"Crée une modale de confirmation de suppression"

# Implémenter un système de tabs
"Implémente des tabs avec Alpine.js"
```

## 🎓 Documentation Interne du Skill

Le skill contient toute la documentation nécessaire en interne :

- **SKILL.md** : Guide complet Alpine.js (directives, magic properties, patterns)
- **examples.md** : Cas d'usage avancés (CRUD, modales, tabs, etc.)
- **cheatsheet.md** : Référence rapide (syntaxe, modificateurs, tableaux)
- **README.md** : Documentation du skill et guide d'utilisation

## ✨ Principes Clés Appliqués

### 1. Locality of Behavior
Le comportement reste proche de la structure HTML.

```html
<!-- ✅ Bon : Comportement visible dans le HTML -->
<div x-data="{ open: false }">
    <button @click="open = !open">Toggle</button>
    <div x-show="open">Contenu</div>
</div>
```

### 2. Approche Déclarative
Privilégier les directives Alpine plutôt que DOM manipulation.

```html
<!-- ❌ Mauvais : Impératif -->
<button onclick="document.querySelector('#menu').classList.toggle('hidden')">

<!-- ✅ Bon : Déclaratif -->
<button @click="open = !open">
```

### 3. Simplicité
Toujours chercher la solution la plus simple.

```html
<!-- ❌ Complexe : Store global pour état local -->
Alpine.store('menu', { open: false })

<!-- ✅ Simple : État local avec x-data -->
<div x-data="{ open: false }">
```

## 🔧 Contexte Technique

Ce skill est compatible avec tout projet utilisant :
- **Backend** : Laravel, PHP, Django, Rails, ou tout framework server-side
- **Frontend** : HTML + Alpine.js v3 (optionnellement avec Tailwind CSS)
- **Approche** : Monolithique (Server-side rendering) enrichi avec Alpine

## 📚 Exemples de Référence

### Dropdown Menu
Voir `examples.md` → Section 1 "Patterns Courants"

### Modale avec Formulaire
Voir `examples.md` → Section 2 "Modale de Création"

### Recherche Dynamique
Voir `examples.md` → Section 1 "Recherche Dynamique avec Debounce"

### Suppression Asynchrone
Voir `examples.md` → Section 3 "Suppression Asynchrone"

## 🎯 Cas d'Usage Idéaux

Alpine.js est parfait pour :
- ✅ Applications server-side (Laravel, PHP, Django, Rails)
- ✅ Enrichissement progressif d'HTML existant
- ✅ Interactivité légère (UI components)
- ✅ Formulaires dynamiques avec validation client
- ✅ Filtrage/recherche temps réel

Alpine.js n'est **PAS** idéal pour :
- ❌ SPA complexes avec routing (→ Vue/React)
- ❌ Applications temps réel WebSocket massives
- ❌ Gestion d'état globale très complexe (→ Vuex/Redux)

## 🔄 Maintenance du Skill

### Mise à Jour

Pour mettre à jour ce skill :
1. Consulter la [documentation officielle Alpine.js](https://alpinejs.dev)
2. Vérifier les nouveautés de version
3. Mettre à jour `SKILL.md` avec nouvelles features
4. Ajouter exemples pertinents dans `examples.md`
5. Mettre à jour `cheatsheet.md` si nouvelles directives

### Évolution

Ce skill peut évoluer avec :
- **Plugins Alpine** (Focus, Collapse, Intersect, Persist)
- **Intégration Livewire** (Alpine + Laravel Livewire)
- **Composants Tailwind UI** adaptés pour Alpine
- **Patterns avancés** (drag & drop, animations complexes)

## 🤝 Contributeurs

Ce skill a été créé en analysant :
- Documentation officielle Alpine.js v3
- Tutoriels et exemples de la communauté
- Patterns CRUD courants
- Meilleures pratiques établies

## 📖 Ressources Externes

- **Site Officiel** : [alpinejs.dev](https://alpinejs.dev)
- **GitHub** : [alpinejs/alpine](https://github.com/alpinejs/alpine)
- **Alpine Toolbox** : [alpinetoolbox.com](https://www.alpinetoolbox.com)
- **Playground** : [alpinejs.dev/playground](https://alpinejs.dev/playground)

---

**Version** : 1.0.0  
**Dernière mise à jour** : 2026-01-30  
**Compatibilité** : Alpine.js v3.x
