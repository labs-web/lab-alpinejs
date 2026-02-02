import './bootstrap';
import 'preline';

// Import Alpine.js depuis node_modules
import Alpine from 'alpinejs';

// Import du composant articleManager
import articleManager from './alpine/components/articleManager';

// Enregistrer le composant dans Alpine
Alpine.data('articleManager', articleManager);

// Exposer Alpine globalement (accessible dans window)
window.Alpine = Alpine;

// Démarrer Alpine (scan du DOM et initialisation)
Alpine.start();
