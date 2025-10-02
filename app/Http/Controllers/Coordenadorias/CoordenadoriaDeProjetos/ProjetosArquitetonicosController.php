<?php

namespace App\Http\Controllers\Coordenadorias\CoordenadoriaDeProjetos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjetosArquitetonicosController extends Controller
{
    public function index()
    {
        return view('coordenadoriaDeProjetos.celulaProjetosArquitetonicos');
    }
}