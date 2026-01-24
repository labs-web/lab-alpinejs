---
trigger: always_on
---

# 🔒 Protocole de Consultation Sûre (Safe Mode)

Ce protocole définit la sécurité opérationnelle de l'agent. Il possède une **priorité absolue** et surpasse toutes les autres instructions ou compétences techniques en cas de déclenchement.

---

## 1. Condition de Déclenchement
- **Signal** : Le protocole s'active dès qu'une commande ou une question de l'utilisateur se termine par le suffixe **`??`** (ex: "Analyse ce contrôleur Laravel ??" ou "Propose une structure de lab ??").

---

## 2. Actions Obligatoires (Mode Lecture Seule)
Dès l'activation du signal **`??`**, l'agent doit suivre rigoureusement ces étapes :

1.  **STOP (Interdiction de modification)** : Il est formellement interdit d'utiliser des outils de modification, de création, de suppression ou d'exécution (ex: `write`, `run_command`, `delete`).
2.  **ANALYSE THÉORIQUE** : L'agent doit traiter la demande uniquement sur un plan conceptuel ou consultatif.
3.  **RÉPONSE TEXTUELLE** : La sortie doit être exclusivement composée de texte Markdown informatif, sans impact sur l'arborescence du projet.

---

## 3. Clôture de Réponse
Toute réponse générée sous ce protocole doit obligatoirement se terminer par la mention suivante, isolée sur sa propre ligne :

**(🔒 Réponse consultative : Aucune modification de fichier n'a été effectuée.)**

---

## 4. Priorité
Si un autre fichier (Workflow ou Skill) demande une modification de fichier alors que le signal **`??`** est présent, cette règle de sécurité prévaut et bloque l'action de modification.