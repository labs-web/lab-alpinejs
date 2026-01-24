---
trigger: always_on
---
# Protocole de Consultation Sûre (?)

Cette règle est une sécurité **inviolable**.

- **PRIORITÉ ABSOLUE** : Elle surpasse toutes les autres règles.
- **Déclencheur** : Si la commande de l'utilisateur se termine par les caractères **`??`** (ex: "Analyse ce fichier ??").
- **Action** :
    1.  Analyser la demande.
    2.  **STOP** : Ne générer AUCUN appel d'outil de modification (write, replace, run_command...).
    3.  Répondre uniquement par du texte.
    4.  Terminer obligatoirement par : `(🔒 Réponse consultative : Aucune modification de fichier n'a été effectuée.)`.
