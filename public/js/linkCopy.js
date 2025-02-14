document.querySelectorAll('.copy-link').forEach(button => {
    button.addEventListener('click', function() {
        const fileName = this.getAttribute('data-link').split('/').pop(); // Obtém apenas o nome do arquivo
        const formattedLink = `<img src="https://nerdicons.leadspage.com.br/icons/${fileName}" />`;

        navigator.clipboard.writeText(formattedLink).then(() => {
            alert('Código copiado!');
        }).catch(err => {
            console.error('Erro ao copiar:', err);
        });
    });
});
