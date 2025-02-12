<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IconController extends Controller
{
    public function index(Request $request)
    {   
        // Pegando os arquivos da pasta 'public/icons'
        $files = File::allFiles(public_path('icons'));
        
        // Quantos ícones por página
        $perPage = 25;  // Definindo 25 ícones por página (5 linhas com 5 ícones)
        
        // Pega o número da página atual, se não existir, assume a página 1
        $page = $request->get('page', 1);
        
        // Calcula os ícones a serem exibidos nesta página
        $offset = ($page - 1) * $perPage;
        $iconsForPage = array_slice($files, $offset, $perPage);
        
        // Calcula o número total de páginas
        $totalPages = ceil(count($files) / $perPage);
        
        return view('icons.index', [
            'icons' => $iconsForPage,
            'totalPages' => $totalPages,
            'currentPage' => $page,
        ]);
    }
}
