import './bootstrap';

// Import Alpine.js
import Alpine from 'alpinejs';

// Import composants Alpine
import articleManager from './alpine/components/articleManager';

// Enregistrer les composants
Alpine.data('articleManager', articleManager);

// Exposer Alpine globalement (pour usage dans Blade si nécessaire)
window.Alpine = Alpine;

// Démarrer Alpine
Alpine.start();
