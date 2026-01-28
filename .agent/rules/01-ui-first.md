# Rule : UI First Development

## Principe Fondamental
**Aucun code d'assemblage (Page HTML, Dashboard) ne doit être écrit tant que les composants UI individuels n'ont pas été validés.**

## Interdictions
1.  **INTERDIT** de créer une page complète (`index.html`) si les composants nécessaires (boutons, cartes, navbar) n'existent pas dans le dossier `ui-kit/`.
2.  **INTERDIT** de d'inventer du design "à la volée" lors de l'assemblage. L'assemblage doit être un jeu de LEGO® avec des pièces existantes.
3.  **INTERDIT** d'utiliser du PHP ou du SQL. Nous sommes en mode "Static WebBuilder".

## Conséquence
Si l'utilisateur demande "Fais-moi la Page d'Accueil", l'agent doit vérifier si le `ui-kit/navbar.html` et `ui-kit/hero.html` existent.
*   Si NON : Refuser et lancer le Workflow `/creation-ui`.
*   Si OUI : Procéder à l'assemblage.
