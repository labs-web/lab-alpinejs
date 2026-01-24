# 🚀 Tutoriel 01 : Initialisation & Premiers Pas

## 1. Installation (CDN)
Pour ce lab, nous utiliserons la méthode la plus simple : le CDN.
Ajoutez simplement cette ligne dans le `<head>` de votre layout Blade (ou fichier HTML) :

```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

*Note : L'attribut `defer` est important pour qu'Alpine s'initialise après le chargement du DOM.*

## 2. Hello World (Le Compteur)
Le "Hello World" d'Alpine est souvent un compteur. Cela permet de comprendre le **State** (état).

### Code
```html
<div x-data="{ count: 0 }" class="p-4 border rounded">
    <!-- Affichage -->
    <h1 class="text-2xl font-bold mb-2">
        Compteur : <span x-text="count"></span>
    </h1>

    <!-- Actions -->
    <button 
        @click="count++" 
        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Incrémenter
    </button>
    
    <button 
        @click="count--" 
        class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
        Décrémenter
    </button>
</div>
```

## 3. Analyse
1.  **`x-data="{ count: 0 }"`** : Définit la portée du composant et initialise l'état. Tout ce qui est à l'intérieur de ce `div` a accès à `count`.
2.  **`x-text="count"`** : Lie le contenu texte de la balise à la variable `count`. Si `count` change, le texte change.
3.  **`@click="count++"`** : Écouteur d'évènement (shorthand pour `x-on:click`). Exécute l'expression JavaScript au clic.

## 4. Exercice
Créez un bouton "Reset" qui réinitialise le compteur à 0, mais **uniquement si** le compteur est supérieur à 10.
*Indice : Utilisez `x-show` pour masquer le bouton.*
