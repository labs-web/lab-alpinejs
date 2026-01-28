---
trigger: always_on
---

# 📚 Standards de Documentation (Markdown)

Ce fichier définit les règles de formatage et de structure visuelle pour tous les documents générés. L'objectif est d'assurer une **clarté immédiate** et une **scannabilité maximale** pour l'utilisateur et l'apprenant.

---

## 🏗️ 1. Hiérarchie & Structure
- **Titres** : Utiliser une hiérarchie stricte : `# H1` pour le titre unique, `## H2` pour les sections principales, et `### H3` pour les sous-sections.
- **Sauts de ligne** : Insérer un double saut de ligne entre les paragraphes et avant chaque nouveau titre pour aérer le document.
- **Séparation** : Utiliser des barres horizontales (`---`) pour séparer les concepts majeurs ou les changements de chapitre.

---

## 🎨 2. Éléments Visuels & Emphase
- **Mise en évidence** : Utiliser le **gras** pour souligner les termes techniques clés, les commandes ou les variables importantes.
- **Emojis de Structure** : Intégrer systématiquement les émojis suivants pour guider l'œil :
    - 🚀 : Action ou lancement de tâche.
    - ⚠️ : Attention ou point de vigilance technique.
    - 📝 : Note explicative ou théorie.
    - 💡 : Astuce de développeur ou "Pro Tip".
- **Tableaux** : Éviter les tableaux complexes ; privilégier les listes à puces pour l'énumération de caractéristiques ou d'étapes.

---

## 💻 3. Blocs de Code
- **Langage** : Toujours spécifier le langage du bloc (ex: ` ```php ` ou ` ```javascript `).
- **Commentaires** : Inclure des commentaires brefs et pédagogiques dans le code pour expliquer les parties complexes (Pédagogie Active).
- **Intégrité** : Fournir des extraits de code complets ou clairement situés dans leur contexte (ex: "Dans le fichier `web.php` ...").

---

## 📂 4. Format Spécifique "Lab & Docs"
Pour les dossiers `docs/` des Labs, respecter strictement l'ordre défini :
1. **01-presentation-initiale.md** : Résumé du concept en 2 minutes.
2. **02-tuto-1.md** : Première étape pratique.
3. **03-presentation-finale.md** : Synthèse et transition.
4. **04-tuto-2.md** : Approfondissement.
5. **05-tuto-3.md** : Finalisation technique.
6. **mini-projet.md** : Énoncé de l'application de synthèse intégrant les 3 tutos.

---

## 🚫 5. Ce qu'il faut éviter
- Les blocs de texte denses (murs de texte).
- La duplication d'informations déjà présentes dans `contexte.md`.
- Les polices ou formatages exotiques non supportés par le Markdown standard.