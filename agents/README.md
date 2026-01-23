# 🤖 Système Multi-Agents Solicode

Ce dossier contient les ressources et contextes pour les agents IA collaborant sur la création du contenu pédagogique et technique du projet Solicode.

## 📂 Structure du Dossier

### 1. Cerveau Partagé (`00_agent_context/`)
Ce dossier est la **source de vérité unique**. Il remplace l'ancien "Context Global" et "Agent Factory".
*   `init_agent_context.md` : Guide principal.
*   `init_agent_context.md` : Guide principal.
*   `context_domain.md` : Savoir Métier (Pédagogie, Filière).

### 2. Agents Spécialisés
Chaque sous-dossier correspond à un agent spécifique.

*   **`01_agent_lab/`** : **Explorateur R&D**.
    *   Produit des Labs (Marp + Tutos) pour découvrir une techno.
*   **`03_agent_architecte/`** (A venir) : Architecte Projet.
*   **`04_agent_ua/`** (A venir) : Ingénieur Pédagogique.

## 🚀 Comment Créer un Nouvel Agent

Pour ajouter un nouvel agent au système, référez-vous à **`strategy_agent_context.md`** (Partie 4 : Usine à Agents).
En résumé :
1.  Créer le dossier `agents/XX_agent_[nom]/`.
2.  Créer `init_agent_[nom].md` (basé sur le template standard).
3.  Créer `rules_agent_[nom].md` (basé sur le template standard).
4.  Ajouter l'agent à cette liste (README.md).

## 🚀 Comment Activer un Agent

Pour transformer une session d'IA générique en un Agent Spécialisé :

1.  **Ouvrir le fichier d'initialisation** de l'agent (ex: `agents/01_agent_lab/init_agent_lab.md`).
2.  **Copier/Coller** le contenu dans le chat de l'IA (ou demander à l'IA de "Lire ceci").
3.  L'agent chargera alors tout le contexte nécessaire (Strategy, Domain) automatiquement.

## 🎮 Mode d'Utilisation

### Mode Consultatif `?`
Terminez votre phrase par **`?`** pour forcer une réflexion sans modification de fichiers.
*   "Est-ce que le plan du Lab est bon ?" -> L'agent critique mais ne touche rien.

### Mode Exécutif
Utilisez l'impératif pour déclencher des actions.
*   "Génère le fichier Marp." -> L'agent crée le fichier.

## 🧠 Mémoire et Règles
Chaque agent possède un fichier `rules_agent_[NOM].md` pour stocker ses consignes spécifiques et ses apprentissages au fil du temps.
