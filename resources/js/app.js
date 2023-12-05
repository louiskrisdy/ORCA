require('./bootstrap');
// require('alpinejs');

import Alpine from 'alpinejs'

window.Alpine = Alpine;

Alpine.start();

// import Choices from 'choices.js';

import Choices  from 'choices.js';


// Create multiselect element
window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 3,
        removeItemButton: true
    });
}

// document.addEventListener('DOMContentLoaded', function () {
//     const select = new Choices('#tags', {
//         // Choices.js options here
//         maxItemCount: 3,
//         removeItemButton: true,
//     });
// });

// function initializeChoices() {
//     new Choices('#tags', {
//         // Choices.js options here
//         maxItemCount: 3,
//         removeItemButton: true,
//     });
// }


