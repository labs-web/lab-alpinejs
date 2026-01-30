---
description: Workflow de développement Water Flow (Classique) - Analyse → Conception → Réalisation
---

# Workflow : Water Flow (Classique)

Ce workflow suit une approche séquentielle traditionnelle pour le développement de fonctionnalités.

## Phases

### Phase 1 : Analyse
**Objectif** : Comprendre le besoin et le contexte.

**Actions** :
1. Clarifier les exigences avec l'utilisateur.
2. Identifier les ressources existantes (composants, routes, modèles).
3. Analyser les dépendances techniques.

**Livrable** : document d'analyse (optionnel, peut être un résumé conversationnel).

---

### Phase 2 : Conception
**Objectif** : Définir l'architecture et les composants nécessaires.

**Actions** :
1. **Backend** : Définir les modèles (Eloquent), migrations, controllers.
2. **Frontend** : Définir les vues Blade, les composants Alpine.js.
3. **API** : Si nécessaire, définir les endpoints et la structure JSON.

**Livrable** : Plan technique détaillé avec architecture (Backend + Frontend).

---

### Phase 3 : Réalisation
**Objectif** : Implémenter la solution.

**Actions** :
1. **Backend** :
   - Créer les migrations.
   - Créer les modèles Eloquent.
   - Créer les controllers.
   - Définir les routes.

2. **Frontend** :
   - Créer les vues Blade.
   - Ajouter l'interactivité Alpine.js.
   - Styliser avec Tailwind CSS.

3. **Intégration** :
   - Connecter le backend et le frontend.
   - Tester le flux complet.

**Livrable** : Code fonctionnel prêt à être testé.

---

### Phase 4 : Vérification
**Objectif** : S'assurer que tout fonctionne comme prévu.

**Actions** :
1. Tests manuels dans le navigateur.
2. Validation des flux utilisateurs.
3. Vérification de la qualité (sécurité, accessibilité).

**Livrable** : Fonctionnalité validée et documentée.

---

## Notes
- Ce workflow est **séquentiel** : chaque phase doit être complétée avant de passer à la suivante.
- Il est plus adapté aux projets avec des exigences bien définies dès le départ.
- Pour des projets nécessitant des itérations rapides sur l'UI, le workflow `/processus-developpement` (UI-First) est préférable.
