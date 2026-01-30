---
type: rule
id: qualite-securite
---
# Qualité et Sécurité

## Qualité de Code
- **Lisibilité** : Les attributs Alpine (`x-*`) doivent être formatés pour rester lisibles.
- **Réutilisabilité** : Utiliser `Alpine.data()` pour la logique réutilisable.
- **Indépendance** : Les composants doivent être aussi indépendants que possible du contexte global.

## Accessibilité (a11y)
- Utiliser les attributs ARIA appropriés pour les éléments interactifs créés avec Alpine.js (ex: `aria-expanded`, `aria-hidden` synchronisés avec `x-show` ou `x-bind`).
- S'assurer que les interactions sont utilisables au clavier.

## Sécurité
- **XSS** : Attention à l'utilisation de `x-html`. Ne jamais injecter de contenu non assaini.
- **CSRF** : S'assurer que les requêtes `fetch` incluent le token CSRF de Laravel.
