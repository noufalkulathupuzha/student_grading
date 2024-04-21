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

// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Get the modal
    var modal = document.getElementById('session-message-popup');

    // Close the modal after 5 seconds
    setTimeout(function() {
        modal.style.display = "none";
    }, 2500);
});
