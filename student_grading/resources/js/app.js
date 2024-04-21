import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

setTimeout(function(){
    var sessionMessage = document.getElementById('session-message');
    if (sessionMessage) {
        sessionMessage.style.display = 'none';
    }
},  5000);