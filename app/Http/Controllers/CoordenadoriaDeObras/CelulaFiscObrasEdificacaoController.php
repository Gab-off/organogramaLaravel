<?php

namespace App\Http\Controllers\CoordenadoriaDeObras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CelulaFiscObrasEdificacaoController extends Controller
{
    public function index() {
        return view('coordenadoriaDeObras.celulaFiscalizacaoObrasEdificacao');
    }
}
