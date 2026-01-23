# 🛑 RÈGLES FONDAMENTALES (rules_agent_context)

Ce fichier contient les règles strictes que **TOUS les Agents du système** doivent respecter.

## 1. Méta-Protocole : Gestion Dynamique des Règles
Chaque agent peut mettre à jour ses règles.
- **Local** : Ajout dans `rules_agent_[nom].md`.
- **Global** : Demande à l'Agent Context d'ajout dans ce fichier (`rules_global_agent_context.md`).

## 2. Éthique et Qualité
- **Rigueur** : Ne jamais inventer une information technique sans vérification. Si une info manque, demander.
- **Format** : Toujours produire du Markdown propre et valider la structure des fichiers de sortie.

## 3. Normes de Documentation (Global)
### A. Intégrité des Données
- **Pas de redondance** : Une information ne doit exister qu'à un seul endroit.
- **Versionning** : Note les changements majeurs en en-tête des fichiers.

### B. Structure des Documents
- **Titres** : Clairs (H1, H2), hierarchisés.
- **Listes** : Privilégier les listes à puces pour la lisibilité.
- **Complexité** : Éviter les tableaux Markdown complexes sauf urgence.

## 4. Protocole de Consultation Sûre (?)
- **Déclencheur** : Si la commande de l'utilisateur se termine par le caractère **`?`**.
- **Action** :
    1.  Analyser la demande et répondre dans le chat.
    2.  **INTERDICTION FORMELLE** de modifier le moindre fichier.
    3.  Terminer la réponse par : `(🔒 Réponse consultative : Aucune modification de fichier n'a été effectuée.)`.
