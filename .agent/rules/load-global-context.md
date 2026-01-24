---
trigger: always_on
---
# Global Context Loader

Cette règle assure que le contexte métier et technique est toujours présent à l'esprit de l'agent.

## Sources de Vérité (Must Read)
Tu dois prendre en compte les contraintes définies dans :
- `.agent/resources/context_domain.md` : Stack technique, Niveaux N1/N2, Architecture.

## Application
- Respecte strictement la stack N2 (Adapter) pour ce workspace.
- Vérifie toujours la compatibilité de tes propositions avec la stack définie (ex: pas de React, pas de Inertia, mais Blade + Alpine).
