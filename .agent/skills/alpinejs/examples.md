# Exemples Alpine.js - Cas d'Usage Avancés

Ce document complète le SKILL.md avec des exemples pratiques d'applications réelles.

## 1. Gestion d'Articles CRUD Complète

### Recherche Dynamique avec Debounce
```html
<div x-data="articleManager">
    <input 
        type="text"
        x-model="searchQuery"
        @input.debounce.500ms="searchArticles()"
        placeholder="Rechercher un article...">
    
    <div x-show="isSearching">🔍 Recherche en cours...</div>
    
    <ul>
        <template x-for="article in filteredArticles" :key="article.id">
            <li>
                <h3 x-text="article.title"></h3>
                <p x-text="article.excerpt"></p>
            </li>
        </template>
    </ul>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('articleManager', () => ({
        articles: [],
        searchQuery: '',
        isSearching: false,
        filteredArticles: [],
        
        async searchArticles() {
            this.isSearching = true;
            const response = await fetch(`/api/articles?search=${this.searchQuery}`);
            this.filteredArticles = await response.json();
            this.isSearching = false;
        }
    }))
})
</script>
```

### Filtrage par Statut (Select Dynamique)
```html
<div x-data="{ 
    articles: [], 
    statusFilter: 'all',
    get filteredArticles() {
        if (this.statusFilter === 'all') return this.articles;
        return this.articles.filter(a => a.status === this.statusFilter);
    }
}" x-init="articles = await (await fetch('/api/articles')).json()">
    
    <select x-model="statusFilter">
        <option value="all">Tous les articles</option>
        <option value="published">Publiés</option>
        <option value="draft">Brouillons</option>
    </select>
    
    <p x-text="`${filteredArticles.length} article(s) affiché(s)`"></p>
    
    <ul>
        <template x-for="article in filteredArticles" :key="article.id">
            <li>
                <span x-text="article.title"></span>
                <span :class="{ 
                    'text-green-600': article.status === 'published',
                    'text-gray-400': article.status === 'draft'
                }" x-text="article.status"></span>
            </li>
        </template>
    </ul>
</div>
```

## 2. Modale de Création avec Formulaire

### Modale Animée avec Validation
```html
<div x-data="{ 
    showModal: false,
    form: { title: '', content: '', status: 'draft' },
    errors: {},
    
    async createArticle() {
        // Validation simple
        this.errors = {};
        if (!this.form.title) this.errors.title = 'Le titre est requis';
        if (!this.form.content) this.errors.content = 'Le contenu est requis';
        
        if (Object.keys(this.errors).length > 0) return;
        
        // Envoi API
        const response = await fetch('/api/articles', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(this.form)
        });
        
        if (response.ok) {
            this.showModal = false;
            this.form = { title: '', content: '', status: 'draft' };
            // Recharger la liste...
        }
    }
}">
    <!-- Bouton Ouverture -->
    <button 
        @click="showModal = true"
        class="bg-blue-600 text-white px-4 py-2 rounded">
        + Nouvel Article
    </button>
    
    <!-- Overlay Modale -->
    <div 
        x-show="showModal"
        x-transition.opacity
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">
        
        <!-- Contenu Modale -->
        <div 
            @click.outside="showModal = false"
            @keydown.window.escape="showModal = false"
            x-transition.scale
            class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-2xl">
            
            <h2 class="text-2xl font-bold mb-4">Créer un Article</h2>
            
            <form @submit.prevent="createArticle()">
                <!-- Titre -->
                <div class="mb-4">
                    <label class="block mb-2">Titre</label>
                    <input 
                        type="text"
                        x-model="form.title"
                        class="w-full border px-3 py-2 rounded"
                        :class="{ 'border-red-500': errors.title }">
                    <p x-show="errors.title" x-text="errors.title" class="text-red-500 text-sm mt-1"></p>
                </div>
                
                <!-- Contenu -->
                <div class="mb-4">
                    <label class="block mb-2">Contenu</label>
                    <textarea 
                        x-model="form.content"
                        rows="5"
                        class="w-full border px-3 py-2 rounded"
                        :class="{ 'border-red-500': errors.content }"></textarea>
                    <p x-show="errors.content" x-text="errors.content" class="text-red-500 text-sm mt-1"></p>
                </div>
                
                <!-- Statut -->
                <div class="mb-6">
                    <label class="block mb-2">Statut</label>
                    <select x-model="form.status" class="w-full border px-3 py-2 rounded">
                        <option value="draft">Brouillon</option>
                        <option value="published">Publié</option>
                    </select>
                </div>
                
                <!-- Actions -->
                <div class="flex justify-end gap-3">
                    <button 
                        type="button"
                        @click="showModal = false"
                        class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded">
                        Annuler
                    </button>
                    <button 
                        type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Créer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
```

## 3. Suppression Asynchrone avec Confirmation

```html
<div x-data="{ 
    articles: [],
    deleteId: null,
    showDeleteConfirm: false,
    
    confirmDelete(id) {
        this.deleteId = id;
        this.showDeleteConfirm = true;
    },
    
    async deleteArticle() {
        const response = await fetch(`/api/articles/${this.deleteId}`, {
            method: 'DELETE'
        });
        
        if (response.ok) {
            // Supprimer de la liste locale
            this.articles = this.articles.filter(a => a.id !== this.deleteId);
            this.showDeleteConfirm = false;
            this.deleteId = null;
        }
    }
}" x-init="articles = await (await fetch('/api/articles')).json()">
    
    <!-- Liste -->
    <ul>
        <template x-for="article in articles" :key="article.id">
            <li class="flex justify-between items-center p-3 border-b">
                <span x-text="article.title"></span>
                <button 
                    @click="confirmDelete(article.id)"
                    class="text-red-600 hover:text-red-800">
                    🗑️ Supprimer
                </button>
            </li>
        </template>
    </ul>
    
    <!-- Modale de Confirmation -->
    <div 
        x-show="showDeleteConfirm"
        x-transition.opacity
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">
        
        <div 
            @click.outside="showDeleteConfirm = false"
            class="bg-white p-6 rounded-lg shadow-xl">
            
            <h3 class="text-xl font-bold mb-4">⚠️ Confirmation</h3>
            <p class="mb-6">Voulez-vous vraiment supprimer cet article ?</p>
            
            <div class="flex gap-3 justify-end">
                <button 
                    @click="showDeleteConfirm = false"
                    class="px-4 py-2 bg-gray-200 rounded">
                    Annuler
                </button>
                <button 
                    @click="deleteArticle()"
                    class="px-4 py-2 bg-red-600 text-white rounded">
                    Supprimer
                </button>
            </div>
        </div>
    </div>
</div>
```

## 4. Tabs (Onglets) Dynamiques

```html
<div x-data="{ activeTab: 'infos' }">
    <!-- Navigation Tabs -->
    <div class="flex border-b">
        <button 
            @click="activeTab = 'infos'"
            :class="{ 'border-b-2 border-blue-600 text-blue-600': activeTab === 'infos' }"
            class="px-4 py-2">
            Informations
        </button>
        <button 
            @click="activeTab = 'settings'"
            :class="{ 'border-b-2 border-blue-600 text-blue-600': activeTab === 'settings' }"
            class="px-4 py-2">
            Paramètres
        </button>
        <button 
            @click="activeTab = 'history'"
            :class="{ 'border-b-2 border-blue-600 text-blue-600': activeTab === 'history' }"
            class="px-4 py-2">
            Historique
        </button>
    </div>
    
    <!-- Contenu Tabs -->
    <div class="p-4">
        <div x-show="activeTab === 'infos'" x-transition>
            <h2 class="text-xl font-bold">Informations</h2>
            <p>Contenu du tab Informations...</p>
        </div>
        
        <div x-show="activeTab === 'settings'" x-transition>
            <h2 class="text-xl font-bold">Paramètres</h2>
            <p>Contenu du tab Paramètres...</p>
        </div>
        
        <div x-show="activeTab === 'history'" x-transition>
            <h2 class="text-xl font-bold">Historique</h2>
            <p>Contenu du tab Historique...</p>
        </div>
    </div>
</div>
```

## 5. Accordion (Accordéon)

```html
<div x-data="{ openItem: null }">
    <template x-for="(item, index) in [
        { title: 'Question 1', content: 'Réponse 1' },
        { title: 'Question 2', content: 'Réponse 2' },
        { title: 'Question 3', content: 'Réponse 3' }
    ]" :key="index">
        <div class="border-b">
            <!-- Header -->
            <button 
                @click="openItem = (openItem === index ? null : index)"
                class="w-full flex justify-between items-center p-4 hover:bg-gray-50">
                <span x-text="item.title" class="font-semibold"></span>
                <span x-text="openItem === index ? '−' : '+'" class="text-xl"></span>
            </button>
            
            <!-- Content -->
            <div 
                x-show="openItem === index"
                x-transition.duration.300ms
                x-collapse
                class="p-4 bg-gray-50">
                <p x-text="item.content"></p>
            </div>
        </div>
    </template>
</div>
```

## 6. Toast Notifications

```html
<div x-data="{ 
    notifications: [],
    
    notify(message, type = 'info') {
        const id = Date.now();
        this.notifications.push({ id, message, type });
        
        // Auto-remove après 3 secondes
        setTimeout(() => {
            this.notifications = this.notifications.filter(n => n.id !== id);
        }, 3000);
    }
}">
    <!-- Boutons de test -->
    <button @click="notify('Sauvegarde réussie !', 'success')" class="bg-green-600 text-white px-4 py-2 rounded">
        Success
    </button>
    <button @click="notify('Une erreur est survenue', 'error')" class="bg-red-600 text-white px-4 py-2 rounded">
        Error
    </button>
    
    <!-- Container des Toasts -->
    <div class="fixed top-4 right-4 z-50 space-y-2">
        <template x-for="notif in notifications" :key="notif.id">
            <div 
                x-transition.opacity.duration.300ms
                :class="{
                    'bg-green-500': notif.type === 'success',
                    'bg-red-500': notif.type === 'error',
                    'bg-blue-500': notif.type === 'info'
                }"
                class="text-white px-6 py-3 rounded shadow-lg flex items-center gap-3">
                <span x-text="notif.message"></span>
                <button 
                    @click="notifications = notifications.filter(n => n.id !== notif.id)"
                    class="text-white/80 hover:text-white">
                    ✕
                </button>
            </div>
        </template>
    </div>
</div>
```

## 7. Infinite Scroll

```html
<div x-data="{ 
    articles: [],
    page: 1,
    hasMore: true,
    isLoading: false,
    
    async loadMore() {
        if (this.isLoading || !this.hasMore) return;
        
        this.isLoading = true;
        const response = await fetch(`/api/articles?page=${this.page}`);
        const data = await response.json();
        
        this.articles = [...this.articles, ...data.articles];
        this.hasMore = data.hasMore;
        this.page++;
        this.isLoading = false;
    }
}" 
x-init="loadMore()"
x-intersect:enter="loadMore()">
    
    <ul>
        <template x-for="article in articles" :key="article.id">
            <li class="p-4 border-b">
                <h3 x-text="article.title" class="font-bold"></h3>
                <p x-text="article.excerpt"></p>
            </li>
        </template>
    </ul>
    
    <div x-show="isLoading" class="text-center p-4">
        Chargement...
    </div>
    
    <div x-show="!hasMore && !isLoading" class="text-center p-4 text-gray-500">
        Fin de la liste
    </div>
</div>
```

## Conseils d'Intégration Laravel Blade

### 1. Passer des Données PHP → Alpine
```php
<!-- Dans le Controller -->
$articles = Article::all();
return view('articles.index', compact('articles'));
```

```html
<!-- Dans la Vue Blade -->
<div x-data="{ 
    articles: @json($articles),
    searchQuery: ''
}">
    <!-- Utiliser articles directement -->
</div>
```

### 2. CSRF Token pour Requêtes POST
```html
<div x-data="{ 
    csrfToken: '{{ csrf_token() }}',
    
    async createArticle(data) {
        const response = await fetch('/api/articles', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.csrfToken
            },
            body: JSON.stringify(data)
        });
    }
}">
</div>
```

### 3. Routes Laravel dans Alpine
```html
<div x-data="{ 
    apiUrl: '{{ route('api.articles.index') }}',
    
    async fetchArticles() {
        const response = await fetch(this.apiUrl);
        return await response.json();
    }
}">
</div>
```

## Navigation dans le Skill

- 📖 **SKILL.md** : Guide complet des directives et concepts Alpine.js
- 📝 **cheatsheet.md** : Référence rapide pour syntaxe et patterns
- 🔧 **README.md** : Documentation du skill et principes d'utilisation
- 🌐 **Documentation officielle** : [alpinejs.dev](https://alpinejs.dev)
