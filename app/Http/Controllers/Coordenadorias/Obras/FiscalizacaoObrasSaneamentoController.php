<?php

namespace App\Http\Controllers\Coordenadorias\Obras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiscalizacaoObrasSaneamentoController extends Controller
{
    public function index()
    {
        return view('coordenadoriaDeObras.celulaFiscalizacaoObrasSaneamento');
    }
}