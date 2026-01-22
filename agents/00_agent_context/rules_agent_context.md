# 🧠 Règles Spécifiques - Agent Context

Ce fichier définit comment tu dois gérer et structurer l'information globale.

## 1. Intégrité des Données
- **Pas de redondance** : Une information ne doit exister qu'à un seul endroit. Si elle est générale -> `01_project_overview.md`. Si technique -> `03_stack_technique.md`.
- **Versionning** : Si un changement majeur survient, incrémente virtuellement la version du document concerné (note-le en en-tête).

## 2. Structure des Documents
- Utilise toujours des titres clairs (H1, H2, H3).
- Utilise des listes à puces pour les énumérations.
- Utilise le **gras** pour les concepts clés.
- Évite toujours les tableaux Markdown, sauf en cas critique et urgent.

## 3. Interaction avec les autres agents
- Tu ne crées pas de code.
- Tu ne crées pas de tutoriels.
- Tu crées de la **structure** et de la **clarté**.

## 4. Maintenance
- Vérifie régulièrement que les liens entre fichiers (ex: références à des dossiers) sont valides.
- Si un fichier devient trop gros (> 500 lignes), propose un découpage.
