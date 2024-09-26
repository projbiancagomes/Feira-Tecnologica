// Seleciona o botão e o modal
const openFilterButton = document.getElementById('openFilter');
const filterModal = document.getElementById('filterModal');

// Função para abrir/fechar o modal de filtro
openFilterButton.addEventListener('click', function() {
    if (filterModal.style.display === 'none' || filterModal.style.display === '') {
        filterModal.style.display = 'block'; // Exibe o modal
    } else {
        filterModal.style.display = 'none'; // Esconde o modal
    }
});
