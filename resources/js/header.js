document.addEventListener('DOMContentLoaded', function() {
    // Selecionando o campo de busca e todos os ícones
    const searchInput = document.getElementById('searchInput');
    const iconItems = document.querySelectorAll('.icon-name'); // Todos os nomes dos ícones

    // Evento de input no campo de busca
    searchInput.addEventListener('input', function(event) {
        const searchTerm = event.target.value.toLowerCase(); // Convertemos a busca para minúscula

        iconItems.forEach(function(item) {
            const iconName = item.textContent.toLowerCase(); // Pegamos o nome do ícone, também em minúsculo

            // Verificamos se o nome do ícone contém o termo de busca
            const iconItemContainer = item.closest('.col-6'); // Encontramos o container do ícone

            if (iconName.includes(searchTerm)) {
                iconItemContainer.style.display = 'block'; // Mostra o ícone
            } else {
                iconItemContainer.style.display = 'none'; // Esconde o ícone
            }
        });
    });
});
