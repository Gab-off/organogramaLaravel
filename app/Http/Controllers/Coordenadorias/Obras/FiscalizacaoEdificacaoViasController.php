<?php

namespace App\Http\Controllers\Coordenadorias\Obras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiscalizacaoEdificacaoViasController extends Controller
{
    public function index()
    {
        // Usa a view do seu padrão
        return view('coordenadoriaDeObras.celulaFiscalizacaoEdificacaoVias');
    }
}