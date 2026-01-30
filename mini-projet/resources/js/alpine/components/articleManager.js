export default ({ articles, search, createUrl, csrf }) => ({
    articles: articles,
    search: search,
    filterStatus: '',
    loading: false,
    showModal: false,
    formData: {
        title: '',
        content: '',
        is_published: false
    },

    async fetchArticles() {
        this.loading = true;
        try {
            const params = new URLSearchParams({
                search: this.search,
                filter_status: this.filterStatus
            });
            const response = await fetch(`?${params.toString()}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            });
            this.articles = await response.json();
        } catch (e) {
            console.error('Erreur lors du chargement des articles:', e);
        } finally {
            this.loading = false;
        }
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
                this.search = ''; // Reset search to see new item
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
