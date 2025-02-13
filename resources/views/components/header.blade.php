<div>
    <!-- resources/views/components/header.blade.php -->
    <header class="d-flex justify-content-between align-items-center p-3 bg-dark text-white">
        <!-- Logo à esquerda -->
        <div class="logo">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" height="40">
        </div>

        <!-- Botões de troca de tema -->
        <div class="theme-toggle d-flex align-items-center">
            <!-- Botão para tema claro (sol) -->
            <button id="light-theme" class="btn btn-link text-white">
                <i class="fa fa-sun"></i>
            </button>

            <!-- Botão para tema escuro (lua) -->
            <button id="dark-theme" class="btn btn-link text-white">
                <i class="fa fa-moon"></i>
            </button>
        </div>

        <!-- Barra de pesquisa à direita -->
        <div class="search-bar">
            <input id="searchInput" type="text" class="form-control" placeholder="Buscar ícones...">
        </div>
    </header>
</div>

<!-- Inclua o script no final da página, antes de </body> -->
<script src="{{ mix('js/header.js') }}"></script>
