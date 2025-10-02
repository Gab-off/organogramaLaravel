<?php

namespace App\Http\Controllers\Coordenadorias\CoordenadoriaAdministrativaFinanceira;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TecnologiaDaInformacaoController extends Controller
{
    public function index()
    {
        return view('coordenadoriaAdministrativaFinanceira.celulaTecnologiaDaInformacao');
    }
}