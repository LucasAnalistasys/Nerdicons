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

// Seleciona os botões de troca de tema
const lightButton = document.getElementById("light-theme");
const darkButton = document.getElementById("dark-theme");

// Função para mudar para o tema claro
function setLightTheme() {
    document.body.classList.remove("dark-theme");
    document.body.classList.add("light-theme");
}

// Função para mudar para o tema escuro
function setDarkTheme() {
    document.body.classList.remove("light-theme");
    document.body.classList.add("dark-theme");
}

// Adiciona eventos de clique aos botões
lightButton.addEventListener("click", setLightTheme);
darkButton.addEventListener("click", setDarkTheme);

// Se o tema for salvo no localStorage, carrega o tema ao carregar a página
if (localStorage.getItem("theme") === "dark") {
    setDarkTheme();
} else {
    setLightTheme();
}

// Salva a escolha do tema no localStorage
function saveThemePreference() {
    if (document.body.classList.contains("dark-theme")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
}

// Ouve mudanças no tema para salvar a preferência
document.body.addEventListener("classChange", saveThemePreference);
