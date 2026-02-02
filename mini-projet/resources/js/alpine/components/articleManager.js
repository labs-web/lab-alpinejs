export default ({ articles, search, createUrl, csrf }) => ({
    articles: articles.data || [],
    pagination: articles, // Store the full paginator object (meta + links)
    search: search,
    filterStatus: '',
    loading: false,
    showModal: false,
    formData: {
        title: '',
        content: '',
        is_published: false
    },

    async fetchArticles(url = null) {
        this.loading = true;
        try {
            let fetchUrl;

            if (url) {
                // If a specific URL is provided (pagination link), use it.
                // It already contains page and query params thanks to Laravel's append()
                fetchUrl = url;
            } else {
                // Otherwise (search/filter), build the URL from scratch (starts at page 1)
                const params = new URLSearchParams({
                    search: this.search,
                    filter_status: this.filterStatus
                });
                fetchUrl = `?${params.toString()}`;
            }

            const response = await fetch(fetchUrl, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            });

            const data = await response.json();

            // Update articles list and pagination meta
            this.articles = data.data;
            this.pagination = data;

        } catch (e) {
            console.error('Erreur lors du chargement des articles:', e);
        } finally {
            this.loading = false;
        }
    },

    changePage(url) {
        if (!url) return;
        this.fetchArticles(url);
    },

    openModal() {
        this.formData = { title: '', content: '', is_published: false };
        this.showModal = true;
    },

    async submitForm() {
        try {
            const response = await fetch(createUrl, {
                method: 'POST',
                body: JSON.stringify(this.formData),
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrf,
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (response.ok) {
                this.showModal = false;
                this.search = ''; // Reset search
                this.fetchArticles(); // Reload list
            } else {
                const error = await response.json();
                alert('Erreur lors de la sauvegarde: ' + (error.message || 'Erreur inconnue'));
            }
        } catch (e) {
            console.error('Erreur lors de la sauvegarde:', e);
            alert('Erreur lors de la sauvegarde');
        }
    },

    async deleteArticle(id) {
        if (!confirm('Êtes-vous sûr de vouloir supprimer cet article ?')) return;

        try {
            const response = await fetch(`/articles/${id}`, {
                method: 'DELETE',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrf,
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (response.ok) {
                this.fetchArticles();
            } else {
                alert('Erreur lors de la suppression');
            }
        } catch (e) {
            console.error('Erreur lors de la suppression:', e);
            alert('Erreur lors de la suppression');
        }
    }
});
