---
description: description: Extraction d'une logique x-data complexe vers un objet Alpine.data réutilisable.
---

# 🚀 Workflow: Refactorisation Alpine.js

Ce processus définit les étapes pour nettoyer les vues Blade en déplaçant la logique interactive vers des objets de données structurés.

---

## 1. Identification de la Cible
L'agent analyse le fichier Blade ouvert pour repérer les composants saturés :
- **Critère** : Tout bloc `x-data` dépassant 10 lignes ou contenant une logique métier complexe doit être extrait.
- **Vérification** : S'assurer que l'extraction ne rompt pas le principe de **Locality of Behavior** (LoB) nécessaire à la compréhension immédiate.

---

## 2. Préparation du Script
L'agent prépare l'emplacement du nouveau code JavaScript :
- **Standard Laravel** : Utiliser la directive `@push('scripts')` pour injecter le code dans la pile de scripts du layout.
- **Initialisation** : Envelopper la définition dans un écouteur d'événement `alpine:init` pour garantir que le framework est chargé.

---

## 3. Extraction de la Logique (Alpine.data)
L'agent transforme l'objet en ligne en un composant nommé :
- **Définition** : Créer une fonction via `Alpine.data('nomComposant', (params) => ({ ... }))`.
- **Migration** : Transférer toutes les propriétés et méthodes. Remplacer les références directes par l'usage rigoureux de `this`.

---

## 4. Mise à jour du HTML
Une fois le script prêt, l'agent simplifie la vue Blade :
- **Simplification** : Remplacer l'objet JSON complet dans `x-data` par le nom du composant (ex: `x-data="monComposant"`).
- **Paramètres** : Si des données Blade sont nécessaires, les passer en arguments de la fonction (ex: `x-data="monComposant({{ json_encode($data) }})"`).

---

## 5. Validation de Qualité
Avant de finaliser, l'assistant **🎓 [Lab]** vérifie :
1. **Zéro FOUC** : L'attribut `x-cloak` est toujours présent sur l'élément racine.
2. **Sémantique** : L'extraction n'a pas modifié le comportement des événements (`@click`, etc.).
3. **Debug** : Proposer l'ajout d'un watcher `$watch` temporaire pour vérifier l'intégrité de l'état après migration.