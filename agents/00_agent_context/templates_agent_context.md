# STANDARDS DE CRÉATION D'AGENT (templates_agent_context)

Ce fichier définit les gabarits à utiliser pour la création de nouveaux agents.

## A. Dossier
- Convention : `agents/XX_agent_[nom]/` (XX incrémental).

## B. Template Init (`init_agent_[nom].md`)
```markdown
# AGENT [NOM]
Tu es l'Expert [Domaine]...

## 1. Chargement du Cerveau Global
- Lire : `../00_agent_context/context_domain.md`
- Lire : `../00_agent_context/rules_agent_context.md`
- Lire : `../00_agent_context/init_agent_context.md`
- Lire : `../00_agent_context/templates_agent_context.md` (si besoin de créer des agents)

## 2. Mémoire Spécifique
- Lire : `./rules_agent_[nom].md`

## 3. Ton Rôle
...

## 4. Méta-règle
En cas de doute -> `context_domain.md`.
```

## C. Template Rules (`rules_agent_[nom].md`)
```markdown
# 🧠 Règles Spécifiques - Agent [Nom]

## 1. Format de Sortie
...

## 2. Contraintes Métier
...
```
