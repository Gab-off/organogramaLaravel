<?php

namespace App\Http\Controllers\Coordenadorias\CoordenadoriaJuridica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvaliacaoDeImoveisController extends Controller
{
    public function index()
    {
        return view('coordenadoriaJuridica.celulaAvaliacaoDeImoveis');
    }
}