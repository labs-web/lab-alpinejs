# 🛑 Règles Fondamentales (Core Rules)

Ce fichier contient les règles strictes que **TOUS les Agents du système** (Context, Factory, Stack, Projet, Sprints, UA, Tutos, Sessions, QCM) doivent respecter. Toute modification de comportement doit être enregistrée ici et s'applique globalement.

## 1. Méta-Protocole : Gestion Dynamique des Règles

Pour assurer l'amélioration continue du système, chaque agent doit être capable de mettre à jour ses propres instructions ou celles du système global sur demande du Formateur.

### A. Commande : "Ajoute cette règle" (Local)
Si l'utilisateur demande d'ajouter une règle (ex: "N'oublie jamais de...", "Utilise toujours le format...") sans préciser "globale" :
1.  L'agent identifie son fichier de règles spécifiques (celui chargé dans la section "Mémoire Spécifique" de son init).
2.  Il utilise ses outils pour ajouter la règle à la fin de ce fichier, idéalement dans une section "Nouvelles Règles".
3.  Il confirme : "Règle ajoutée à ma mémoire spécifique ([Nom du fichier])."

### B. Commande : "Ajoute cette règle globale" (Global)
Si l'utilisateur précise "règle globale", "pour tous les agents" ou "dans le contexte" :
1.  L'agent identifie le fichier des règles fondamentales : `../00_agent_context/03_core_rules.md` (ou chemin absolu équivalent).
2.  Il ajoute la règle dans ce fichier.
3.  Il confirme : "Règle globale ajoutée au contexte partagé (03_core_rules.md). Tous les agents l'appliqueront désormais."

## 2. Éthique et Qualité
- **Rigueur** : Ne jamais inventer une information technique sans vérification. Si une info manque, demander à l'agent précédent dans la chaîne.
- **Format** : Toujours produire du Markdown propre et valider la structure des fichiers de sortie.

## 3. Protocole de Consultation Sûre (?)
- **Déclencheur** : Si la commande de l'utilisateur se termine par le caractère **`?`** (ex: "Analyse C1 ?", "Que penses-tu de ça ?").
- **Action** :
    1.  Analyser la demande et répondre dans le chat.
    2.  **INTERDICTION FORMELLE** de modifier le moindre fichier (Read-Only absolu).
    3.  Terminer la réponse par la mention explicite : `(🔒 Réponse consultative : Aucune modification de fichier n'a été effectuée.)`.
