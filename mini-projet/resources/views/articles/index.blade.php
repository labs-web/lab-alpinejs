@extends('layouts.app')

@section('content')
    <div x-data="articleManager({ 
                    articles: {{ Js::from($articles) }}, 
                    search: '{{ $search ?? '' }}',
                    createUrl: '{{ route('articles.store') }}',
                    csrf: '{{ csrf_token() }}'
                })" class="space-y-6">
        <!-- Barre de recherche et Bouton Ajouter -->
        <div class="flex justify-between items-center">
            <div class="relative w-1/3">
                <input type="text" x-model="search" @input.debounce.300ms="fetchArticles()" placeholder="Rechercher..."
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2 border">
                <span x-show="loading" class="absolute right-3 top-2 text-gray-400">Loading...</span>
            </div>

            <div class="w-1/4 ml-4">
                <select x-model="filterStatus" @change="fetchArticles()"
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2 border">
                    <option value="">Tous les statuts</option>
                    <option value="published">Publiés</option>
                    <option value="draft">Brouillons</option>
                </select>
            </div>

            <button @click="openModal()" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                Nouvel Article
            </button>
        </div>

        <!-- Liste des Articles -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <template x-for="article in articles" :key="article.id">
                <div class="bg-white overflow-hidden shadow rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900" x-text="article.title"></h3>
                    <p class="mt-2 text-gray-600 truncate" x-text="article.content"></p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
                            :class="article.is_published ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                            x-text="article.is_published ? 'Publié' : 'Brouillon'"></span>
                        <button @click="deleteArticle(article.id)"
                            class="text-red-600 hover:text-red-900 text-sm">Supprimer</button>
                    </div>
                </div>
            </template>
            <div x-show="articles.length === 0" class="text-center text-gray-500 col-span-full">
                Aucun article trouvé.
            </div>
        </div>

        <!-- Modale Création/Édition -->
        <div x-show="showModal" style="display: none;" class="fixed z-10 inset-0 overflow-y-auto"
            aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div x-show="showModal" x-transition.opacity
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="showModal = false"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div x-show="showModal" x-transition.scale
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Nouvel Article</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Titre</label>
                                <input type="text" x-model="formData.title"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border p-2">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Contenu</label>
                                <textarea x-model="formData.content" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border p-2"></textarea>
                            </div>
                            <div class="flex items-center">
                                <input id="is_published" type="checkbox" x-model="formData.is_published"
                                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label for="is_published" class="ml-2 block text-sm text-gray-900">Publier l'article</label>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button @click="submitForm()" type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">
                            Sauvegarder
                        </button>
                        <button @click="showModal = false" type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Annuler
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection