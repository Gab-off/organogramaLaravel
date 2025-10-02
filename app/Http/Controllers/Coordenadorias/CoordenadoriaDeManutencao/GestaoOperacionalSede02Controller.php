<?php

namespace App\Http\Controllers\Coordenadorias\CoordenadoriaDeManutencao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestaoOperacionalSede02Controller extends Controller
{
    public function index()
    {
        return view('coordenadoriaDeManutencao.celulaGestaoOperacionalSede02');
    }
}