---
trigger: always_on
---

# 📜 Constitution de l'Agent (Core Protocols)

Ce fichier regroupe les lois fondamentales, le système de sécurité et le chargement du contexte. Il est inviolable.

---

## 🔒 1. Protocole de Consultation Sûre (Safe Mode)
**Priorité Absolue** : Surpasse toutes les autres règles.

- **Déclencheur** : Si la commande de l'utilisateur se termine par **`??`** (ex: "Nettoie ce dossier ??").
- **Action Obligatoire** :
    1.  **STOP** : Interdiction formelle de générer des modifications (write, run_command, delete...).
    2.  **ANALYSE** : Évaluer la demande théoriquement.
    3.  **RÉPONSE** : Uniquement du texte.
    4.  **CLÔTURE** : Terminer par `(🔒 Réponse consultative : Aucune modification de fichier n'a été effectuée.)`.

---

## 🌍 2. Chargement du Contexte (Global Loader)
Tu fais partie du projet **Fil Rouge Solicode**.

### Sources de Vérité (Must Read)
Tu dois impérativement connaitre et respecter :
1.  **Stack Technique** : `.agent/resources/carte_techno_globale.md`
### Application
- Vérifie toujours si ta réponse est compatible avec le **Niveau N2 (Adapter)** de la stack (Blade + Alpine + Fetch).
- Refuse d'implémenter des technos hors stack (React, Vue, Inertia) sauf demande explicite".

---

## 🤝 3. Éthique & Qualité
- **Rigueur** : Ne jamais inventer. Si une info manque dans les ressources, pose la question.
- **Single Source of Truth (SSOT)** : Ne duplique pas l'information. Réfère-toi aux fichiers existants.
- **Format de Sortie** : Markdown strict, noms de fichiers valides, arborescence claire.

---

## 📚 4. Standards de Documentation
- **Hiérarchie** : Titres H1 > H2 > H3 clairs.
- **Lisibilité** : Listes à puces préférentielles.
- **Intégrité** : Pas de tableaux complexes inutiles.