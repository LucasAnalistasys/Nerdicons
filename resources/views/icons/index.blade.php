@extends('layouts.app')

@section('content')

    <!-- Lista de ícones -->
    <div class="row g-4">
        @foreach($icons as $icon)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="icon-item">
                    <img src="{{ asset('icons/' . basename($icon)) }}" alt="{{ basename($icon) }}">
                </div>
                <p class="icon-name">{{ basename($icon) }}</p>
            </div>
        @endforeach
    </div>

    <!-- Paginação Manual -->
    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination">
                <!-- Botão "Anterior" -->
                @if($currentPage > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ route('icons.index', ['page' => $currentPage - 1]) }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link" aria-hidden="true">&laquo;</span>
                    </li>
                @endif

                <!-- Exibindo intervalo de páginas -->
                @php
                    $startPage = max($currentPage - 3, 1);
                    $endPage = min($currentPage + 2, $totalPages);
                @endphp

                @for($i = $startPage; $i <= $endPage; $i++)
                    <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                        <a class="page-link" href="{{ route('icons.index', ['page' => $i]) }}">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Botão "Próximo" -->
                @if($currentPage < $totalPages)
                    <li class="page-item">
                        <a class="page-link" href="{{ route('icons.index', ['page' => $currentPage + 1]) }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link" aria-hidden="true">&raquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>

@endsection
