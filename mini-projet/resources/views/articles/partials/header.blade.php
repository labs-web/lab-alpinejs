<!-- Barre de recherche et Bouton Ajouter -->
<div class="flex justify-between items-center">
    <div class="relative w-1/3">
        <input type="text" x-model="search" @input.debounce.300ms="fetchArticles()" placeholder="Rechercher..."
            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2 border">
        <!-- Mini spinner dans le champ de recherche (Lucide NPM) -->
        <span x-show="loading" class="absolute right-3 top-3">
            <x-lucide-loader-2 class="animate-spin h-5 w-5 text-indigo-600" />
        </span>
    </div>

    <div class="w-1/4 ml-4">
        <select x-model="filterStatus" @change="fetchArticles()"
            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2 border">
            <option value="">Tous les statuts</option>
            <option value="published">Publiés</option>
            <option value="draft">Brouillons</option>
        </select>
    </div>


    <button @click="openModal()"
        class="flex items-center gap-2 px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
        <x-lucide-plus class="h-5 w-5" />
        <span>Nouvel Article</span>
    </button>
</div>