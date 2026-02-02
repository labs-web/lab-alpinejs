<!-- Spinner de Chargement (Lucide NPM) -->
<div x-show="loading" class="flex justify-center items-center py-12">
    <div class="relative">
        <x-lucide-loader-2 class="animate-spin h-12 w-12 text-indigo-600" />
    </div>
</div>

<!-- Liste des Articles -->
<div x-show="!loading" class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
    <template x-for="article in articles" :key="article.id">
        <div class="bg-white overflow-hidden shadow rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900" x-text="article.title"></h3>
            <p class="mt-2 text-gray-600 truncate" x-text="article.content"></p>
            <div class="mt-4 flex justify-between items-center">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
                    :class="article.is_published ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                    x-text="article.is_published ? 'Publié' : 'Brouillon'"></span>
                <button @click="deleteArticle(article.id)"
                    class="flex items-center gap-1 text-red-600 hover:text-red-900 transition text-sm">
                    <x-lucide-trash-2 class="w-4 h-4" />
                    <span>Supprimer</span>
                </button>
            </div>
        </div>
    </template>
    <div x-show="articles.length === 0" class="text-center text-gray-500 col-span-full">
        Aucun article trouvé.
    </div>
</div>

<!-- Pagination -->
<div x-show="pagination.total > pagination.per_page" class="mt-6 flex justify-between items-center">
    <div class="text-sm text-gray-700">
        Affichage de <span class="font-medium" x-text="pagination.from"></span> à <span class="font-medium"
            x-text="pagination.to"></span> sur <span class="font-medium" x-text="pagination.total"></span> résultats
    </div>

    <div class="inline-flex rounded-md shadow-sm -space-x-px">
        <!-- Bouton Précédent -->
        <button @click="changePage(pagination.prev_page_url)" :disabled="!pagination.prev_page_url"
            :class="!pagination.prev_page_url ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-50'"
            class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-l-md text-gray-700 bg-white">
            <x-lucide-chevron-left class="h-4 w-4 mr-1" /> Précédent
        </button>

        <!-- Bouton Suivant -->
        <button @click="changePage(pagination.next_page_url)" :disabled="!pagination.next_page_url"
            :class="!pagination.next_page_url ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-50'"
            class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-white">
            Suivant <x-lucide-chevron-right class="h-4 w-4 ml-1" />
        </button>
    </div>
</div>