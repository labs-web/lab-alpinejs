<!-- Spinner de Chargement -->
<div x-show="loading" class="flex justify-center items-center py-12">
    <div class="relative">
        <x-lucide-loader-2 class="animate-spin h-12 w-12 text-indigo-600" />
    </div>
</div>

<!-- Tableau des Articles -->
<div x-show="!loading" class="overflow-x-auto shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-300">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Titre
                </th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Contenu</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Statut</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">
            <template x-for="article in articles" :key="article.id">
                <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6"
                        x-text="article.title"></td>
                    <td class="px-3 py-4 text-sm text-gray-500 max-w-xs truncate" x-text="article.content"></td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        <span class="inline-flex rounded-full px-2 text-xs font-semibold leading-5"
                            :class="article.is_published ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                            x-text="article.is_published ? 'Publié' : 'Brouillon'"></span>
                    </td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <button @click="deleteArticle(article.id)"
                            class="text-red-600 hover:text-red-900 inline-flex items-center gap-1">
                            <x-lucide-trash-2 class="w-4 h-4" />
                            <span class="hidden sm:inline">Supprimer</span>
                        </button>
                    </td>
                </tr>
            </template>
            <tr x-show="articles.length === 0">
                <td colspan="4" class="px-6 py-10 text-center text-gray-500">
                    Aucun article trouvé.
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Pagination Numérotée -->
<div x-show="pagination.total > pagination.per_page"
    class="mt-4 flex items-center justify-between border-t border-gray-200 px-4 py-3 sm:px-6">
    <div class="flex flex-1 justify-between sm:hidden">
        <button @click="changePage(pagination.prev_page_url)" :disabled="!pagination.prev_page_url"
            class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
            :class="!pagination.prev_page_url ? 'opacity-50 cursor-not-allowed' : ''">
            Précédent
        </button>
        <button @click="changePage(pagination.next_page_url)" :disabled="!pagination.next_page_url"
            class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
            :class="!pagination.next_page_url ? 'opacity-50 cursor-not-allowed' : ''">
            Suivant
        </button>
    </div>
    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
        <div>
            <p class="text-sm text-gray-700">
                Affichage de <span class="font-medium" x-text="pagination.from"></span> à <span class="font-medium"
                    x-text="pagination.to"></span> sur <span class="font-medium" x-text="pagination.total"></span>
                résultats
            </p>
        </div>
        <div>
            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                <template x-for="(link, index) in pagination.links" :key="index">
                    <button @click="changePage(link.url)" x-html="link.label" :disabled="!link.url || link.active"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold focus:z-20" :class="{
                            'z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600': link.active,
                            'text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0': !link.active && link.url,
                            'text-gray-400 ring-1 ring-inset ring-gray-300 cursor-not-allowed': !link.url,
                            'rounded-l-md': index === 0,
                            'rounded-r-md': index === pagination.links.length - 1
                        }"></button>
                </template>
            </nav>
        </div>
    </div>
</div>