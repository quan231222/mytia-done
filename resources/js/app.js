import './bootstrap';

// import Alpine from 'alpinejs';

require('alpinejs');

// Alpine.start();

import Choices from 'choices.js';

// Create multi-select element

window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 10, removeItemButton: true
    });
}
