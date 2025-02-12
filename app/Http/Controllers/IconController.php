<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;

class IconController extends Controller
{
    public function index(Request $request)
    {
        // Pegando os arquivos da pasta 'public/icons'
        $files = File::allFiles(public_path('icons'));

        // Criando a paginação manualmente
        $page = request()->get('page', 1);
        $perPage = 25; // Definindo 25 ícones por página (5 linhas com 5 ícones)
        $offset = ($page - 1) * $perPage;
        $icons = new LengthAwarePaginator(
            array_slice($files, $offset, $perPage),
            count($files),
            $perPage,
            $page,
            ['path' => request()->url()]
        );

        // Garantir que sempre tenhamos 25 ícones por página (preencher com placeholders, se necessário)
        $icons->withPath(request()->url());

        return view('icons.index', compact('icons'));
    }
}
