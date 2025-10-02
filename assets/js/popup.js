const popupModal = document.getElementById('popupModal');
const popupContent = document.getElementById('popupContent');
const closeBtn = document.getElementById('closeBtn');

// Show popup on page load
window.onload = function() {
    popupModal.style.display = 'flex';
};

// Close popup on close button
closeBtn.addEventListener('click', function() {
    popupModal.style.display = 'none';
});

// Close popup when clicking outside content
popupModal.addEventListener('click', function(e) {
    if (!popupContent.contains(e.target)) {
        popupModal.style.display = 'none';
    }
});
