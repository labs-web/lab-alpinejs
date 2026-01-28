# 🕵️ SKILL: Alpine.js Debugging

Ce skill définit la procédure avancée pour débugger les composants Alpine.js lorsque l'UI ne réagit pas comme prévu.

---

## 1. La Check-list Rapide (Quick Fix)

🚀 **Avant de modifier le code, vérifiez ces trois points critiques** :

1. **Chargement du script** : Alpine.js est-il bien présent dans le `<head>` ou dans votre `app.js` compilé ?
2. **Erreurs de syntaxe** : Vérifiez les fautes de frappe courantes (ex: `x-clik` au lieu de `@click`) et l'oubli des parenthèses sur les fonctions.
3. **Portée (Nesting)** : L'élément qui déclenche l'action est-il bien situé à l'intérieur de la balise portant le `x-data` ?

---

## 2. Inspection de l'État ($data)

📝 **La technique du panneau de contrôle** :
Pour visualiser l'état réactif en temps réel, injectez ce snippet temporaire à l'intérieur de votre composant :

```html
<pre x-text="JSON.stringify($data, null, 2)" 
     class="fixed bottom-0 right-0 bg-black text-green-400 p-4 text-xs opacity-80 z-50 pointer-events-none">
</pre>

```

💡 **Pro Tip** : Cela permet de voir instantanément si une variable change de valeur lors d'un clic ou d'une saisie.

---

## 3. Surveillance Dynamique ($watch)

⚠️ **Suivre les changements invisibles** :
Si une variable change mais que l'effet visuel attendu ne se produit pas, utilisez un watcher dans le `x-init` pour tracer l'évolution dans la console :

```javascript
// À placer dans votre x-init ou Alpine.data()
x-init="$watch('maVariable', (value, oldValue) => {
    console.log('Changement détecté :', { de: oldValue, vers: value });
})"

```

---

## 4. Outils & Diagnostic Niveau N2

Pour les projets de niveau **N2 (Adapter)**, utilisez des outils professionnels :

* **Alpine.js DevTools** : Installez l'extension de navigateur (Chrome/Firefox) pour inspecter l'arborescence des composants et modifier l'état à la volée.
* **Console Log Événementiel** : Pour vérifier les données d'un événement, utilisez `@click="console.log($event)"`.
* **Validation API** : Si le bug concerne des données asynchrones, vérifiez l'onglet **Network** des outils de développement pour inspecter la réponse JSON de votre contrôleur Laravel.

---

## 5. Logique de Résolution

1. **Isoler** : Testez la fonctionnalité dans un composant minimal hors du projet Fil Rouge.
2. **Vérifier la SSOT** : Assurez-vous que l'état n'est pas modifié par un autre script JS externe.
3. **Nettoyer** : Une fois le bug résolu, retirez tous les panneaux de debug et les `console.log` avant le commit.

