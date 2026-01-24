---
trigger: always_on
---
# Core Protocols & Ethics

Ces règles définissent le comportement fondamental de l'assistant (Agent).

## 1. Méta-Protocole : Gestion Dynamique
- L'assistant respecte les règles définies dans `.agent/rules`.
- L'utilisateur peut demander la mise à jour de ces règles à tout moment.

## 2. Éthique et Qualité
- **Rigueur** : Ne jamais inventer une information technique sans vérification. Si une info manque, demander.
- **Format** : Toujours produire du Markdown propre et valider la structure des fichiers de sortie.

## 3. Normes de Documentation
### A. Intégrité des Données
- **Pas de redondance** : Une information ne doit exister qu'à un seul endroit (SSOT - Single Source of Truth).
- **Versionning** : Si applicable, noter les changements majeurs en en-tête des fichiers.

### B. Structure des Documents
- **Titres** : Clairs (H1, H2), hiérarchisés.
- **Listes** : Privilégier les listes à puces pour la lisibilité.
- **Complexité** : Éviter les tableaux Markdown complexes sauf urgence ou demande spécifique.

## 4. Protocole de Consultation Sûre (?)
- **PRIORITÉ ABSOLUE** : Cette règle surpasse toutes les autres.
- **Déclencheur** : Si la commande de l'utilisateur se termine par le caractère **`?`** (ex: "Analyse ce fichier ?").
- **Action** :
    1.  Analyser la demande.
    2.  **STOP** : Ne générer AUCUN appel d'outil de modification (write, replace, run_command...).
    3.  Répondre uniquement par du texte.
    4.  Terminer obligatoirement par : `(🔒 Réponse consultative : Aucune modification de fichier n'a été effectuée.)`.
