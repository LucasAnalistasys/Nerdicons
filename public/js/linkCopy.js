// Seleciona todos os botões "copiar link" e adiciona um listener de evento
document.querySelectorAll('.copy-link').forEach(button => {
    button.addEventListener('click', function() {
        // Cria um input temporário
        const tempInput = document.createElement('input');
        tempInput.value = this.getAttribute('data-link');  // Pega o link armazenado no 'data-link'
        document.body.appendChild(tempInput);
        
        // Seleciona o valor e copia
        tempInput.select();
        document.execCommand('copy');
        
        // Remove o input temporário
        document.body.removeChild(tempInput);
        
        // Mostra um alerta de confirmação (ou você pode personalizar com um tooltip)
        alert('Link copiado!');
    });
});
