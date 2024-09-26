const openFilterButton = document.getElementById('openFilter');
const filterModal = document.getElementById('filterModal');

openFilterButton.addEventListener('click', function() {
    if (filterModal.style.display === 'none' || filterModal.style.display === '') {
        filterModal.style.display = 'block'; 
    } else {
        filterModal.style.display = 'none'; 
    }
});