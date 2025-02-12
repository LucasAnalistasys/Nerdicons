<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ícones Nerd</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Integrando o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Ícones</h1>
        
        <!-- Lista de ícones com layout de 5 ícones por linha -->
        <div class="row g-4">
            @foreach($icons as $icon)
                <div class="col-6 col-md-4 col-lg-2"> <!-- Ajustado para ter até 5 ícones por linha -->
                    <div class="icon-item">
                        <img src="{{ asset('icons/' . basename($icon)) }}" alt="{{ basename($icon) }}">
                        <p>{{ basename($icon) }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Paginação -->
        <div class="d-flex justify-content-center mt-4">
            {{ $icons->links('pagination::bootstrap-5') }}
        </div>
    </div>

    <!-- Adicionando o JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
