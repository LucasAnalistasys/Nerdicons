<div>
    <!-- resources/views/components/header.blade.php -->
    <header class="d-flex justify-content-between align-items-center p-3 bg-dark text-white">
        <!-- Logo à esquerda -->
        <div class="logo">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" height="40">
        </div>

        <!-- Barra de pesquisa à direita -->
        <div class="search-bar">
            <input id="searchInput" type="text" class="form-control" placeholder="Buscar ícones...">
        </div>
    </header>

</div>

<!-- Inclua o script no final da página, antes de </body> -->
<script src="{{ mix('js/header.js') }}"></script>
