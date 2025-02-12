<div>
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
